<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Выбор класса"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Какой класс выбрать?
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="space-y-8">
                            <!-- Подклассы -->
                            <div
                                class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 p-6 rounded-lg border border-blue-200 dark:border-blue-800">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-blue-600 dark:text-blue-400" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Классовые специализации
                                </h3>
                                <p class="text-gray-700 dark:text-gray-300 mb-4">Каждый из классов делится на 2
                                    уникальных подкласса:</p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <div
                                        class="flex items-center space-x-3 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-2xl">⚔️</span>
                                        <div>
                                            <span class="font-medium text-gray-800 dark:text-gray-200">Мечник</span>
                                            <span
                                                class="text-gray-600 dark:text-gray-400"> (Тёмный рыцарь, Крестоносец)</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center space-x-3 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-2xl">🔮</span>
                                        <div>
                                            <span class="font-medium text-gray-800 dark:text-gray-200">Маг</span>
                                            <span
                                                class="text-gray-600 dark:text-gray-400"> (Волшебник, Чернокнижник)</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center space-x-3 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-2xl">🗡️</span>
                                        <div>
                                            <span class="font-medium text-gray-800 dark:text-gray-200">Вор</span>
                                            <span class="text-gray-600 dark:text-gray-400"> (Ассасин, Разбойник)</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center space-x-3 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-2xl">🏹</span>
                                        <div>
                                            <span class="font-medium text-gray-800 dark:text-gray-200">Лучник</span>
                                            <span class="text-gray-600 dark:text-gray-400"> (Охотник, Снайпер)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Критерии сравнения -->
                            <div
                                class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-purple-900/20 dark:to-pink-900/20 p-6 rounded-lg border border-purple-200 dark:border-purple-800">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-purple-600 dark:text-purple-400" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Критерии выбора класса
                                </h3>
                                <p class="text-gray-700 dark:text-gray-300 mb-4">
                                    Конечно можно выбрать класс, который нравится визуально, но если вы хотите сделать
                                    осознанный выбор,
                                    сравните классы по следующим параметрам:
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">🎯</span>
                                        <span class="text-gray-700 dark:text-gray-300">Сложность</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">👥</span>
                                        <span class="text-gray-700 dark:text-gray-300">Полезность в группе</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">⚙️</span>
                                        <span class="text-gray-700 dark:text-gray-300">Зависимость от экипировки</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">💥</span>
                                        <span class="text-gray-700 dark:text-gray-300">Урон по соло цели</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">🌊</span>
                                        <span class="text-gray-700 dark:text-gray-300">Урон по группе мобов</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">⚔️</span>
                                        <span class="text-gray-700 dark:text-gray-300">Актуальность в масс PVP</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">🤺</span>
                                        <span class="text-gray-700 dark:text-gray-300">Актуальность в PVP (дуэли)</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 p-3 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                        <span class="text-lg">🏆</span>
                                        <span class="text-gray-700 dark:text-gray-300">Актуальность в PVP (арены)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Рекомендации для новичков -->
                        <div
                            class="mt-4 from-amber-50 to-orange-50 dark:from-amber-900/20 dark:to-orange-900/20 p-6 rounded-lg dark:border-amber-800">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-amber-600 dark:text-amber-400" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                Топ 3 класса для первого персонажа
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">
                                Если вы делаете первого персонажа, то разумнее всего выбрать класс <span
                                class="font-semibold text-amber-700 dark:text-amber-400">не зависимый от шмота</span> и
                                с <span class="font-semibold text-amber-700 dark:text-amber-400">высокой скоростью прокачки</span>.
                                Скорость прокачки зависит от выживаемости и наличия урона по группе мобов.
                            </p>

                            <!-- Топ 3 класса -->
                            <div class="space-y-4 mb-6">
                                <div
                                    class="flex items-center space-x-4 p-4 from-yellow-100 to-amber-100 dark:from-yellow-900/30 dark:to-amber-900/30 dark:border-yellow-700">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center font-bold text-lg">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <Link href="{{ route('guides.wizard') }}"
                                              class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:text-yellow-600 dark:hover:text-yellow-400 transition-colors">
                                            Волшебник
                                        </Link>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Самый жоский фармила. Топ 1
                                            по скорости прокачки (но придёться понажимать кнопки)</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center space-x-4 p-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 text-white rounded-full flex items-center bg-red-950 justify-center font-bold text-lg">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <Link href="{{ route('guides.dark-knight') }}"
                                              class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 transition-colors">
                                            Тёмный рыцарь
                                        </Link>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Бессмертный танковый
                                            класс. 4 кнопки и можно закрыть глаза. Нужен в любой пачке (хоть PVP, хоть
                                            PVE)</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center space-x-4 p-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-orange-600 text-white rounded-full flex items-center justify-center font-bold text-lg">
                                        3
                                    </div>
                                    <div class="flex-1">
                                        <Link href="{{ route('guides.hunter') }}"
                                              class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                                            Охотник
                                        </Link>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Самый живучий ДД класс.
                                            Простой. Дешёвый. Нужный в любых данжах</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Подробное описание -->
                            <div class="space-y-4">
                                <div
                                    class="p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <span class="text-2xl">🔮</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">
                                                Волшебник</h4>
                                            <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                                                Не зависит от экипировки. Главная характеристика - скорость бега.
                                                Безусловно волшебник проиграет по урону любому ДД классу, но для фарма
                                                много урона не нужно.
                                                Большинство обычных мобов имеют немного хп и будут умирать за
                                                <a href="https://royalquest.info/ru/Стена_огня"
                                                   class="text-blue-500 underline hover:text-blue-600 transition-colors"
                                                   target="_blank">стенку огня</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <span class="text-2xl">⚔️</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">Тёмный
                                                рыцарь</h4>
                                            <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                                                Хилится от количества мобов
                                                <a href="https://royalquest.info/ru/Тёмный_рыцарь"
                                                   class="text-blue-500 underline hover:text-blue-600 transition-colors"
                                                   target="_blank">(ветка кровь)</a>,
                                                поэтому при фарме мобов, которые дамажат меньше чем он хилится, он
                                                становится бессмертным.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <span class="text-2xl">🏹</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">Охотник</h4>
                                            <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                                                Самый живучий из ДД классов на ранних этапах за счёт скила
                                                <a href="https://royalquest.info/ru/Чучело"
                                                   class="text-blue-500 underline hover:text-blue-600 transition-colors"
                                                   target="_blank">чучело</a>.
                                                При этом класс очень простой, подробнее можете прочитать в его гайде.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <div class="bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-900/20 dark:to-teal-900/20 p-6 rounded-lg border border-emerald-200 dark:border-emerald-800">
                                        <div class="flex items-center mb-4">
                                            <svg class="w-6 h-6 mr-3 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Игра с друзьями</h4>
                                        </div>
                                        
                                        <div class="space-y-4">
                                            <div class="flex items-start space-x-3 p-4 bg-white dark:bg-gray-800 rounded-lg border border-emerald-100 dark:border-emerald-800">
                                                <span class="text-2xl flex-shrink-0">🤝</span>
                                                <div>
                                                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                                        Возможно вы начинаете играть с друзьями, тогда вы можете сразу взять одну из
                                                        связок. Из очевидного это связка <span class="font-semibold text-emerald-700 dark:text-emerald-400">Танк + ДД</span>.
                                                    </p>
                                                    <div class="mt-3 space-y-2">
                                                        <div class="flex items-center space-x-2 text-sm">
                                                            <span class="text-red-600 dark:text-red-400">🛡️</span>
                                                            <span class="text-gray-600 dark:text-gray-400">
                                                                Если танк - <strong>ТР</strong>, он сможет собирать огромные парики в данжах (на пример на Принце Мары)
                                                            </span>
                                                        </div>
                                                        <div class="flex items-center space-x-2 text-sm">
                                                            <span class="text-yellow-600 dark:text-yellow-400">✨</span>
                                                            <span class="text-gray-600 dark:text-gray-400">
                                                                За креста же в свою очередь проще собирать парики обычных мобов (Эндинополис/Шамба)
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-start space-x-3 p-4 bg-gradient-to-r from-red-50 to-orange-50 dark:from-red-900/20 dark:to-orange-900/20 rounded-lg border border-red-200 dark:border-red-800">
                                                <span class="text-2xl flex-shrink-0">💥</span>
                                                <div>
                                                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                                        Из всех ДД самый высокий массовый урон будет у <span class="font-semibold text-red-700 dark:text-red-400">Чернокнижника</span>.
                                                    </p>
                                                    <div class="mt-2 p-3 bg-white dark:bg-gray-800 rounded-md border border-red-100 dark:border-red-800">
                                                        <p class="text-sm font-medium text-red-800 dark:text-red-300">
                                                            🔥 Максимальный профит: связка ТР+ЧК
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
