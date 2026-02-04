<script setup>
import {computed, useSlots} from 'vue';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    class: {
        type: [String, Array, Object],
        default: '',
    },
});

const slots = useSlots();
const classes = computed(() => [
    'text-blue-600 dark:text-blue-400 underline hover:text-blue-700 dark:hover:text-blue-300 transition-colors font-medium',
    props.class,
]);

// Функция для очистки пробелов из slot content
const cleanSlotContent = () => {
    const defaultSlot = slots.default?.();
    if (!defaultSlot) return '';

    return defaultSlot
        .map(vnode => {
            if (typeof vnode.children === 'string') {
                return vnode.children.replace(/\s+/g, ' ').trim();
            }
            return vnode;
        })
        .join('');
};
</script>

<template>
    <a :href="href" target="_blank" rel="noopener noreferrer"
       :class="classes"
    >
        {{ cleanSlotContent() }}<!----></a>
</template>
