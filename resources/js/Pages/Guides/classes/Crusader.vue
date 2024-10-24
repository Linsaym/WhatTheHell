<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
</script>

<template>
    <Head title="Guides"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на креста
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <Accordion :default-value="['item-1']">
                            <AccordionItem value="item-1">
                                <AccordionTrigger>Вступление</AccordionTrigger>
                                <AccordionContent>
                                    <p></p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-2">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будет информация о талантах и билдах.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-3">
                                <AccordionTrigger>Самые важные скилы</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будет информация о самых важных скилах.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-4">
                                <AccordionTrigger>Как фармить</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будет информация о том, как фармить.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-5">
                                <AccordionTrigger>Основная в данжах</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будет информация о том, как играть в данжах.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-6">
                                <AccordionTrigger>Лучшие вещи</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будет информация о лучших вещах.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-7">
                                <AccordionTrigger>Сборки (ссылки на калькулятор)</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будут ссылки на калькулятор сборок.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-8">
                                <AccordionTrigger>Советы по прокачке</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будут советы по прокачке.</p>
                                </AccordionContent>
                            </AccordionItem>

                            <AccordionItem value="item-9">
                                <AccordionTrigger>Печати</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будет информация о печатях.</p>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

