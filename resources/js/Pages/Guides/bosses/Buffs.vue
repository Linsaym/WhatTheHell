<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Школа баферства"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-bold leading-tight text-gray-800 dark:text-gray-200"
            >
                Школа баферства
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-3xl font-bold mb-6">Гайд по баферству на боссах</h3>
                            <div class="space-y-4">
                                <div class="text-lg space-y-4">
                                    <p class="text-xl">
                                        Здесь мы научим вас азам баферского ремесла: зачем оно нужно и как помогает.
                                        Дроп с боссов и элиток получают только четыре игрока с наибольшим уроном.
                                        Исключение составляют ПВП боссы и Зибо, но это не сюда. Даже самый сильный ДД не
                                        справится в одиночку!
                                        <br><br>
                                        У крестоносца, тёмного рыцаря и лучника есть различные умения и таланты,
                                        усиливающие урон.
                                        Сейчас обсудим их более детально, а о талантах вы можете узнать в гайдах своего
                                        класса.
                                    </p>
                                    <div>
                                        Список баферских скилов:
                                        <ul>
                                            <li class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Мишень"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/0/0c/Умение_Мишень.png"
                                                        style="width: 48px"
                                                        alt="Мишень">
                                                </a>
                                                <p class="w-2/3">
                                                    - Мишень (охотник, снайпер). Увеличивает урон дальников которые
                                                    находятся в группе
                                                </p>
                                            </li>
                                            <li class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Поход"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/2/27/Умение_Поход.png"
                                                        style="width: 48px"
                                                        alt="Поход">
                                                </a>
                                                <p class="w-2/3">
                                                    - Поход (охотник, снайпер). Увеличивает скорость атаки всех челенов
                                                    группы
                                                </p>
                                            </li>
                                            <li class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Воодушевление"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/3/3d/Умение_Воодушевление.png"
                                                        style="width: 48px"
                                                        alt="Воодушевление">
                                                </a>
                                                <p>
                                                    - Воодушевление. Накладывает эффект "Мощь (х3)" (Увеличивает атаку
                                                    на 6%). Может стакаться до 10 эффектов
                                                </p>
                                            </li>
                                            <li class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Штандарт_тьмы"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/5/51/Умение_Штандарт_тьмы.png"
                                                        style="width: 48px"
                                                        alt="Воодушевление">
                                                </a>
                                                <p>
                                                    - Штандарт Тьмы (Тёмный рыцарь). Союзники наносят повышенный на 8%
                                                    урон.
                                                </p>
                                            </li>
                                            <li class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Знамя_света"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/b/b2/Умение_Знамя_света.png"
                                                        style="width: 48px"
                                                        alt="Воодушевление">
                                                </a>
                                                <p>
                                                    - Знамя света (крестоносец). С талантом
                                                    <a class="text-blue-500"
                                                       href="https://royalquest.info/index.php/Талант_—_Воин_света"
                                                       target="_blank">
                                                        Воин света
                                                    </a> увеличивает атаку союзников на 7%
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Задача баферов по очереди давать скилы, так чтобы эффекты не спадали.
                                        Таким образом увеличивая урон своей группы, что позволяет ДД-шникам забрать
                                        сундуки, нанося по боссу наибольшее количество урона.
                                    </p>
                                    <div class="space-y-2 text-xl">
                                        Также есть навыки, которые не бафают урон напрямую, но помогают в сражениях:
                                        <br>
                                        <a href="https://royalquest.info/index.php/Надёжная_защита" target="_blank"
                                           class="text-blue-600 underline">
                                            Надёжная защита
                                        </a> — помогает избежать контроля.
                                        <br>
                                        <a href="https://royalquest.info/index.php/Свет_Ауры" target="_blank"
                                           class="text-blue-600 underline">
                                            Свет Ауры
                                        </a> — помогает снизить получаемый урон.
                                        <br>
                                        <a href="https://royalquest.info/index.php/Талант_—_Жертва" target="_blank"
                                           class="text-blue-600 underline">
                                            Жертва
                                        </a> — также снижает получаемый урон.
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

