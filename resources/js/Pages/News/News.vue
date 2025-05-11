<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import 'vue-toastification/dist/index.css';


</script>

<template>
    <Head title="News"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Новости
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        1. Создать дизайн поста<br>
                        2. Создать пост<br>
                        3. Создать БД и генерировать посты через foreach<br>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
