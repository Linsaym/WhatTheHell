<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Tabs, TabsList, TabsContent, TabsTrigger} from "@/Components/ui/tabs/index.js";
import moment from "moment";
import MyTooltip from "@/Components/func/MyTooltip.vue";
import {Button} from "@/Components/ui/button/index.js";
import {useToast} from "vue-toastification";
import 'vue-toastification/dist/index.css';
import {onMounted, onUnmounted, ref} from "vue";
import {
    Dialog,
    DialogTrigger,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogDescription,
    DialogContent, DialogClose
} from "@/Components/ui/dialog/index.js"
import {Input} from '@/Components/ui/input'
import {Label} from '@/Components/ui/label'
import {
    DropdownMenu,
    DropdownMenuTrigger,
    DropdownMenuItem,
    DropdownMenuContent
} from "@/Components/ui/dropdown-menu/index.js";

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

const bossList = ref(props.bosses)
const hiddenBossList = ref(props.hiddenBosses)
const time = ref(moment().format('YYYY-MM-DDTHH:mm:ss'))
const comment = ref('')
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


    // Если разница между текущим временем и респавном <= 5 минут, то показываем '00:00:00' и cd = '-'
    let minutesLeft = respawnTime.diff(now, 'minutes');
    if (minutesLeft >= -5 && minutesLeft <= 0) {
        return {...boss, timeLeft: '00:00:00', cd: 'Реснулся!', respawnTime: respawnTime.format('HH:mm:ss'),};
    }

    while (now.isAfter(respawnTime) && cdCount < 5) {
        let deathTime = respawnTime;//Новое предположительное время смерти для расчёта времени появления (используется только в расчётах, нигде не отображается)
        respawnTime = moment(deathTime).add(moment.duration(boss.respawn));
        cdCount++;
    }

    // Я продублировал эту логику, чтобы она работала и на боссов по кд
    // Если разница между текущим временем и респавном <= 5 минут, то показываем '00:00:00' и cd = '-'
    minutesLeft = respawnTime.diff(now, 'minutes');
    if (minutesLeft >= -5 && minutesLeft <= 0) {
        return {...boss, timeLeft: '00:00:00', cd: 'Реснулся!', respawnTime: respawnTime.format('HH:mm:ss'),};
    }

    // Если прошло 5 циклов КД, считаем, что респавн потерян
    if (cdCount >= 5) {
        return {...boss, timeLeft: 'Lost', cd: cdCount, respawnTime: 'Lost'};
    }


    return {
        ...boss,
        respawnTime: respawnTime.format('HH:mm:ss'),
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
const getBackground = (cd) => {
    if (cd === 'Реснулся!') //Если босс только что появился вместо cd, будет стоять -
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

    // Очищаем интервал при удалении компонента
    onUnmounted(() => {
        clearInterval(interval);
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

//api end

const isUseDieBtn = (boss) => {
    return boss.comment && boss.comment !== 'По кнопке \"Умер!\"'
}

</script>

<template>
    <Head title="Timer"/>
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
                            <TabsList class="grid grid-cols-2 w-[400px] mb-6 p-2 rounded">
                                <TabsTrigger class="data-[state=active]:bg-stone-700 rounded-lg" value="showed">
                                    All
                                </TabsTrigger>
                                <TabsTrigger class="data-[state=active]:bg-stone-700 rounded-lg" value="hidden">
                                    Hidden
                                </TabsTrigger>
                            </TabsList>
                            <TabsContent value="showed">
                                <div v-for="(boss, index) in bossList" :key="boss.id"
                                     class="px-3  rounded mb-2 flex align-middle gap-4 text-xl items-center"
                                     :class="getBackground(boss.cd)">
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
                                                <DropdownMenuItem @click="toast.warning('У вас нет прав')">
                                                    История изменений
                                                </DropdownMenuItem>
                                                <DropdownMenuItem @click="addBossInHiddenList(boss.id)">Скрыть
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
</style>
