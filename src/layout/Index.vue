<template>
    <div class="bg-gray-200 min-h-screen">
        <Navigation />
        <slot></slot>
    </div>
</template>

<script setup>
    import Navigation from '@/components/navigation/Index.vue'
</script>