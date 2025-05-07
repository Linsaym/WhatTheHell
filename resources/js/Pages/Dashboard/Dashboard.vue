<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Link} from '@inertiajs/vue3';
import {
    Card,
    CardContent,
    CardHeader,
    CardTitle,
} from '@/Components/ui/card';

</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Главная
            </h2>
        </template>

        <div class="py-6 sm:py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 px-4">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                    <div class="p-4 sm:p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-2xl sm:text-4xl font-bold text-center text-white mb-8 sm:mb-16">
                            Добро пожаловать в таймер <span class="text-orange-500">Crypto</span>
                        </h1>
                        <section>
                            <h3 class="text-xl sm:text-2xl text-center font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                На нашем сайте вы найдёте
                            </h3>
                            <ul class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0 justify-around mt-6 items-center">
                                <li>
                                    <Link :href="route('timer')">
                                        <Card class="w-64 sm:w-80 bg-gray-600 text-center text-white">
                                            <CardHeader>
                                                <CardTitle>Таймер боссов</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img alt="timer" class="card__icon" src="/assets/images/ui/timer.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
.widgetBody-38iyIo > div:first-child {
    display: none;
}

.card__icon {
    width: 120px;
    display: block;
    margin: 0 auto;
}

@media (min-width: 640px) {
    .card__icon {
        width: 170px;
    }
}
</style>
