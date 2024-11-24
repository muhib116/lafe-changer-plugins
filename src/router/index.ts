import { createRouter, createWebHashHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import AboutView from "../views/AboutView.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView, // Ensure this file exists
  },
  {
    path: "/about",
    name: "about",
    component: AboutView, // Ensure this file exists
  },
];

const router = createRouter({
  history: createWebHashHistory(), // Use hash-based navigation
  routes,
});

export default router;
