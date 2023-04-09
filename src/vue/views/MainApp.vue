<script setup>
// import WooCommerceRestApi from "@woocommerce/woocommerce-rest-api";
import {onMounted} from "vue";
const origin_url = "https://shop.atf.care";
const api = new WooCommerceRestApi({
  url: origin_url,
  consumerKey: "ck_92447febd37589b512d93f323cdfad29fcee8e52",
  consumerSecret: "cs_0de411fb8b1baca980ce2611014047a085b93f20",
  version: "wc/v3"
});
function getProducts() {
  api.get("products", {
    per_page: 20,
  })
      .then((response) => {
        // Successful request
        console.log("Response Status:", response.status);
        console.log("Response Headers:", response.headers);
        console.log("Response Data:", response.data);
        console.log("Total of pages:", response.headers['x-wp-totalpages']);
        console.log("Total of items:", response.headers['x-wp-total']);
      })
      .catch((error) => {
        // Invalid request, for 4xx and 5xx statuses
        console.log("Response Status:", error.response.status);
        console.log("Response Headers:", error.response.headers);
        console.log("Response Data:", error.response.data);
      })
      .finally(() => {
        // Always executed.
      });
}
function getCategories() {
  api.get("products/categories")
      .then((response) => {
        // Successful request
        console.log("Response Status:", response.status);
        console.log("Response Headers:", response.headers);
        console.log("Response Data:", response.data);
        console.log("Total of pages:", response.headers['x-wp-totalpages']);
        console.log("Total of items:", response.headers['x-wp-total']);
      })
      .catch((error) => {
        // Invalid request, for 4xx and 5xx statuses
        console.log("Response Status:", error.response.status);
        console.log("Response Headers:", error.response.headers);
        console.log("Response Data:", error.response.data);
      })
      .finally(() => {
        // Always executed.
      });
}
onMounted(() => {
  // getProducts();
  getCategories();
});
</script>
<template>
  <div class="main-app">
    <h3>main app</h3>
  </div>
</template>
