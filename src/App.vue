<script setup lang="ts">
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <header class="text-3xl font-bold">Hi</header>
  <RouterLink to="/home" class="py-2 px-5 ml-5">Home</RouterLink>
  <RouterLink to="/about" class="py-2 px-5 ml-5">about</RouterLink>
  <RouterView />
</template>
