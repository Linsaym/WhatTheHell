<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Tabs, TabsList, TabsContent, TabsTrigger} from "@/Components/ui/tabs/index.js";
import moment from "moment";
import BossCountdownTimer from "@/Components/func/BossCountdownTimer.vue";
import MyTooltip from "@/Components/func/MyTooltip.vue";
import {Button} from "@/Components/ui/button/index.js";

const formatTime = time => moment(time).format('DD.MM.YYYY HH:mm:ss')

const respawnTime = (respawn, timeToDie) => {
    const rebornTime = moment(timeToDie);
    rebornTime.add(moment.duration(respawn))//Прибавляем время респавна
    return moment(rebornTime).format('HH:mm:ss')
}

const props = defineProps({
    bosses: {
        type: Array
    }
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
                            <!--
                                    #e5d6b2 - КД
                                    rgb(243 243 236) - потерян
                                    rgb(191 191 191) - реснулся!
                                    #c8e6c9 - Обычный
                            -->
                            <TabsContent value="showed">
                                <div v-for="(boss, index) in bosses" :key="boss.id"
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
                                                {{ respawnTime(boss.respawn, boss.time_to_death) }}
                                            </template>
                                            <template v-slot:text>Время возрождения босса</template>
                                        </MyTooltip>
                                    </div>
                                    <div class="ml-4 w-48">
                                        <BossCountdownTimer :respawn="boss.respawn" :death_time="boss.time_to_death"/>
                                    </div>
                                    <div class="flex gap-4 ml-auto my-auto">
                                        <Button>Умер!</Button>
                                        <Button>Указать точное время</Button>
                                        <Button>⋮</Button>
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
