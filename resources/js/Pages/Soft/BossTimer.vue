<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Персональный таймер боссов"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-bold leading-tight text-gray-800 dark:text-gray-200"
            >
                Персональный таймер боссов
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-3xl font-bold mb-6">Персональный таймер боссов для Royal Quest</h3>
                            <div class="space-y-4">
                                <div class="text-lg space-y-4">
                                    <p class="text-xl">
                                        Удобный инструмент для отслеживания времени респавна боссов. Никогда не пропустите появление нужного босса!
                                    </p>
                                    <p>
                                        Функции таймера:
                                        <ul class="list-disc ml-6">
                                            <li>Таймеры для всех мировых боссов</li>
                                            <li>Персональные напоминания</li>
                                            <li>Синхронизация с серверным временем</li>
                                            <li>Уведомления о респавне</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Ссылка на таймер:</strong> <a href="#" class="text-blue-500 underline">Открыть таймер</a>
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