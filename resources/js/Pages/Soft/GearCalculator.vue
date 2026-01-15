<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Онлайн калькулятор шмота"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-bold leading-tight text-gray-800 dark:text-gray-200"
            >
                Онлайн калькулятор шмота
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-3xl font-bold mb-6">Онлайн калькулятор шмота для Royal Quest</h3>
                            <div class="space-y-4">
                                <div class="text-lg space-y-4">
                                    <p class="text-xl">
                                        Этот инструмент поможет вам рассчитать оптимальную экипировку для вашего персонажа.
                                        Введите параметры вашего шмота и получите рекомендации по улучшению.
                                    </p>
                                    <p>
                                        Функции калькулятора:
                                        <ul class="list-disc ml-6">
                                            <li>Расчет DPS (урон в секунду)</li>
                                            <li>Анализ статов (атака, защита, здоровье)</li>
                                            <li>Сравнение разных сетов экипировки</li>
                                            <li>Рекомендации по апгрейду предметов</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Ссылка на калькулятор:</strong> <a href="#" class="text-blue-500 underline">Открыть калькулятор</a>
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