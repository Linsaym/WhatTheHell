<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import ExternalLink from "@/Components/ExternalLink.vue";
</script>

<template>
    <Head title="Guides"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайды по игре Royal Quest
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <Accordion type="multiple" :default-value="['item-1','item-2','item-3','item-4','item-5']">
                            <AccordionItem value="item-1">
                                <AccordionTrigger>PVE гайды по боссам</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.buffs')">
                                                Школа баферства
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.bosses')">
                                                Механики и скилы боссов
                                            </NavLink>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-2">
                                <AccordionTrigger>Гайды по классам</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.best-class')">
                                                Какой класс выбрать?
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.hunter')">
                                                Гайд на Охотника
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.wizard')">
                                                Гайд на Снайпера
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.dark-knight')">
                                                Гайд на Тёмного рыцаря
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.crusader')">
                                                Гайд на Крестоносца
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.wizard')">
                                                Гайд на Волшебника
                                            </NavLink>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-3">
                                <AccordionTrigger>Гайды на ДД классы</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                В чём проблема ДД классов?
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.crusader')">
                                                Гайд на Чернокнижника
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.hunter')">
                                                Гайд на Разбойника
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.dark-knight')">
                                                Гайд на Ассасина
                                            </NavLink>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-4">
                                <AccordionTrigger>Гайды по игре</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Основы прокачки 1-40
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('guides.quests')">
                                                Полезные квесты
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Ресурсы, торговля, предметы для ежедневок
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                60-65
                                            </NavLink>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-5">
                                <AccordionTrigger>PVP гайды</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Фарм знаков крови
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Основы PVP на аренах
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Тактика PVP на боссах
                                            </NavLink>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

