<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Как выгоднее всего точиться"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Как выгоднее всего точиться
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Гайд по заточке предметов</h2>
                            <p class="mt-4">
                                Когда-то я делал табличку по заточке предметов. Можно посчитать шансы и выбрать нужные
                                камни. Сейчас у меня нет этой таблички :(
                            </p>
                            <p class="mt-2">Из общих советов могу добавить, что часто намного выгоднее купить чёрный
                                камень, когда у нас 50%, белый когда 25%, красный 18%. Считайте шансы, закупайте нужные
                                камни, в какое-то время дешевле точиться чёрными, в какое-то кубиками. В расчётах не
                                забывайте. Точите все предметы до +7. Ведь там появляется бафф к хп. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
