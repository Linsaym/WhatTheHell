<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Donate"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-200">
                Поддержать проект
            </h2>
        </template>

        <div class="py-6 sm:py-12">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

                <!-- Основная карточка -->
                <div class="rounded-xl bg-gray-800 p-6 sm:p-10">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-3xl font-bold text-white sm:text-4xl">
                            🎉 Йоу, я Лев 🎉
                        </h1>

                        <p class="mt-4 text-lg leading-relaxed text-gray-300">
                            Я создатель этого сайта, гайдов и различных программ для
                            <span class="font-semibold text-white">Royal Quest</span>.
                            <br>В этот проект вложено много времени и труда.
                        </p>

                        <p class="mt-3 text-lg leading-relaxed text-gray-400">
                            Если сайт оказался полезным и вы хотите поддержать его развитие<br>
                            буду очень благодарен ❤️
                        </p>
                    </div>

                    <!-- Способы поддержки -->
                    <div class="mt-8 grid gap-4 sm:grid-cols-2">

                        <a
                            href="https://t.me/Linsaym397"
                            target="_blank"
                            class="group rounded-lg bg-gray-700/50 p-5 transition hover:bg-gray-700"
                        >
                            <div class="text-2xl">💎</div>

                            <h3 class="mt-3 font-semibold text-white">
                                Поддержать криптовалютой
                            </h3>

                            <p class="mt-1 text-sm text-gray-400">
                                Напишите мне в Telegram @Linsaym397
                            </p>

                            <span
                                class="mt-3 inline-block text-sm font-medium text-blue-400 group-hover:text-blue-300"
                            >
                                Открыть Telegram →
                            </span>
                        </a>

                        <div class="rounded-lg bg-gray-700/50 p-5">
                            <div class="text-2xl">🎮</div>

                            <h3 class="mt-3 font-semibold text-white">
                                Написать письмо в игре
                            </h3>

                            <p class="mt-1 text-sm text-gray-400">
                                Мой игровой ник
                            </p>

                            <div class="mt-3 text-lg font-bold text-violet-400">
                                Hellme
                            </div>
                        </div>

                        <div class="rounded-lg bg-gray-700/50 p-5">
                            <div class="text-2xl">💳</div>

                            <h3 class="mt-3 font-semibold text-white">
                                Перевод на карту
                            </h3>

                            <p class="mt-1 text-sm text-gray-400">
                                Сбербанк · СБП
                            </p>

                            <div class="mt-3">
                                <div class="text-lg font-bold text-violet-400">
                                    8 908 224-18-81
                                </div>

                                <div class="mt-1 text-sm text-gray-400">
                                    Якуба Алла Григорьевна
                                </div>
                            </div>
                        </div>

                        <!-- Блок с GitHub Star -->
                        <a
                            href="https://github.com/Linsaym/WhatTheHell"
                            target="_blank"
                            class="group rounded-lg bg-gray-700/50 p-5 transition hover:bg-gray-700"
                        >
                            <div class="text-2xl">⭐</div>

                            <h3 class="mt-3 font-semibold text-white">
                                Поставьте звёздочку на GitHub
                            </h3>

                            <p class="mt-1 text-sm text-gray-400">
                                Звёздочки мне нужны для пропуска на хакатон
                            </p>

                            <span
                                class="mt-3 inline-block text-sm font-medium text-blue-400 group-hover:text-blue-300"
                            >
                                Открыть репозиторий →
                            </span>

                            <div class="mt-1 text-sm text-gray-400">
                                Или даже можете стать контрибьютером :3
                            </div>
                        </a>
                    </div>

                    <p class="mt-8 text-center text-sm text-gray-500">
                        На самом деле у вас не откроется никакой функционал за донат, но я буду счастлив :D<br>
                        Но если серьёзно, после доната можете написать мне в лс и я реализую то, что вам нужно
                    </p>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
