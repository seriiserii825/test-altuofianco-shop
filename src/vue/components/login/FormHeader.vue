<script setup>
const props = defineProps({
  title: {
    type: String,
    required: true
  },
  message: {
    type: String,
    required: false
  },
})
</script>
<template>
  <div class="form-header">
    <header class="form-header__header">
      <h2 class="form__title">{{ title }}</h2>
      <slot></slot>
    </header>
    <div class="form-header__message">{{ message }}</div>
  </div>
</template>
