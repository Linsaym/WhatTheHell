<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Tabs, TabsList, TabsContent, TabsTrigger} from "@/Components/ui/tabs/index.js";


defineProps({
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
                        Таблица таймера боссов
                        <div>Табы (которых ты отметил/которых не отметил)</div>
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
                                <div v-for="boss in bosses" class="flex align-middle gap-4">
                                    <div>
                                        <img class="w-16"
                                             :src="`/assets/images/bosses/Портрет_${boss.name.replaceAll(' ','_')}.png`"
                                             :alt="boss.name">
                                    </div>
                                    <div>{{ boss.name }}</div>
                                    <div>{{ boss.respawn }}</div>
                                    <div>{{ boss.time_to_death }}</div>
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
