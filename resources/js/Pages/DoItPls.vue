<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="сделай это!"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Сделайте это пожалуйста :3
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800 text-center py-12"
                >
                    <div class="text-3xl mb-3">
                        Этот контент пока не реализован, но вы можете помочь в его создании 🛠️
                    </div>
                    <div class="text-3xl">Просто напишите мне в
                        <a class="text-blue-600" href="https://t.me/Linsaym397">Телеграм</a>
                        или
                        <a class="text-blue-600" href="https://vk.com/linsaym">Вконтакте</a> ✨
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
