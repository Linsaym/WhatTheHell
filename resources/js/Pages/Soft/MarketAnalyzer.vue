<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Анализатор рынка"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-bold leading-tight text-gray-800 dark:text-gray-200"
            >
                Анализатор рынка
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-3xl font-bold mb-6">Анализатор рынка Royal Quest</h3>
                            <div class="space-y-4">
                                <div class="text-lg space-y-4">
                                    <p class="text-xl">
                                        Инструмент для анализа цен на предметы в игре. Помогает отслеживать тренды и находить выгодные сделки.
                                    </p>
                                    <p>
                                        Возможности:
                                        <ul class="list-disc ml-6">
                                            <li>Мониторинг цен на ресурсы и предметы</li>
                                            <li>Графики изменения цен со временем</li>
                                            <li>Уведомления о выгодных предложениях</li>
                                            <li>Статистика продаж</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Ссылка на анализатор:</strong> <a href="#" class="text-blue-500 underline">Открыть анализатор</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>