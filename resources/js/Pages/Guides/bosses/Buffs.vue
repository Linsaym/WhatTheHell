<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Elink from '@/Components/Elink.vue';
</script>

<template>
    <Head title="Школа баферства">
        <!--Без адаптива пока что-->
        <meta name="viewport" content="width=1200">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <div class="relative">
                <h2
                    class="text-2xl font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-yellow-500"
                >
                    Школа баферства
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-xl sm:rounded-2xl bg-gradient-to-br from-gray-800/90 to-gray-900/95 backdrop-blur-sm border border-gray-700/50"
                >
                    <div class="p-6 lg:p-8 text-gray-100">
                        <div>
                            <div class="relative mb-8">
                                <h3 class="text-4xl font-black bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                                    Гайд по баферству на боссах
                                </h3>
                            </div>

                            <div class="space-y-8">
                                <div class="text-lg space-y-6 leading-relaxed">
                                    <p class="text-xl text-gray-200 border-l-4 border-amber-500 pl-4 py-1 bg-gray-800/50 rounded-r-lg">
                                        Дроп с боссов и элиток получают только четыре игрока с наибольшим уроном.
                                        Исключение составляют ПВП боссы и Зибо, но это не сюда. Даже самый сильный ДД не
                                        справится в одиночку. Поэтому нужны "баферы"
                                        <br><br>
                                        У крестоносца, тёмного рыцаря и лучников(снайпер, охотник) есть различные умения
                                        и таланты, усиливающие урон. Сейчас обсудим их более детально, а о талантах вы
                                        можете узнать подробнее в гайдах своего класса.
                                    </p>

                                    <div class="bg-gray-800/40 rounded-2xl p-6 border border-gray-700/60 shadow-inner">
                                        <h4 class="text-2xl font-bold mb-5 flex items-center gap-2">
                                            <span class="text-amber-400 text-3xl">✦</span>
                                            Список баферских скилов
                                            <span class="text-amber-400 text-3xl">✦</span>
                                        </h4>
                                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/index.php/Мишень"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/0/0c/Умение_Мишень.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Мишень Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Мишень</span> (охотник,
                                                    снайпер). Увеличивает урон дальников которые находятся в группе
                                                </p>
                                            </li>
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/index.php/Поход"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/2/27/Умение_Поход.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Поход Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Поход</span> (охотник,
                                                    снайпер). Увеличивает скорость атаки всех челенов группы
                                                </p>
                                            </li>
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/index.php/Воодушевление"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/3/3d/Умение_Воодушевление.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Воодушевление Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Воодушевление</span>.
                                                    Накладывает эффект "Мощь (х3)" (Увеличивает атаку на 6%). Может
                                                    стакаться до 10 эффектов
                                                </p>
                                            </li>
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/index.php/Штандарт_тьмы"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/5/51/Умение_Штандарт_тьмы.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Штандарт тьмы Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Штандарт Тьмы</span> (Тёмный
                                                    рыцарь). Союзники наносят повышенный на 8% урон.
                                                </p>
                                            </li>
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/index.php/Знамя_света"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/b/b2/Умение_Знамя_света.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Знамя света Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Знамя света</span>
                                                    (крестоносец). С талантом
                                                    <Elink
                                                        href="https://royalquest.info/index.php/Талант_—_Воин_света"
                                                        class="text-amber-400 hover:text-amber-300 no-underline hover:underline transition-colors font-medium"
                                                    >
                                                        Воин света
                                                    </Elink>
                                                    увеличивает атаку союзников на 15%
                                                </p>
                                            </li>
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/ru/Клеймо_еретика"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/6/63/Умение_Клеймо_еретика.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Знамя света Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Клеймо еретика</span>
                                                    (крестоносец) увеличивает урон на 25%. А если у вас взят
                                                    <Elink
                                                        href="https://royalquest.info/ru/Талант_—_Освящённое_оружие"
                                                        class="text-amber-400 hover:text-amber-300 no-underline hover:underline transition-colors font-medium"
                                                    >
                                                        талант
                                                    </Elink>
                                                    то увеличение становится 35%
                                                </p>
                                            </li>
                                            <li class="flex gap-4 items-center group bg-gray-800/60 hover:bg-gray-700/60 transition-all duration-200 p-3 rounded-xl border border-gray-700/40 hover:border-amber-500/30">
                                                <a href="https://royalquest.info/ru/Провокация"
                                                   target="_blank"
                                                   class="flex-shrink-0 transition-transform group-hover:scale-105"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/8/85/Умение_Провокация.png"
                                                        class="w-12 h-12 rounded-lg shadow-md"
                                                        alt="Знамя света Royal Quest">
                                                </a>
                                                <p class="flex-1">
                                                    <span class="font-bold text-amber-300">Провокация</span> с талантом
                                                    <Elink
                                                        href="https://royalquest.info/ru/Талант_—_Яростный_боец"
                                                        class="text-amber-400 hover:text-amber-300 no-underline hover:underline transition-colors font-medium"
                                                    >
                                                        Яростный боец
                                                    </Elink>
                                                    увеличивает урон на 10% (или на 15% если вы крестоносец)
                                                </p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div
                                        class="bg-gradient-to-r from-amber-900/20 to-transparent p-5 rounded-xl border-l-4 border-amber-500">
                                        <p class="text-lg font-medium">
                                            Задача баферов по очереди давать скилы, так чтобы эффекты не спадали.
                                            Таким образом увеличивая урон своей группы, что позволяет ДД-шникам забрать
                                            сундуки, нанося по боссу наибольшее количество урона.
                                        </p>
                                    </div>

                                    <div class="space-y-4 bg-gray-800/30 p-6 rounded-2xl">
                                        <p class="text-xl font-semibold text-amber-300 flex items-center gap-2">
                                            <span class="text-2xl">🛡️</span> Также есть навыки, которые не бафают урон
                                            напрямую, но помогают в сражениях:
                                        </p>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 pl-2">
                                            <div
                                                class="flex items-center gap-2 bg-gray-800/50 p-3 rounded-lg hover:bg-gray-700/50 transition-colors">
                                                <span class="text-amber-400 text-xl">•</span>
                                                <elink
                                                    href="https://royalquest.info/index.php/Надёжная_защита"
                                                    class="text-amber-400 hover:text-amber-300 underline underline-offset-2 transition-colors"
                                                >
                                                    Надёжка
                                                </elink>
                                                <span class="text-gray-300 text-sm">— помогает избежать контроля</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-2 bg-gray-800/50 p-3 rounded-lg hover:bg-gray-700/50 transition-colors">
                                                <span class="text-amber-400 text-xl">•</span>
                                                <Elink
                                                    href="https://royalquest.info/index.php/Свет_Ауры"
                                                    class="text-amber-400 hover:text-amber-300 underline underline-offset-2 transition-colors"
                                                >
                                                    Ручка
                                                </Elink>
                                                <span
                                                    class="text-gray-300 text-sm">— помогает снизить получаемый урон.</span>
                                            </div>
                                            <div
                                                class="flex items-center gap-2 bg-gray-800/50 p-3 rounded-lg hover:bg-gray-700/50 transition-colors">
                                                <span class="text-amber-400 text-xl">•</span>
                                                <Elink
                                                    href="https://royalquest.info/index.php/Талант_—_Жертва"
                                                    class="text-amber-400 hover:text-amber-300 underline underline-offset-2 transition-colors"
                                                >
                                                    Жертва
                                                </Elink>
                                                <span
                                                    class="text-gray-300 text-sm">— также снижает получаемый урон.</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="mt-6 flex items-center gap-3 bg-gray-800/40 p-4 rounded-xl border border-dashed border-amber-500/30">
                                        <span class="text-3xl">✨</span>
                                        <p class="text-lg">
                                            Помимо этого есть
                                            <elink href="https://royalquest.info/ru/Превосходный_зеркальный_шар"
                                                   class="text-amber-400 hover:text-amber-300 underline underline-offset-2 font-medium transition-colors">
                                                Диско шар
                                            </elink>
                                            , который ускоряет атаку вашим ДД
                                        </p>
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
