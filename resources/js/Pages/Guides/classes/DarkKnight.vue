<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Тёмный рыцарь"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на Тёмного рыцаря
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Вступление</h3>
                            <div class="text-xl">
                                <p>
                                    Кто тут самый сломанный клас в игре? - <a
                                    class="text-orange-500 font-bold"
                                    href="https://royalquest.info/index.php/Тёмный_рыцарь"
                                    target="_blank">Тёмный рыцарь</a>
                                </p>
                                <div class="flex gap-2 my-3">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Танчит миллионы мобов
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Имеет огромный отхил
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Недорого одевается
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Имеет хороший массовый урон
                                    </badge>
                                </div>
                                <div class="flex gap-2 mb-6">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Имеет бесконечный антиконтроль
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Хороший урон по соло цели в PVP билде
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Незаменим на данжах
                                    </badge>
                                </div>
                                <div class="text-base">
                                    <p>ТР - пожалуй сильнейший класс в PVE на данный момент. Благодаря талантам он
                                        хилиться от нанесённого урона, что позволяет агрить бесконечно много мобов.
                                        Таким образом тёмный рыцарь - является сильнейшим классом для фарма, и при этом
                                        он незаменим на данжах и в PVP
                                        <br><br>
                                        Его геймплей относительно простой. Собираешь парик, даёшь "пронзание", бежишь
                                        дальше, снимаешь с себя дебафы. Но прокаст так же зависит и от билда. На Тёмного
                                        рыцаря есть несколько основных билдов, сегодня мы их и рассмотрим
                                    </p>
                                </div>
                            </div>
                        </div>
                        <Accordion type="multiply" :default-value="['intro']">
                            <AccordionItem class="text-2xl" value="intro">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>Вот да... Не успел</AccordionContent>
                            </AccordionItem>
                            <AccordionItem class="text-2xl" value="item-7">
                                <AccordionTrigger>Сборки (ссылки на калькулятор)</AccordionTrigger>
                                <AccordionContent>
                                    <p class="text-green-500 font-bold text-2xl">//TODO надо доделать)</p>
                                    <div>
                                        1.
                                        GAQuuCsAg4gMLuy22ApIcBa42Y2b2LQhs1cgv1SXx56BgqWBk4WCk4WCEe5dDw/r2okiHkT8AwAAAA==
                                        <br>
                                        2. (фулл сборки)<br>
                                        3. Сборки должны быть с ружьём, и луком<br>
                                        4. Вот видосик где чел разные билды тестит
                                        https://www.youtube.com/watch?v=-Bl3ydeSPoM<br>
                                    </div>
                                    <p>
                                        Бомже сборка<br>
                                        Актуальная сборка<br>
                                        Предметы которые стоит отметить
                                    </p>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

