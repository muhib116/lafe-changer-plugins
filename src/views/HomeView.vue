<template>
  <Layout>
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
  </Layout>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

// Reactive variables for stats and error
const stats = ref(null);
const error = ref(null);

// Function to fetch order stats
const fetchOrderStats = async () => {
  try {
    const response = await axios.get(
      `http://localhost/test/wp-json/wc/v1/order-stats`,
      {
        withCredentials: true, // Ensures cookies are sent for authentication
      }
    );
    stats.value = response.data;
  } catch (err) {
    if (err.response && err.response.status === 403) {
      error.value = "You do not have permission to access this data.";
    } else {
      error.value = "An error occurred while fetching data.";
    }
  }
};

// Fetch data when the component is mounted
onMounted(fetchOrderStats);
</script>
