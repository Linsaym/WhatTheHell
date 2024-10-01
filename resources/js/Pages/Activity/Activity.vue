<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Button} from '@/Components/ui/button'

import {useToast} from 'vue-toastification';
import 'vue-toastification/dist/index.css';

const toast = useToast();

const showToast = () => {
    toast.success('Уведомление успешно!', {
        position: 'top-right',
        timeout: 5000,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        draggablePercent: 0.6,
        progress: undefined,
    });
};

</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Активности
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                            На нашем сайте вы найдёте
                        </h3>
                        <div class="mt-6">
                            <Button @click="showToast">Click</Button>
                        </div>
                        <div class="mt-6">
                            За участие в гильдийных событиях вы получаете балы за которые сможете потом купить много
                            плюшек!)
                            (балы снимаются за нарушение правил)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
