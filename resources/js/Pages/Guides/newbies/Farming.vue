<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Elink from "@/Components/Elink.vue";
</script>

<template>
    <Head title="Способы фарма"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Способы фарма
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Эффективные способы фарма</h2>
                            <p class="my-4">
                                На самом деле с каждым годом, всё меньше способов фармить, цены всё падают :(<br>
                                А исправляется это всё супер просто. Нужно ввести шмот, крафт которого требует ресурсы с
                                низкоуровневых локаций.<br>
                                Тогда бы цены на ресурсы выросли и был бы смысл качаться самому, а не покупая кач. Но
                                разработчики этого не
                                делают💔
                            </p>
                            <div
                                class="bg-white/10 backdrop-blur-md rounded-2xl shadow-xl border border-white/20 p-6 text-gray-200">
                                <p class="text-lg">
                                    Мы будем учитывать соотношение кол-во голды в час. Топ по способам фарма можно
                                    раскидать
                                    примерно так:
                                </p>
                                <ul class="space-y-2 mt-4">
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-yellow-400/20 text-yellow-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">1</span>
                                        <span class="font-semibold text-yellow-400">Перепродажи</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-gray-400/20 text-gray-300 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">2</span>
                                        <span><span class="font-semibold text-gray-300">Мировые боссы</span></span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-amber-700/20 text-amber-600 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">3</span>
                                        <span><span class="font-semibold text-amber-600">Кач на гуле</span> (примерно до 15кк в час)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-blue-400/20 text-blue-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">4</span>
                                        <span><span class="font-semibold text-blue-400">Ферма персонажей</span> (примерно до 8кк в час)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-green-400/20 text-green-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">5</span>
                                        <span><span class="font-semibold text-green-400">Фарм локации</span> (с фарм шмотом в среднем 2-8кк в час)</span>
                                    </li>
                                </ul>
                                <div
                                    class="mt-6 p-4 bg-black/20 rounded-lg border-l-4 border-blue-500 text-sm leading-relaxed">
                                    <p>
                                        Когда я говорил про фарм локации, я поставил такой большой разброс, потому что
                                        есть
                                        <elink
                                            class="text-blue-400 hover:text-blue-300 underline underline-offset-2 transition"
                                            href="https://royalquest.info/ru/Поиск_карт?title=Поиск_карт&pfRunQueryFormName=Карты&Карты%5BТип%5D=&Карты%5BБонус%5D=Выпадение+предметов&Карты%5BСтаринные%5D%5Bis_list%5D=1&wpRunQuery=&pf_free_text=">
                                            фармовые карты
                                        </elink>
                                        , которые значительно увеличивают прибыль. У фермы стоит 8кк в час, потому что
                                        если
                                        бегать круги(48) то в в среднем будет 1кк за день, с одного перса, а если
                                        сделать общий склад и туда ресурсы для ежедневок, бегая
                                        и
                                        сдавая северные дейлики вы выносите 1.2кк за 12 минут с персонажа.
                                        Есть ещё и другие способы фарма
                                        <elink
                                            class="text-blue-400 hover:text-blue-300 underline underline-offset-2 transition"
                                            href="https://royalquest.net/index.php?topic=75.0">
                                            можете почитать тут
                                        </elink>
                                        или
                                        <elink href="https://steamcommunity.com/sharedfiles/filedetails/?id=3392795476">
                                            тут
                                        </elink>
                                        .
                                    </p>
                                </div>
                            </div>
                            <div class="mt-4">
                                Про мировых боссов и данжи есть годные таблички от
                                <elink href="https://www.youtube.com/@nisdoka2328/videos">Remi</elink>
                                . Но при просмотре видео учитывайте, что цены на руны холода падают. Кач на гуле раньше
                                тоже приносил больше, но важно учитывать конкуренцию, время на поиск, уровни которые вы
                                качаете, вот и получается 15кк в час
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
