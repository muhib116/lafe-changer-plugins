<template>
    <nav  class="flex gap-4 font-bold text-xl">
      <router-link to="/">
        <PhHeart :size="32" color="hotpink" weight="fill" />
        Home</router-link>
      <router-link to="/about">About</router-link>
    </nav>
</template>

<script setup>
  import { PhHorse, PhHeart, PhCube } from "@phosphor-icons/vue";

</script>