<script setup>
const props = defineProps({
  title: {
    type: String,
    required: true,
  },
  subtitle: {
    type: String,
    required: true,
  },
  email: {
    type: String,
    required: false,
  },
  color: {
    type: String,
    default: "#00C2FF",
  },
});
</script>
<template>
  <div class="v-form-intro">
    <div class="v-form-intro__img">
      <slot></slot>
    </div>
    <h2 class="v-form-intro__title">{{ title }}</h2>
    <h3 class="v-form-intro__subtitle">{{ subtitle }}</h3>
    <div v-if="email" :style="{ color: color }" class="v-form-intro__email">{{ email }}</div>
  </div>
</template>
