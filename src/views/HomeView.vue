<template>
  <Layout>
    <Container>
      Dashboard
      <h1>Order Statistics</h1>
      <div v-if="error">
        <p>{{ error }}</p>
      </div>
      <ul v-else-if="stats">
        <li>Total Orders: {{ stats.total_orders }}</li>
        <li>Pending Orders: {{ stats.pending_orders }}</li>
        <li>Canceled Orders: {{ stats.canceled_orders }}</li>
        <li>Completed Orders: {{ stats.completed_orders }}</li>
      </ul>
      <div v-else>
        <p>Loading...</p>
      </div>
    </Container>
  </Layout>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import Layout from "@/layout/Index.vue";
import Container from "@/layout/Container.vue";

const stats = ref(null);
const error = ref(null);

const fetchOrderStats = async () => {
  try {
    const response = await axios.get(
      `${window.location.origin}/wp-json/orders/v1/summary/`,
      {
        withCredentials: true,
      }
    );
    console.log(response);
    stats.value = response.data.data;
  } catch (err) {
    error.value =
      err.response?.data?.message || "Failed to fetch order statistics.";
  }
};

onMounted(fetchOrderStats);
</script>
