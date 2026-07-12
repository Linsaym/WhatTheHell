<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Tabs, TabsContent, TabsList, TabsTrigger} from "@/Components/ui/tabs/index.js";
import moment from "moment";
import MyTooltip from "@/Components/func/MyTooltip.vue";
import {Button} from "@/Components/ui/button/index.js";
import {useToast} from "vue-toastification";
import 'vue-toastification/dist/index.css';
import {onMounted, onUnmounted, ref} from "vue";
import {
    Dialog,
    DialogClose,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger
} from "@/Components/ui/dialog/index.js"
import {Input} from '@/Components/ui/input'
import {Label} from '@/Components/ui/label'
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger
} from "@/Components/ui/dropdown-menu/index.js";
import {Select, SelectContent, SelectItem, SelectTrigger, SelectValue} from "@/Components/ui/select"

const toast = useToast();


const formatTime = time => moment(time).format('DD.MM.YYYY HH:mm:ss')


const props = defineProps({
    bosses: {
        type: Array
    },
    hiddenBosses: {
        type: Array
    }
});

//TODO добавить подгрузку из localStorage
const voiceMode = ref('girl') // 'off' | 'girl'

const playedSounds = new Set();

const playSound = async (boss, timeLeft) => {
    if (voiceMode.value === 'off') return

    // Приводим timeLeft к ближайшему целевому значению (1, 60, 300)
    // если разница не больше 2
    const targets = [1, 60, 300];
    const normalizedTimeLeft = targets.find(target => Math.abs(timeLeft - target) <= 2) || timeLeft;

    // Создаем уникальный ключ для звука
    const soundKey = `${boss}_${normalizedTimeLeft}`;

    // Если звук уже воспроизводился - пропускаем
    if (playedSounds.has(soundKey)) {
        return;
    }

    const url = `/assets/sounds/${boss}${normalizedTimeLeft}.ogg`

    try {
        const res = await fetch(url, {method: 'HEAD'})

        if (!res.ok) {
            console.log('Озвучка не найдена:', url)
            return
        }

        // Отмечаем, что звук воспроизведен
        playedSounds.add(soundKey);

        const audio = new Audio(url)
        await audio.play()
        console.log(boss)

        // Удаляем ключ через 2 секунды, чтобы можно было снова воспроизвести
        // при следующем появлении босса
        setTimeout(() => {
            playedSounds.delete(soundKey);
        }, 2000);

    } catch (e) {
        console.error('Ошибка при проверке файла:', e)
    }
}


const bossList = ref(props.bosses)
const hiddenBossList = ref(props.hiddenBosses)
const time = ref(moment().format('YYYY-MM-DDTHH:mm:ss'))
const comment = ref('')


const isHistoryModalOpen = ref(false)
const bossHistory = ref([])
const refreshBossList = async () => {
    try {
        const {data} = await axios.get(route('api.get-bosses'));
        bossList.value = addFieldsInBossList(data.bosses);
        hiddenBossList.value = data.hiddenBosses;
    } catch (e) {
        console.error('Ошибка обновления списка:', e);
        toast.error('Не удалось обновить список');
    }
}

const openModal = () => {
    time.value = moment().format('YYYY-MM-DDTHH:mm:ss')
}
/**
 * @typedef {Object} Boss
 * @property {string} time_to_death - Время смерти босса
 * @property {string} respawn - Время через которое появиться босс в формате '02:00:00'
 * @property {string|number} cd - сколько раз босс по КД
 * @property {string} respawnTime - Время когда босс появится
 * @property {string} timeLeft - Сколько времени осталось до появления босса в формате '02:00:00'
 */

/**
 * Добавляет поля "оставшегося времени и респавна босса"
 * @param {Boss} boss - Объект босса
 */
const addFieldsToBoss = (boss) => {
    const now = moment();
    let deathTime = moment(boss.time_to_death); //Время когда босс умер
    let respawnTime = moment(deathTime).add(moment.duration(boss.respawn)); //Время когда босс должен появиться

    // Считаем количество раз, сколько босс пропущен
    let cdCount = 0;


    //TODO вынести этот блок в функцию или избавиться от него. Захуя он? Для тестирования можно добавить босса с респавном 5:05
    // Если разница между текущим временем и респавном <= 5 минут, то показываем '00:00:00' и cd = '-'
    let secondsLeft = respawnTime.diff(now, 'seconds');
    if (secondsLeft >= -300 && secondsLeft <= 0) {
        return {
            ...boss,
            timeLeft: '00:00:00',
            cd: cdCount,
            status: 'Respawn',
            //comment: `Реснулся ${secondsLeft} секунд назад!`,
            respawnTime: respawnTime.format('HH:mm:ss'),
        };
    }

    while (now.isAfter(respawnTime) && cdCount < 5) {
        let deathTime = respawnTime;//Новое предположительное время смерти для расчёта времени появления (используется только в расчётах, нигде не отображается)
        respawnTime = moment(deathTime).add(moment.duration(boss.respawn));
        cdCount++;
    }

    // Я продублировал эту логику, чтобы она работала и на боссов по кд
    // Если разница между текущим временем и респавном <= 5 минут, то показываем '00:00:00' и cd = '-'
    secondsLeft = respawnTime.diff(now, 'seconds');
    if (secondsLeft === 300) {
        playSound(boss.name, 300)
    } else if (secondsLeft === 60) {
        playSound(boss.name, 60)
    } else if (secondsLeft === 1) {
        playSound(boss.name, 1)
    }
    if (secondsLeft >= -300 && secondsLeft <= 0) {
        return {
            ...boss,
            timeLeft: '00:00:00',
            cd: cdCount,
            status: 'Respawn',
            //comment: `Реснулся ${secondsLeft} секунд назад!`,
            respawnTime: respawnTime.format('HH:mm:ss'),
        };
    }

    // Если прошло 5 циклов КД, считаем, что респавн потерян
    if (cdCount >= 5) {
        return {...boss, timeLeft: 'Lost', status: 'lost', cd: cdCount, respawnTime: 'Lost'};
    }


    return {
        ...boss,
        respawnTime: respawnTime.format('HH:mm:ss'),
        status: 'lifeless',
        timeLeft: moment(respawnTime.diff(now)).utc().format('HH:mm:ss'),
        cd: cdCount
    }
}

/**
 * Добавляет поля к каждому боссу в списке и сортирует их.
 * @param {Array.<Boss>} list - Список боссов.
 * @returns {Array.<Boss>} - Отсортированный список с добавленными полями.
 */
const addFieldsInBossList = (list) => {
    return list.map(boss => {
        return addFieldsToBoss(boss);
    }).sort((a, b) => {
        // Специальные случаи для "Lost" и "00:00:00"
        if (a.timeLeft === b.timeLeft) return 0;
        if (a.timeLeft === 'Lost') return 1; // 'Lost' всегда в конце
        if (b.timeLeft === 'Lost') return -1;
        if (a.timeLeft === '00:00:00') return -1; // '00:00:00' всегда раньше
        if (b.timeLeft === '00:00:00') return 1;

        // Сортировка по времени (от меньшего к большему)
        return moment.duration(a.timeLeft).asMilliseconds() - moment.duration(b.timeLeft).asMilliseconds();
    });
}

const updateRespawnTimers = () => {
    bossList.value = addFieldsInBossList(bossList.value)
}


//Возвращает фон для плашки босса
const getBackground = (boss) => {
    const cd = boss.cd
    if (boss.status === 'Respawn') //Если босс только что появился
        return 'respawn-bg';
    else if (cd === 0)
        return 'simple-bg';
    else if (cd === 5) //Если кд равно 5, значит респ утерян
        return 'lost-bg';
    else if (cd >= 1) //Если кд между 1 и 5, значит респ "почти" утерян
        return 'almost-lost-bg';
}


onMounted(() => {
    const interval = setInterval(updateRespawnTimers, 1000);
    updateRespawnTimers(); // Первоначальный расчет

    // Пулим всех боссов через апишку (шобы не перезагружать страницу)
    const refreshInterval = setInterval(refreshBossList, 10000);

    // Очищаем интервал при удалении компонента
    onUnmounted(() => {
        clearInterval(interval);
        clearInterval(refreshInterval);
    });
});


//api start
async function setNewDeathTime(id) {
    // Проверяем, что переданное время, не больше текущего
    // TODO переделать на селект где можно выбрать сегодня/завтра
    const currentDate = new Date();
    const enteredDate = new Date(time.value);
    if (enteredDate > currentDate) {
        toast.error('Кажется вы из будущего. Мы вам не доверяем');
        return;
    }

    try {
        const {data} = await axios.put(route('api.set-currently-time-death', [id]), {
            'time_of_death': moment(time.value).utc().toISOString(),
            'comment': comment.value
        });
        bossList.value = addFieldsInBossList(data.bosses)
        hiddenBossList.value = data.hiddenBosses
        comment.value = ''
        toast.success('Время успешно обновлено!');
    } catch (e) {
        console.log(e)
        toast.error('Не удалось :(');
    }
}

async function dropTime(id) {
    // Я просто записываю босса на 3 дня назад
    try {
        const {data} = await axios.put(route('api.set-currently-time-death', [id]), {
            'time_of_death': moment().subtract(3, 'days').toISOString(),
            'comment': 'Респ утерян'
        });
        bossList.value = addFieldsInBossList(data.bosses)
        hiddenBossList.value = data.hiddenBosses
        comment.value = ''
        toast.success('Теперь респ потерян...');
    } catch (e) {
        console.log(e)
        toast.error('Не удалось :(');
    }
}

async function setDieNow(id) {
    const {data} = await axios.put(route('api.boss-die', id))
    bossList.value = addFieldsInBossList(data.bosses)
    hiddenBossList.value = data.hiddenBosses
    toast.success('Время успешно обновлено!', {timeout: 1000});
}

const addBossInHiddenList = async (id) => {
    try {
        const {data} = await axios.post(route('api.hide-boss', id))
        bossList.value = addFieldsInBossList(data.bosses)
        hiddenBossList.value = data.hiddenBosses
        toast.success('Теперь вы больше не увидите его :3');
    } catch (e) {
        console.log(e)
        toast.error('Не удалось скрыть босса')
    }
}

const deleteBossFromHiddenList = async (id) => {
    try {
        const {data} = await axios.delete(route('api.delete-boss-from-hide-list', id))
        bossList.value = addFieldsInBossList(data.bosses)
        hiddenBossList.value = data.hiddenBosses
        toast.success('Теперь босс будет снова отображаться :3');
    } catch (e) {
        console.log(e)
        toast.error('Не удалось вернуть босса в список')
    }
}

const getBossHistory = async (id) => {
    try {
        const {data} = await axios.get(route('api.boss-history', id))
        bossHistory.value = data
        isHistoryModalOpen.value = true
    } catch (e) {
        console.log(e)
        toast.error('Не удалось получить историю')
        isHistoryModalOpen.value = false
    }
}

//api end

const isUseDieBtn = (boss) => {
    return boss.comment && boss.comment !== 'По кнопке \"Умер!\"'
}

</script>

<template>
    <Head title="Timer">
        <!--Без адаптива пока что-->
        <meta name="viewport" content="width=1200">
    </Head>
    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Таймер боссов
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-100">
                        <Tabs default-value="showed">
                            <div class="flex justify-between">
                                <TabsList class="grid grid-cols-2 w-[400px] mb-6 p-2 rounded">
                                    <TabsTrigger class="data-[state=active]:bg-stone-700 rounded-lg" value="showed">
                                        All
                                    </TabsTrigger>
                                    <TabsTrigger class="data-[state=active]:bg-stone-700 rounded-lg" value="hidden">
                                        Hidden
                                    </TabsTrigger>
                                </TabsList>
                                <div class="p-4">
                                    <Select v-model="voiceMode">
                                        <SelectTrigger
                                            class="w-[150px] h-10 border border-slate-700 bg-[#111827] text-white transition-colors duration-200 hover:bg-[#161e2e] hover:border-slate-600 focus:ring-0 focus:ring-offset-0">
                                            <div class="flex items-center gap-2"><span>🔊</span>
                                                <SelectValue><span v-if="voiceMode === 'off'">Без озвучки</span><span
                                                    v-else-if="voiceMode === 'girl'">Девочка ✨</span></SelectValue>
                                            </div>
                                        </SelectTrigger>
                                        <SelectContent
                                            class="border border-slate-700 bg-[#111827] text-white shadow-none">
                                            <SelectItem value="off"
                                                        class="cursor-pointer focus:bg-slate-800 focus:text-white">🔇 Без
                                                озвучки
                                            </SelectItem>
                                            <SelectItem value="girl"
                                                        class="cursor-pointer focus:bg-slate-800 focus:text-white">🔊
                                                Девочка ✨
                                            </SelectItem>
                                        </SelectContent>
                                    </Select>
                                </div>
                            </div>
                            <TabsContent value="showed">
                                <div v-for="(boss, index) in bossList" :key="boss.id"
                                     class="px-3  rounded mb-2 flex align-middle gap-4 text-xl items-center"
                                     :class="getBackground(boss)">
                                    <div>
                                        <MyTooltip>
                                            <template v-slot:main>
                                                <img class="w-16 h-16 object-cover"
                                                     :src="`/assets/images/bosses/Портрет_${boss.name.replaceAll(' ','_')}.png`"
                                                     :alt="boss.name">
                                            </template>
                                            <template v-slot:text>
                                                <ul>
                                                    <li>Respawn - {{ boss.respawn }}</li>
                                                    <li>Время смерти босса - {{ formatTime(boss.time_to_death) }}</li>
                                                </ul>
                                            </template>
                                        </MyTooltip>
                                    </div>
                                    <div class="w-80">{{ boss.name }}</div>
                                    <div class="w-52">
                                        <MyTooltip>
                                            <template v-slot:main>
                                                <div style="position: relative">
                                                    {{ boss.respawnTime }}
                                                    <p v-if="boss.cd !== 5 && boss.cd !== 'Реснулся!'"
                                                       style="position: absolute; right: -41px;top: -12px; font-size: 15px; display: block;width: 40px; text-align: left">
                                                        <span v-if="isUseDieBtn(boss)">💬</span>
                                                        <span v-if="boss.cd" class="text-gray-400">{{ boss.cd }}</span>
                                                    </p>

                                                </div>

                                            </template>
                                            <template v-slot:text>
                                                <p>
                                                    Время возрождения босса<br>
                                                    <span v-if="boss.comment">💬 - {{ boss.comment }}<br></span>
                                                    <span v-if="boss.cd">
                                                        <span class="text-gray-400">{{ boss.cd }}</span> - сколько раз босс по кд
                                                    </span>
                                                </p>
                                            </template>
                                        </MyTooltip>
                                    </div>
                                    <div>
                                        <MyTooltip>
                                            <template v-slot:main>
                                                {{ boss.timeLeft === 'Lost' ? '' : boss.timeLeft }}
                                            </template>
                                            <template v-slot:text>
                                                Время до возрождения
                                            </template>
                                        </MyTooltip>
                                    </div>
                                    <div class="flex gap-4 ml-auto my-auto align-middle">
                                        <Button variant="secondary" @click="setDieNow(boss.id)">Умер!</Button>
                                        <Dialog>
                                            <DialogTrigger>
                                                <Button variant="secondary" @click="openModal">
                                                    Указать точное время
                                                </Button>
                                            </DialogTrigger>
                                            <DialogContent class="sm:max-w-[525px]">
                                                <DialogHeader>
                                                    <DialogTitle class="text-center">
                                                        Указать точное время смерти
                                                    </DialogTitle>
                                                    <DialogDescription class="text-center">
                                                        Помни, на тебе большая ответственность
                                                    </DialogDescription>
                                                </DialogHeader>
                                                <div class="grid gap-4 py-4">
                                                    <div class="grid grid-cols-4 items-center gap-4">
                                                        <Label>Время cмерти</Label>
                                                        <Input
                                                            id="time_to_death"
                                                            type="datetime-local"
                                                            class="col-span-3"
                                                            v-model="time"
                                                            step="1"
                                                        />
                                                    </div>
                                                    <div class="grid grid-cols-4 items-center gap-4">
                                                        <Label>Комментарий</Label>
                                                        <Input v-model="comment" maxlength="40" id="comment"
                                                               name="comment"
                                                               class="col-span-3"/>
                                                    </div>
                                                </div>
                                                <DialogFooter>
                                                    <DialogClose>
                                                        <Button type="submit" @click="setNewDeathTime(boss.id)">
                                                            Сохранить
                                                        </Button>
                                                    </DialogClose>
                                                </DialogFooter>
                                            </DialogContent>
                                        </Dialog>
                                        <DropdownMenu>
                                            <DropdownMenuTrigger as-child>
                                                <Button variant="secondary">⋮</Button>
                                            </DropdownMenuTrigger>
                                            <DropdownMenuContent class="w-56">
                                                <DropdownMenuItem
                                                    @click="getBossHistory(boss.id)">
                                                    История изменений
                                                </DropdownMenuItem>
                                                <DropdownMenuItem @click="dropTime(boss.id)">
                                                    Респ утерян
                                                </DropdownMenuItem>
                                                <DropdownMenuItem @click="addBossInHiddenList(boss.id)">
                                                    Скрыть
                                                </DropdownMenuItem>
                                            </DropdownMenuContent>
                                        </DropdownMenu>
                                    </div>
                                </div>
                            </TabsContent>
                            <TabsContent value="hidden">
                                <div v-for="(boss, index) in hiddenBossList" :key="boss.id"
                                     class="px-3  rounded mb-2 flex align-middle gap-4 text-xl items-center">
                                    <div>
                                        <img class="w-16 h-16 object-cover"
                                             :src="`/assets/images/bosses/Портрет_${boss.name.replaceAll(' ','_')}.png`"
                                             :alt="boss.name">
                                    </div>
                                    <div class="w-80">{{ boss.name }}</div>
                                    <div class="flex gap-4 ml-auto my-auto align-middle">
                                        <Button variant="secondary" @click="deleteBossFromHiddenList(boss.id)">
                                            Добавить
                                        </Button>
                                    </div>
                                </div>
                            </TabsContent>
                        </Tabs>
                        <!-- Модалка с историей -->
                        <Dialog :open="isHistoryModalOpen"
                                @update:open="(value)=>isHistoryModalOpen=value">
                            <DialogContent
                                class="sm:max-w-[700px] bg-gradient-to-br from-gray-900 to-gray-800 border border-gray-700 shadow-2xl p-4">
                                <DialogHeader class="border-b border-gray-700 pb-3">
                                    <DialogTitle
                                        class="text-center text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                                        📜 История изменений
                                    </DialogTitle>
                                    <DialogDescription class="text-center text-gray-400 text-base mt-1">
                                        Последние 10 изменений
                                    </DialogDescription>
                                </DialogHeader>

                                <!-- Заголовки колонок -->
                                <div
                                    class="grid grid-cols-3 gap-2 px-2 py-2 border-b border-gray-700/50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    <div class="text-left">Время на которое изменили</div>
                                    <div class="text-center">Кто изменил</div>
                                    <div class="text-right">Когда изменил</div>
                                </div>

                                <div class="py-3 max-h-[350px] overflow-y-auto custom-scrollbar">
                                    <div v-if="bossHistory.length === 0" class="text-center text-gray-500 py-6">
                                        <span class="text-3xl block mb-2">📭</span>
                                        <span class="text-base">История пуста</span>
                                    </div>
                                    <ul class="space-y-2.5">
                                        <li v-for="(edit, index) in bossHistory"
                                            :key="index"
                                            class="grid grid-cols-3 gap-2 items-center p-2.5 rounded-lg bg-gray-800/50 hover:bg-gray-700/50 transition-all duration-200 border border-gray-700/50 hover:border-gray-600">

                                            <!-- Колонка 1: Время на которое указали -->
                                            <div class="flex items-center gap-2">
                        <span class="text-blue-400 font-mono text-base font-semibold whitespace-nowrap">
                            {{ formatTime(edit.new_time_to_death) }}
                        </span>
                                            </div>

                                            <!-- Колонка 2: Кто указал -->
                                            <div class="flex justify-center">
                                                <MyTooltip>
                                                    <template v-slot:main>
                                                        <div
                                                            class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-700/50">
                                    <span class="text-purple-400 text-base font-medium">
                                        {{ edit.user.name.substring(0, 20) }}
                                    </span>
                                                            <span class="text-gray-500 text-sm">👤</span>
                                                        </div>
                                                    </template>
                                                    <template v-slot:text>
                                                        <div class="max-w-xs">
                                                            <p class="font-medium text-gray-200 text-base">
                                                                Комментарий:</p>
                                                            <p class="text-gray-400 text-base italic">
                                                                {{ edit.comment || 'Без комментария' }}
                                                            </p>
                                                        </div>
                                                    </template>
                                                </MyTooltip>
                                            </div>

                                            <!-- Колонка 3: Когда отметили -->
                                            <div class="text-right">
                        <span
                            class="text-gray-400 text-base font-mono flex items-center justify-end gap-1.5 whitespace-nowrap">
                            <span>🕐</span>
                            {{ formatTime(edit.created_at) }}
                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <DialogFooter class="border-t border-gray-700 pt-3">
                                    <DialogClose as-child>
                                        <Button variant="outline"
                                                class="w-full bg-gray-700 hover:bg-gray-600 border-gray-600 text-gray-200 hover:text-white transition-colors text-base py-2">
                                            ✕ Закрыть
                                        </Button>
                                    </DialogClose>
                                </DialogFooter>
                            </DialogContent>
                        </Dialog>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
#radix-vue-tabs-v-6-trigger-showed {

}

.simple-bg {
    background: #4b3458;
}

.respawn-bg {
    background: #914040;
}

.almost-lost-bg {
    background: #323560;
}

.lost-bg {
    background: none;
}

/* Стили для кастомного скроллбара */
.custom-scrollbar::-webkit-scrollbar {
    width: 4px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(75, 85, 99, 0.2);
    border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #60a5fa, #a78bfa);
    border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
}

/* Анимация появления элементов списка */
.custom-scrollbar li {
    animation: fadeInSlide 0.25s ease-out forwards;
    opacity: 0;
}

.custom-scrollbar li:nth-child(1) {
    animation-delay: 0.03s;
}

.custom-scrollbar li:nth-child(2) {
    animation-delay: 0.06s;
}

.custom-scrollbar li:nth-child(3) {
    animation-delay: 0.09s;
}

.custom-scrollbar li:nth-child(4) {
    animation-delay: 0.12s;
}

.custom-scrollbar li:nth-child(5) {
    animation-delay: 0.15s;
}

.custom-scrollbar li:nth-child(6) {
    animation-delay: 0.18s;
}

.custom-scrollbar li:nth-child(7) {
    animation-delay: 0.21s;
}

.custom-scrollbar li:nth-child(8) {
    animation-delay: 0.24s;
}

.custom-scrollbar li:nth-child(9) {
    animation-delay: 0.27s;
}

.custom-scrollbar li:nth-child(10) {
    animation-delay: 0.3s;
}

@keyframes fadeInSlide {
    from {
        opacity: 0;
        transform: translateY(8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Улучшение читаемости для мониторов */
@media (min-width: 1920px) {
    .custom-scrollbar li {
        font-size: 1.1rem !important;
    }
}
</style>
