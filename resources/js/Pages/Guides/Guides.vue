<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from '@/Components/ui/accordion';
import {
    Card,
    CardContent,
    CardHeader,
    CardTitle,
} from '@/Components/ui/card';
import {Time} from '@icon-park/vue-next';
</script>

<template>
    <Head title="Guides"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-4xl font-bold text-center text-gray-800 mb-16">
                            Добро пожаловать в Гильдию <span class="text-blue-500">Cat's guild</span>
                        </h1>


                        <h3 class="text-2xl text-center font-semibold leading-tight text-gray-800 dark:text-gray-200">
                            На нашем сайте вы найдёте
                        </h3>
                        <ul class="flex space-x-4 justify-around mt-6">
                            <li>
                                <Card class="w-72 h-56 text-center">
                                    <CardHeader>
                                        <CardTitle>Таймер боссов</CardTitle>
                                    </CardHeader>
                                    <CardContent>
                                        123
                                    </CardContent>
                                </Card>
                            </li>
                            <li>
                                <Card class="w-72 text-center">
                                    123
                                </Card>
                            </li>
                            <li>
                                <Card class="w-72 text-center">
                                    123
                                </Card>
                            </li>
                        </ul>

                        <Accordion class="mt-12" type="single" collapsible>
                            <AccordionItem value="item-1">
                                <AccordionTrigger>Цели гильдии</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>Надо что Аня была довольна</li>
                                        <li>Надо чтобы Аня не ругала меня</li>
                                        <!--Система баллов активности, за которые можно покупать игровые ценности-->
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-2">
                                <AccordionTrigger>Правила PVP</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>Никакого нахуй PVP</li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem value="item-3">
                                <AccordionTrigger>Правила PVE</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>Можно выбивать карты боссов</li>
                                        <li>Можно придумывать правила</li>
                                        <li>Нельзя обижать разработчиков</li>
                                        <!--Система баллов активности, за которые можно покупать игровые ценности-->
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
