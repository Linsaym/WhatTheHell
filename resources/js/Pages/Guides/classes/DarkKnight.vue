<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Тёмный рыцарь">
        <!--Без адаптива пока что-->
        <meta name="viewport" content="width=1200">
    </Head>

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
                                <AccordionContent class="text-lg">
                                    <div class="mb-4">
                                        На ТРа, самым профитным для прокачки будет билд через копьё. Вот как он будет
                                        выглядеть. После 60 уровня билд можно поменять, если вы хотите ходить данжи, но
                                        я скину этот билд потом. Таланты тоже распишу позже
                                    </div>
                                    <div class="flex gap-6">
                                        <img src="/assets/images/skills/dark-knight/b1.png"
                                             alt="Билд на Тёмного рыцаря Royal Quest">
                                        <img src="/assets/images/skills/dark-knight/b2.png"
                                             alt="Билд на Тёмного рыцаря Royal Quest">
                                    </div>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

