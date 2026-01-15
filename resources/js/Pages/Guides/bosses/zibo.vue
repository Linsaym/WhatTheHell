<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    <Head title="Зибо"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Зибо
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p class="mb-4">Описание босса: Зибо - мировой босс с мощными атаками.</p>
                        <h2 class="text-2xl font-semibold mb-4">Умения</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Умение 1: Описание умения 1</li>
                            <li>Умение 2: Описание умения 2</li>
                            <li>Умение 3: Описание умения 3</li>
                        </ul>
                        <NavLink style="font-size: 18px" :href="route('guides.bosses')" class="mt-4 inline-block">
                            Назад к списку боссов
                        </NavLink>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>