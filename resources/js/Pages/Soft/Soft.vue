<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import ExternalLink from "@/Components/ExternalLink.vue";
</script>

<template>
    <Head title="Полезные программы"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Полезные программы для Royal Quest
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <Accordion type="multiple" :default-value="['item-1']">
                            <AccordionItem value="item-1">
                                <AccordionTrigger>Программы для игроков</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('soft.gear-calculator')">
                                                Онлайн калькулятор шмота
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('soft.market-analyzer')">
                                                Анализатор рынка
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('soft.boss-timer')">
                                                Персональный таймер боссов
                                            </NavLink>
                                        </li>
                                        <li>
                                            <NavLink style="font-size: 18px" :href="route('soft.royal-wiki-overlay')">
                                                RoyalWikiOverlay
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

