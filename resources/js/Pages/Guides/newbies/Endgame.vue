<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="65-lvl"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-200"
            >
                Что делать после достижения 65 уровня?
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-100">
                        <div>
                            Основной endgame контент состоит из:
                            <ul class="list-disc list-inside my-2">
                                <li>Фарм денег и карт</li>
                                <li>
                                    Походы на
                                    <elink :href="route('guides.bosses')">
                                        мировых боссов
                                    </elink>
                                    и
                                    <elink :href="route('guides.bosses')">
                                        элиток
                                    </elink>
                                </li>
                                <li>Выполнение длинной цепочки квестов</li>
                                <li>Крафт топ шмота (17кк на одну шмотку)</li>
                                <li>Прохождение сложнейших данжей (4ки и 8ки)</li>
                            </ul>
                        </div>
                        <div>
                            Ссылка туда, ссылка сюда
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
