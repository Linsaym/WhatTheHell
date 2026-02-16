<script setup>
import {onMounted, ref} from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({focus: () => input.value.focus()});
</script>

<template>
    <input
        class="pl-1.5 rounded-md border-gray-700 bg-gray-900 text-gray-300 shadow-sm focus:border-indigo-600 focus:ring-indigo-600"
        v-model="model"
        ref="input"
    />
</template>
