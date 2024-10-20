<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
</script>

<template>
    <Head title="Guides"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Guides
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <Accordion type="multiple" :default-value="['item-1','item-2','item-3']">
                            <AccordionItem value="item-1">
                                <AccordionTrigger>PVE гайды по боссам</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Школа баферства
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
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
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Гайд на ханта
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Гайд на ТРа
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Гайд на волша
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Гайд на креста
                                            </NavLink>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-3">
                                <AccordionTrigger>Гайды по игре</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Основы прокачки 1-40
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('403')">
                                                Важнейшие квесты
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
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

