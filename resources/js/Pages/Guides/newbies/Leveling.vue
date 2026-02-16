<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Elink from '@/Components/Elink.vue';
</script>

<template>
    <Head title="Прокачка 1-65"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-200"
            >
                Прокачка 1-65
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-100">
                        <div class="mb-4 space-y-8">
                            <!-- Заголовок -->
                            <div class="text-center">
                                <h2 class="text-3xl font-bold text-gray-200 mb-2">
                                    Гайд по прокачке с 1 по 65 уровень
                                </h2>
                                <p class="text-gray-400">Полное руководство для новичков</p>
                            </div>
                            <!-- Тотемы -->
                            <div
                                class="bg-gradient-to-r from-emerald-900/20 to-teal-900/20 p-6 rounded-lg border border-emerald-800">
                                <h3 class="text-xl font-semibold text-gray-200 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-emerald-400" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Тотемы для ускорения прокачки
                                </h3>
                                <p class="text-gray-300 mb-4">Во время всей прокачки вам будут
                                    помогать тотемы:</p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div
                                        class="flex items-center space-x-4 p-4 bg-gray-800 rounded-lg border border-gray-700 hover:shadow-md transition-shadow">
                                        <a href="https://royalquest.info/ru/Тотем_ученика_шамана" target="_blank"
                                           class="flex-shrink-0">
                                            <img src="https://royalquest.info/images/a/a5/Тотем_ученика_шамана.png"
                                                 class="w-12 h-12 rounded-lg hover:scale-110 transition-transform"
                                                 alt="Тотем ученика шамана">
                                        </a>
                                        <div>
                                            <h4 class="font-semibold text-gray-200">Тотем ученика
                                                шамана</h4>
                                            <p class="text-sm text-gray-400">После 5 уровня</p>
                                            <p class="text-sm text-gray-300">+150 опыта за каждого
                                                моба и +150% при активации</p>
                                        </div>
                                    </div>

                                    <div
                                        class="flex items-center space-x-4 p-4 bg-gray-800 rounded-lg border border-gray-700 hover:shadow-md transition-shadow">
                                        <a href="https://royalquest.info/ru/Искажённый_тотем" target="_blank"
                                           class="flex-shrink-0">
                                            <img src="https://royalquest.info/images/7/7f/Искажённый_тотем.png"
                                                 class="w-12 h-12 rounded-lg hover:scale-110 transition-transform"
                                                 alt="Искажённый тотем">
                                        </a>
                                        <div>
                                            <h4 class="font-semibold text-gray-200">Искажённый
                                                тотем</h4>
                                            <p class="text-sm text-gray-400">После 30 уровня</p>
                                            <p class="text-sm text-gray-300">+150 опыта за каждого
                                                моба и +150% при активации</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Карты ученика -->
                        <div
                            class="mb-4 bg-gradient-to-r from-blue-900/20 to-indigo-900/20 p-6 rounded-lg border border-blue-800">
                            <h3 class="text-xl font-semibold text-gray-200 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-400" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Карты ученика
                            </h3>
                            <div class="space-y-3">
                                <p class="text-gray-300">
                                    До 25 уровня будет профитно вставить
                                    <Elink href="https://royalquest.info/ru/Карта_ученика">
                                        карты ученика
                                    </Elink>
                                    дающие +7 опыта при убийстве существ
                                    в доспех и головной убор.
                                </p>
                                <div
                                    class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                                    <p class="text-sm text-gray-300 mb-2">Где достать слотовую
                                        шапку/нагрудник:</p>
                                    <ul class="space-y-1 text-sm text-gray-400">
                                        <li class="flex items-center space-x-2">
                                            <span class="text-green-500">•</span>
                                            <span>Выбить в данжах</span>
                                        </li>
                                        <li class="flex items-center space-x-2">
                                            <span class="text-green-500">•</span>
                                            <span>Получить с мобов</span>
                                        </li>
                                        <li class="flex items-center space-x-2">
                                            <span class="text-green-500">•</span>
                                            <span>Получить за квесты</span>
                                        </li>
                                        <li class="flex items-center space-x-2">
                                            <span class="text-green-500">•</span>
                                            <span>Скрафтить шапку из рецепта купленного в
                                                    <Elink href="https://royalquest.info/ru/Подвал_мельницы"
                                                           class="font-normal">
                                                        мельнице
                                                    </Elink>
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Важное напоминание -->
                        <div
                            class="mb-4 bg-gradient-to-r from-yellow-900/20 to-amber-900/20 p-6 rounded-lg border border-yellow-700">
                            <div class="flex items-center space-x-3">
                                <svg class="w-8 h-8 text-yellow-400 flex-shrink-0" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-lg font-bold text-gray-200">
                                    ВЫ ВСЕГДА МОЖЕТЕ ТЫКНУТЬ НА КАРТИНКУ, ПОПАСТЬ НА ВИКИ И УЗНАТЬ С КОГО ПАДАЕТ ШМОТ
                                </p>
                            </div>
                        </div>
                        <!-- Заработок -->
                        <div
                            class="bg-gradient-to-r from-green-900/20 to-emerald-900/20 p-6 rounded-lg border border-green-800">
                            <h3 class="text-xl font-semibold text-gray-200 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-green-400" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Заработок во время прокачки
                            </h3>

                            <div class="space-y-4">
                                <!-- Элгор -->
                                <div
                                    class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <span class="text-2xl">🌾</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-200 mb-2">Элгор (с 10
                                                уровня)</h4>
                                            <p class="text-gray-300 text-sm">
                                                Делайте задания в Элгоре и собирайте всю траву. С неё падает
                                                <Elink href="https://royalquest.info/ru/Лён">
                                                    Лён
                                                </Elink><!---->,
                                                который продаётся примерно по 1000 за штуку на рынке (нужен для крафта
                                                65 шмота).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Катакомбы -->
                                <div
                                    class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <span class="text-2xl">🏛️</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-200 mb-2">Катакомбы (с
                                                17 уровня)</h4>
                                            <p class="text-gray-300 text-sm">
                                                Переходите в
                                                <Elink href="https://royalquest.info/ru/Катакомбы_1-й_этаж">
                                                    Катакомбы
                                                </Elink><!---->,
                                                где можно выбивать
                                                <Elink href="https://royalquest.info/ru/Хитиновая_пластина">
                                                    Хитиновые пластины
                                                </Elink><!---->.
                                                Их активно скупают для БП (королевский вызов) или ежедневок. Падают с
                                                многих мобов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Далее при всей прокачке из ценного уже в основном "Карты монстров". Если у вас
                                    получиться
                                    выбить
                                    <Elink href="https://royalquest.info/ru/Карта_Богомола">
                                        Карту богомола
                                    </Elink><!---->,
                                    то она будет помогать
                                    вам
                                    зарабатывать больше при убийстве любых мобов
                                </p>
                                <p>
                                    Некоторые карты стоять аномально дорого, например
                                    <Elink href="https://royalquest.info/ru/Карта_Харриера">
                                        Карта харриера
                                    </Elink><!---->.
                                    Если вы выбили
                                    Искажённый тотем, то это вполне хорошее место чтобы прокачаться и нафармить кучу
                                    денег
                                </p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span>После 20 уровня перед вами встаёт выбор "Как дальше качаться?"</span>
                            <ul class="mt-1 list-disc pl-5 text-gray-300 leading-relaxed">
                                <li>
                                    Мобы (фарм денег, опыта Гильдии)
                                </li>
                                <li>
                                    Квесты (весело, разнообразно)
                                </li>
                                <li>
                                    Данжи (более быстрая прокачка)
                                </li>
                            </ul>
                            <div
                                class="mt-3 rounded-lg border border-gray-700 bg-gray-800/50 p-4 text-gray-300 shadow-sm">
                                <p class="leading-relaxed">
                                    Вы можете смело миксовать эти способы. Поделали квестики, побили мобов, нашли пати и
                                    покачались в данжах. Мобов для прокачки лучше фармить тех с кого падают карты или
                                    ресурсы. А так же смотрим чтобы можно было комфортно собирать парики (группы мобов).
                                    Это будут локации:
                                </p>
                                <ul class="mt-3 list-disc space-y-1 pl-5 leading-relaxed">
                                    <li>24-32 лвл - Остров барона Логарта в Ирисе, много муравьёв</li>
                                    <li>32-45 лвл - Эндинополис, любая часть карты</li>
                                    <li>35-45 лвл - Ведок, любая часть карты</li>
                                    <li>45-60 лвл - Шамба, фармится кураре</li>
                                    <li>50-65 лвл - Хабул (борозубки, мороки), если вы ТР или Волш, максимальный опыт
                                    </li>
                                </ul>
                                <div class="mt-4">
                                    <p class="font-medium text-gray-100">Что по поводу данжей:</p>
                                    <div
                                        class="mt-2 overflow-hidden rounded-lg border border-gray-700 bg-gray-900 shadow-sm">
                                        <img class="h-auto w-full" src="/assets/images/guides/dungeon-map.png"
                                             alt="Карта данжей для прокачки Royal Quest">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
