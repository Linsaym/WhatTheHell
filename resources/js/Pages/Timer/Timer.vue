<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Tabs, TabsList, TabsContent, TabsTrigger} from "@/Components/ui/tabs/index.js";
import moment from "moment";
import MyTooltip from "@/Components/func/MyTooltip.vue";
import {Button} from "@/Components/ui/button/index.js";
import {useToast} from "vue-toastification";
import 'vue-toastification/dist/index.css';
import {onMounted, onUnmounted, ref, watch} from "vue";

const toast = useToast();


const formatTime = time => moment(time).format('DD.MM.YYYY HH:mm:ss')

const props = defineProps({
    bosses: {
        type: Array
    }
});

const bossList = ref(props.bosses)

//Добавляет поля "оставшегося времени и респавна босса
const addFieldsToBoss = (boss) => {
    const now = moment();
    const deathTime = moment(boss.time_to_death); //Время когда босс умер
    const respawnTime = moment(deathTime).add(moment.duration(boss.respawn)); //Время когда босс должен появится если его не пропустили

    // Если текущее время уже больше времени респавна, нужно учитывать КД
    if (now.isAfter(respawnTime)) {
        // Пропущенный респавн - применяем логику КД
        return {...boss, timeLeft: '00:00:00', cd: 1, respawnTime: '00:00:00'}
    }
    return {
        ...boss,
        respawnTime: respawnTime.format('HH:mm:ss'),
        timeLeft: moment(respawnTime.diff(now)).utc().format('HH:mm:ss'),
        cd: 0
    }
}

const addFieldsInBossList = (list) => {
    return list.map(boss => {
        return addFieldsToBoss(boss);
    });
}

const updateRespawnTimers = () => {
    bossList.value = addFieldsInBossList(bossList.value)
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
                                     style="background-color: #c8e6c9;">
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
                                        <Button @click="setNewDeathTime">Указать точное время</Button>
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
    background: rgb(191 191 191);
}

.almost-lost-bg {
    background: #e5d6b2;
}

.lost-bg {
    background: rgb(243 243 236);
}
</style>
