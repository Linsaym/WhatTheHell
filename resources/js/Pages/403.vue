<script setup>
import {Head} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

// Функция для возврата назад
const goBack = () => {
    window.history.back();
};
</script>

<template>
    <Head title="Нет доступа"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-200">
                Нет доступа
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg border border-gray-700">
                    <div class="p-12 text-center">
                        <!-- Забавная иконка -->
                        <div class="text-8xl mb-4">😅</div>

                        <!-- Заголовок -->
                        <h3 class="text-2xl font-semibold text-gray-200 mb-2">
                            Ой, а сюда нельзя!
                        </h3>

                        <!-- Подзаголовок -->
                        <p class="text-gray-400 text-lg mb-2">
                            Похоже, у вас нет прав на эту страницу.
                        </p>

                        <!-- Шутка -->
                        <p class="text-gray-500 text-base mb-6">
                            Но если очень хочется — попробуйте
                            <Link :href="route('donate')"
                                  class="text-orange-400 hover:text-orange-300 transition-colors font-medium">
                                задонатить
                            </Link>
                            , может, откроется... или нет 🤷‍♂️
                        </p>

                        <!-- Разделитель с эмодзи -->
                        <div class="flex items-center justify-center gap-4 mb-6">
                            <div class="h-px w-12 bg-gray-600"></div>
                            <span
                                class="text-sm text-gray-500">✨ Ваше счастье в неведении ✨</span>
                            <div class="h-px w-12 bg-gray-600"></div>
                        </div>
                        <!-- Кнопка назад -->
                        <button @click="goBack"
                                class="inline-flex items-center gap-2 px-6 py-2.5 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition-colors text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Вернуться назад
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* Плавные переходы */
a {
    transition: all 0.2s ease;
}

/* Иконка с лёгкой анимацией */
.text-8xl {
    animation: gentleSway 3s ease-in-out infinite;
    display: inline-block;
}

@keyframes gentleSway {
    0%, 100% {
        transform: rotate(-3deg) scale(1);
    }
    50% {
        transform: rotate(3deg) scale(1.05);
    }
}
</style>
