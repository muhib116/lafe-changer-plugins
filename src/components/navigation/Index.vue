<template>
    <Container class="bg-white border-gray-200 border-b sticky">
        <nav
            class="w-full flex justify-between"
        >
            <div class="flex -mb-[2px]">
            <a href="#" class="flex items-center">
                <img
                class="w-auto h-10"
                src="https://freepnglogo.com/images/all_img/1700403290chatgpt-png.png"
                alt=""
                />
            </a>
            <ul class="flex sm:ml-6 sm:flex sm:space-x-5 [&>li]:mb-0 [&>li]:flex">
                <li v-for="(item, index) in menus" :key="index">
                <RouterLink
                    :to="item.path"
                    class="text-base border-b-2 border-orange-500/0 hover:border-orange-500/100 text-gray-500 hover:text-gray-700 inline-flex items-center"
                >
                    {{ item.title }}
                </RouterLink>
                </li>
            </ul>
            </div>

            <div class="flex">
            <ul class="flex items-center">
                <li>
                <button
                    class="bg-[#f0fdf4] border border-green-200 px-3 py-1 text-green-600 hover:text-green-600 rounded cursor-pointer font-normal mr-4"
                >
                    Valid License
                </button>
                </li>
                <li>
                <div class="border-r border-gray-200 py-2.5 mr-3"></div>
                </li>
                <li>
                <button
                    class="bg-[#fef8f5] border border-red-200 px-3 py-1 text-red-600 hover:text-red-600 rounded cursor-pointer font-normal mr-4"
                >
                    Pro
                </button>
                </li>
            </ul>

            <div class="border-r border-gray-200 py-2.5 mr-3"></div>

            <ul class="flex gap-3">
                <li>
                <a
                    href="#"
                    class="text-gray-400 hover:text-gray-500 py-4 inline-flex"
                >
                    <Icon name="PhGearSix" size="28" />
                </a>
                </li>
                <li>
                <a
                    href="#"
                    class="text-gray-400 hover:text-gray-500 py-4 inline-flex"
                >
                    <Icon name="PhPlayCircle" size="28" />
                </a>
                </li>
                <li>
                <a
                    href="#"
                    class="text-gray-400 hover:text-gray-500 py-4 inline-flex"
                >
                    <Icon name="PhQuestion" size="28" />
                </a>
                </li>
            </ul>
            </div>
        </nav>
    </Container>
</template>

<script setup>
import { PhHorse, PhHeart, PhCube } from "@phosphor-icons/vue";
import Icon from "@/components/Icon.vue";
import Container from '@/layout/Container.vue'

const menus = [
  {
    title: "Dashboard",
    path: "/",
    icon: "",
    type: "link",
  },
  {
    title: "Orders",
    path: "/orders",
    icon: "",
    type: "link",
  },
  {
    title: "Customer Followup",
    path: "/customer-followup",
    icon: "",
    type: "link",
  },
  {
    title: "Courier Manage",
    path: "/courier-manage",
    icon: "/",
    type: "link",
  },
  {
    title: "SMS Manage",
    path: "./",
    icon: "",
    type: "link",
  },
  {
    title: "IP Blocker",
    path: "./",
    icon: "",
    type: "link",
  },
  {
    title: "",
    path: "",
    icon: "",
    type: "link",
  },
];
</script>
