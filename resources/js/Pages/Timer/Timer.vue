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
    DialogContent
} from "@/Components/ui/dialog/index.js"

const toast = useToast();


const formatTime = time => moment(time).format('DD.MM.YYYY HH:mm:ss')

const props = defineProps({
    bosses: {
        type: Array
    }
});

const bossList = ref(props.bosses)

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
    const minutesLeft = respawnTime.diff(now, 'minutes');
    if (minutesLeft >= -5 && minutesLeft <= 0) {
        return {...boss, timeLeft: '00:00:00', cd: 'Реснулся!', respawnTime: respawnTime.format('HH:mm:ss'),};
    }

    while (now.isAfter(respawnTime) && cdCount < 5) {
        let deathTime = respawnTime;//Новое предположительное время смерти для расчёта времени появления (используется только в расчётах, нигде не отображается)
        respawnTime = moment(deathTime).add(moment.duration(boss.respawn));
        cdCount++;
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
 * @returns {Array.<Object>} - Отсортированный список с добавленными полями.
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
async function setNewDeathTime() {
    toast.warning('Этот раздел появиться позже :3');
}

async function setDieNow(id) {
    const {data} = await axios.put(route('api.boss-die', {id: id}))
    bossList.value = addFieldsInBossList(data.bosses)
    toast.success('Время успешно обновлено!', {timeout: 1000});
}

//api end

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
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <Tabs default-value="showed">
                            <TabsList class="grid grid-cols-2 w-[400px]">
                                <TabsTrigger value="showed">
                                    All
                                </TabsTrigger>
                                <TabsTrigger value="hidden">
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
                                                    <li>respawn - {{ boss.respawn }}</li>
                                                    <li>Время смерти босса - {{ formatTime(boss.time_to_death) }}</li>
                                                </ul>
                                            </template>
                                        </MyTooltip>
                                    </div>
                                    <div class="w-72">{{ boss.name }}</div>
                                    <div class="w-48">
                                        <MyTooltip>
                                            <template v-slot:main>
                                                {{ boss.respawnTime }}
                                            </template>
                                            <template v-slot:text>Время возрождения босса</template>
                                        </MyTooltip>
                                    </div>
                                    <div class="ml-4 w-48">
                                        <div class="flex">
                                            <div class="w-48">
                                                <MyTooltip>
                                                    <template v-slot:main>{{ boss.cd }}</template>
                                                    <template v-slot:text>
                                                        <p class="mb-2">КД</p>
                                                        <p>
                                                            Что такое кд? <br>
                                                            Если после возрождения босса, cпустя 5 минут, никто не
                                                            переписал его таймер,<br>
                                                            значит, предполагается, что на босса никто не пришёл. <br>
                                                            <br>
                                                            В таком случае, записывается "КД 1 раз", и время респавна
                                                            высчитывается как будто<br>
                                                            босс сразу умер после возрождения. И так до 5-ти раз, после
                                                            чего респ становиться утерянным
                                                            <br>
                                                            КД нужно для того, чтобы в случае того если никто не пришёл
                                                            на босса, высчитать его примерное
                                                            время возрождения
                                                        </p>
                                                    </template>
                                                </MyTooltip>
                                            </div>
                                            <MyTooltip>
                                                <template v-slot:main>
                                                    {{ boss.timeLeft }}
                                                </template>
                                                <template v-slot:text>
                                                    Время до возрождения
                                                </template>
                                            </MyTooltip>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 ml-auto my-auto">
                                        <Button @click="setDieNow(boss.id)">Умер!</Button>
                                        <Dialog>
                                            <DialogTrigger>
                                                <Button>Указать точное время</Button>
                                            </DialogTrigger>
                                            <DialogContent>
                                                <DialogHeader>
                                                    <DialogTitle>Edit profile</DialogTitle>
                                                    <DialogDescription>
                                                        Make changes to your profile here. Click save when you're done.
                                                    </DialogDescription>
                                                </DialogHeader>

                                                <DialogFooter>
                                                    Save changes
                                                </DialogFooter>
                                            </DialogContent>
                                        </Dialog>
                                        <MyTooltip>
                                            <template v-slot:main>
                                                <Button>⋮</Button>
                                            </template>
                                            <template v-slot:text>
                                                Внутри будет
                                                <ul class="list-disc ml-5">
                                                    <li>История изменений</li>
                                                    <li>удаление из списка</li>
                                                </ul>
                                            </template>
                                        </MyTooltip>
                                    </div>
                                </div>
                            </TabsContent>
                            <TabsContent value="hidden">
                                <div>Спрятанные</div>
                            </TabsContent>
                        </Tabs>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
.simple-bg {
    background: #c8e6c9;
}

.respawn-bg {
    background: rgb(243 243 236);
}

.almost-lost-bg {
    background: #e5d6b2;
}

.lost-bg {
    background: rgb(191 191 191);
}
</style>
