<template>
    <div class="relative">
        <!-- Декоративные элементы -->
        <div class="absolute -top-4 -left-4 w-20 h-20 bg-orange-500/10 rounded-full blur-2xl"></div>
        <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-orange-500/5 rounded-full blur-2xl"></div>

        <!-- Основной блок с боковой подсветкой -->
        <div :class="[
            'relative',
            'bg-gray-50/50 dark:bg-gray-700/30',
            'rounded-xl',
            'border-l-4',
            borderColorClass,
            'p-6',
            className
        ]">
            <!-- Опциональный заголовок -->
            <h4 v-if="title" :class="titleClass" class="mb-3">
                {{ title }}
            </h4>

            <!-- Контент -->
            <div :class="contentClass">
                <slot/>
            </div>
        </div>
    </div>
</template>

<script setup>
import {computed} from 'vue';

const props = defineProps({
    // Цвет подсветки: orange, green, blue, red, purple
    color: {
        type: String,
        default: 'orange',
        validator: (value) => ['orange', 'green', 'blue', 'red', 'purple'].includes(value)
    },
    // Заголовок блока (опционально)
    title: {
        type: String,
        default: ''
    },
    // Дополнительные классы
    className: {
        type: String,
        default: ''
    },
    // Классы для заголовка
    titleClass: {
        type: String,
        default: 'text-lg font-semibold'
    },
    // Классы для контента
    contentClass: {
        type: String,
        default: ''
    }
});

const borderColorClass = computed(() => {
    const colors = {
        orange: 'border-orange-500',
        green: 'border-green-500',
        blue: 'border-blue-500',
        red: 'border-red-500',
        purple: 'border-purple-500'
    };
    return colors[props.color] || colors.orange;
});
</script>
