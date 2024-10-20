<script setup>
import {Head, Link} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="У вас не достаточно прав"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800 text-center py-12"
                >
                    <h1 class="text-3xl mb-2">К сожалению у вас недостаточно прав для просмотра этой страницы</h1>
                    <p class="text-2xl">Но вы можете запросить их в дискорде</p>
                    <a href="https://discord.gg/btxSC29B4R"
                       class="text-blue-500 text-xl">https://discord.gg/btxSC29B4R</a>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
