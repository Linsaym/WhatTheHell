<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
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
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Вступление</h3>
                            <div class="text-xl">
                                <p>
                                    Добро пожаловать в гайд о сильнейшем бафере в игре - <a
                                    class="text-orange-500 font-bold"
                                    href="https://royalquest.info/index.php/Крестоносец"
                                    target="_blank">Крестоносце</a>
                                </p>
                                <div class="flex gap-2 my-3">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Живучий
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Полезные ауры
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Незаменимые бафы
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Сильный в PVP
                                    </badge>
                                </div>
                                <div class="flex gap-2 mb-6">
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Слабый в соло фарме
                                    </badge>
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Долго убивает парики
                                    </badge>
                                </div>
                                <div class="text-base">
                                    <p>Крестоносец - пожалуй сильнейший бафер в игре. За счёт его скила <a
                                        class="text-blue-500"
                                        target="_blank"
                                        href="https://royalquest.info/index.php/Клеймо_еретика">"Клеймо
                                        еретика"</a>, увеличивает весь входящий урон от челенов группы
                                        на 25%, он является незаменимым классом в походах на боссов.
                                        <br><br>
                                        Однако, крестоносец не только бафер. Он также имеет хороший урон по
                                        одной цели в ДД билде, и может танчить боссов.
                                        В итоге крестоносец, может быть как танком, так и сапортом или бафером.

                                        В этом гайде мы рассмотрим как построить эффективного крестоносца, какие
                                        таланты выбрать, какую экипировку использовать, и какие стратегии
                                        использовать в боях.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <Accordion type="multiply" default-value="item-1">
                            <AccordionItem class="text-2xl" value="item-1">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>
                                    <p>
                                        Времени нет расписывать, поэтому коротко. На Креста есть 3 основных билда:<br>
                                        PVE бафер + хиллер<br>
                                        PVP бафер + ДД (в пве тоже имба)<br>
                                        PVP бафер (его мы не будем расматривать)<br>
                                    </p>
                                    <div class="flex gap-6">
                                        <img src="/assets/images/skills/cuesader/b1.png"
                                             alt="Билд на PVE креста Royal Quest">
                                        <img src="/assets/images/skills/cuesader/b2.png"
                                             alt="Билд на PVP креста Royal Quest">
                                    </div>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem class="text-2xl" value="item-7">
                                <AccordionTrigger>Сборки (ссылки на калькулятор)</AccordionTrigger>
                                <AccordionContent>
                                    <p>Здесь будут ссылки на калькулятор сборок.</p>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

