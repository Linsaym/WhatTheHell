<script setup>
import {computed, useSlots} from 'vue';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    target: {
        type: String,
        default: '_blank',
    },
    class: {
        type: [String, Array, Object],
        default: '',
    },
});

const slots = useSlots();
const classes = computed(() => [
    'text-blue-400 underline hover:text-blue-300 transition-colors font-medium',
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
    <a :href="href" :target="target" rel="noopener noreferrer"
       :class="classes"
    >
        {{ cleanSlotContent() }}<!----></a>
</template>
