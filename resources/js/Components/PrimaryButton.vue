<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-slate-900 to-zinc-400  rounded-md font-semibold text-sm text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-slate-600 focus:ring-offset-2"
    >
        <slot />
    </button>
</template>
