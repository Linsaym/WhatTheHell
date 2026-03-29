<template>
    <div
        class="flex flex-col sm:flex-row gap-4 items-start p-4 rounded-xl bg-gradient-to-r from-gray-50 to-transparent dark:from-gray-700/30 hover:shadow-md transition-all duration-300 group"
    >
        <a
            :href="link"
            target="_blank"
            class="flex-shrink-0 transition-transform group-hover:scale-110 duration-300"
        >
            <img
                :src="icon"
                :alt="name"
                class="rounded-lg shadow-md"
                style="width: 56px"
            >
        </a>
        <div class="flex-1 leading-relaxed">
            <span class="font-bold" :class="nameColorClass">
                {{ formattedName }}
            </span>
            <slot/>
        </div>
    </div>
</template>

<script setup>
import {computed} from 'vue';

const props = defineProps({
    // Название таланта
    name: {
        type: String,
        required: true
    },
    // Иконка таланта (URL)
    icon: {
        type: String,
        required: true
    },
    // Ссылка на описание таланта
    link: {
        type: String,
        required: true
    },
    // Цвет имени таланта (orange, green, blue, red, purple)
    nameColor: {
        type: String,
        default: 'orange',
        validator: (value) => ['orange', 'green', 'blue', 'red', 'purple'].includes(value)
    }
});

const nameColorClass = computed(() => {
    const colors = {
        orange: 'text-orange-500',
        green: 'text-green-500',
        blue: 'text-blue-500',
        red: 'text-red-500',
        purple: 'text-purple-500'
    };
    return colors[props.nameColor] || colors.orange;
});

const formattedName = computed(() => {
    return `- Талант "${props.name}"`;
});
</script>
