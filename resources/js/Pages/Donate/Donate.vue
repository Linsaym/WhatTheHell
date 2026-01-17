<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";

</script>

<template>
    <Head title="Donate"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Поддержать проект
            </h2>
        </template>

        <div class="py-6 sm:py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 px-4">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                    <div class="p-4 sm:p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-2xl sm:text-4xl font-bold text-center text-white mb-8 sm:mb-16">
                            О авторе сайта
                        </h1>
                        <div class="mb-8">
                            <p class="text-xl">
                                Привет! Я Лев, создатель этого сайта и всех программ во вкладке
                                <NavLink href="{{ route('soft') }}" class="text-xl">Soft</NavLink>
                                . Я вложил много труда в разработку и написание гайдов. Если вам нравится сайт и вы
                                хотите поддержать его развитие, вы можете
                                сделать пожертвование.
                            </p>
                        </div>

                        <div class="flex flex-col md:flex-row justify-around items-center mb-8">
                            <div class="flex flex-col justify-center space-y-8 md:space-y-12 mb-8 md:mb-0 md:mr-8">
                                <div class="text-center">
                                    <h3 class="text-xl font-semibold mb-4">Сканируйте QR код для пожертвования</h3>
                                    <img src="/assets/images/VTB_QR.jpg" alt="QR код для пожертвования"
                                         class="w-48 h-48 mx-auto border rounded">
                                </div>

                                <div class="text-center">
                                    <h3 class="text-xl font-semibold mb-4">Или можете переводить по номеру телефона</h3>
                                    <div class="mx-auto text-xl font-bold">ВТБ 89509782755</div>
                                </div>
                            </div>


                            <div class="text-center">
                                <img src="/assets/images/it-guy.png" alt="Описание фотографии"
                                     class="w-full max-w-md md:max-w-lg rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.field-container {
    width: 100%;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 0 8px;
    display: flex;
    align-items: center;
}
</style>
