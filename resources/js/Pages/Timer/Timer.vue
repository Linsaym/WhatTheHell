<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Tabs, TabsList, TabsContent, TabsTrigger} from "@/Components/ui/tabs/index.js";
import moment from "moment";
import {onBeforeUnmount, onMounted, ref} from "vue";

const formatTime = time => moment(time).format('DD.MM.YYYY HH:mm:ss')

const respawnTime = (respawn, timeToDie) => {
    const rebornTime = moment(timeToDie);
    rebornTime.add(moment.duration(respawn))//Прибавляем время респавна
    return formatTime(rebornTime)
}

const remainedTimes = ref([]);

const props = defineProps({
    bosses: {
        type: Array
    }
});

// Функция для обновления remainedTimes
const updateRemainedTimes = () => {
    const now = moment().local();
    remainedTimes.value = props.bosses.map(boss => {
        const rebornTime = moment(boss.time_to_death).add(moment.duration(boss.respawn));
        const diff = rebornTime.diff(now);

        if (diff <= 0) {
            return '00:00:00'; // Время респавна прошло
        }

        const duration = moment.duration(diff);
        const hours = String(duration.hours()).padStart(2, '0');
        const minutes = String(duration.minutes()).padStart(2, '0');
        const seconds = String(duration.seconds()).padStart(2, '0');

        return `${hours}:${minutes}:${seconds}`;
    });
};

onMounted(() => {
    // Обновляем remainedTimes сразу
    updateRemainedTimes();

    // Устанавливаем интервал для обновления каждую секунду
    const interval = setInterval(updateRemainedTimes, 1000);

    // Очищаем интервал при размонтировании компонента
    onBeforeUnmount(() => {
        clearInterval(interval);
    });
});


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
                                <div v-for="(boss, index) in bosses" :key="boss.id" class="flex align-middle gap-4">
                                    <div>
                                        <img class="w-16 h-16"
                                             :src="`/assets/images/bosses/Портрет_${boss.name.replaceAll(' ','_')}.png`"
                                             :alt="boss.name">
                                    </div>
                                    <div>{{ boss.name }}</div>
                                    <div>{{ boss.respawn }}</div>
                                    <div>{{ formatTime(boss.time_to_death) }}</div>
                                    <div>{{ respawnTime(boss.respawn, boss.time_to_death) }}</div>
                                    <div class="ml-auto">{{
                                            remainedTimes[index]
                                        }}
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
