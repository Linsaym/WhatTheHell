<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Elink from "@/Components/Elink.vue";
</script>

<template>
    <Head title="Снайпер">
        <!--Без адаптива пока что-->
        <meta name="viewport" content="width=1200">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на Снайпера
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6">
                        <p>
                            <elink :href="route('do-it-pls')">
                                Ещё не готово :(
                            </elink>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

