<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';

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
                        <h1 class="text-2xl sm:text-4xl font-bold text-center text-white sm:mb-6">
                            О авторе сайта
                        </h1>
                        <div class="mb-8">
                            <p class="text-xl text-center">
                                Привет! Я Лев, создатель этого сайта, гайдов и многих программ для RQ
                                . Я вложил много труда в это всё. Если вам нравится сайт и вы
                                хотите поддержать его развитие, вы можете
                                сделать денежное пожертвование
                                <a class="underline text-blue-500" href="https://t.me/Linsaym397">криптой в ТГ</a>
                                .<br>Переводом на карту, или можете просто написать письмо в игре на
                                ник
                                <strong>МурчуКотятам</strong>
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
                        <div class="flex text-xl flex-col justify-center items-center mt-16">
                            Важно! Донаты не дают вам никакие права. Это чисто благотворительное пожертвование
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
