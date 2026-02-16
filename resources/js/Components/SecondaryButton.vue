<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center rounded-md border border-gray-500 bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-300 shadow-sm transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-800 disabled:opacity-25"
    >
        <slot />
    </button>
</template>
