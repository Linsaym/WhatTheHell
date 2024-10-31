<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Снайпер"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на снайпера (beta)
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>Снайпер имба... Напишите гайд :3</div>
                        <div>
                            <p>Порядок билдов</p>
                            <ul>
                                <li>PVE Pistol build ( One target ) </li>
                                <li>Mortar build </li>
                                <li>Gun solo target build ( With skills ) </li>
                                <li>Gun solo target ( With autoattacks ) </li>
                            </ul>
                            <p>
                                Потом распишу подробнее
                            </p>
                            <p>
                                Для прокачки рекомендую билд через огнемёт
                            </p>
                        </div>
                        <div class="flex gap-6 flex-wrap">
                            <img src="/assets/images/skills/sniper/b1.png" alt="Билд на снайпера" />
                            <img src="/assets/images/skills/sniper/b2.png" alt="Билд на снайпера" />
                            <img src="/assets/images/skills/sniper/b3.png" alt="Билд на снайпера" />
                            <img src="/assets/images/skills/sniper/b4.png" alt="Билд на снайпера" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

