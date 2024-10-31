<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Выбор класса"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Какой класс выбрать?
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            Берите тот который нравится!!!) Я на успел дописать этот раздел ))
                            <p class="mt-4">
                                Если коротко. То по факту правда лучше брать класс который ближе вам по духу.<br>
                                Все классы играбельны, но например на Ассасине будет очень тяжело качаться<br>
                                <br>
                                Если вы не донатите я бы не рекомендовал делать классы которые полезны только как ДД (Ассасин, разбойник, ЧК)<br>
                                Например тот же снайпер, или хант будут всегда полезны как баферы, и при этом ими можно играть как ДД<br>
                                <br>
                                Но если вам всё таки нравиться (Ассасин, разбойник, ЧК), берите их! Главное получать удовольствие от игры :)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

