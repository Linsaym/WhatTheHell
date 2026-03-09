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
    <Head title="У вас не достаточно прав"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Нет доступа
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800 text-center py-12"
                >
                    <div class="text-3xl mb-3">К сожалению у вас недостаточно прав для просмотра этой страницы</div>
                    <div class="text-3xl">Может если сделать
                        <a class="text-blue-600" :href="route('donate')">донат</a>
                        она откроеться?🤔
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
