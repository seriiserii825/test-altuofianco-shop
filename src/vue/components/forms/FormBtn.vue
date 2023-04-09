<script setup>
const props = defineProps({
  color: {
    type: String,
    default: "",
  },
  primary: {
    type: Boolean,
    required: false
  },
});
</script>
<template>
  <div
      class="form-btn"
      :class="[color, {'primary': primary}]"
  >
    <slot></slot>
  </div>
</template>
