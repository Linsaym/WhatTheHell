<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="RoyalWikiOverlay"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-bold leading-tight text-gray-800 dark:text-gray-200"
            >
                RoyalWikiOverlay
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-3xl font-bold mb-6">RoyalWikiOverlay для Royal Quest</h3>
                            <div class="space-y-4">
                                <div class="text-lg space-y-4">
                                    <p class="text-xl">
                                        Оверлей для быстрого доступа к информации из Royal Wiki прямо во время игры.
                                    </p>
                                    <p>
                                        Преимущества:
                                        <ul class="list-disc ml-6">
                                            <li>Быстрый поиск по базе знаний</li>
                                            <li>Информация о предметах, навыках и боссах</li>
                                            <li>Минималистичный интерфейс</li>
                                            <li>Горячие клавиши для вызова</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Ссылка на скачивание:</strong> <a href="#" class="text-blue-500 underline">Скачать RoyalWikiOverlay</a>
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