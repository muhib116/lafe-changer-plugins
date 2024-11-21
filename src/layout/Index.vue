<template>
    <div class="bg-red-200">
        <Navigation />
        <slot></slot>
    </div>
</template>

<script setup>
    import Navigation from '@/components/navigation/Index.vue'
</script>