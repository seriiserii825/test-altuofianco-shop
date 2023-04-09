<script setup>
const emits = defineEmits(['update_current']);
const props = defineProps({
  current_page: {
    type: Number,
    required: true
  },
  total_pages: {
    type: Number,
    required: true
  }
});

function updateCurrent(e,index) {
  e.preventDefault();
  emits('update_current', index);
}
</script>
<template>
  <ul class='paginate'>
    <li
        v-for="(item, index) in total_pages"
        :key="index"
        :class="{'active': current_page === index + 1}"
    >
      <a @click="updateCurrent( $event,index + 1)" href="#">{{ item }}</a>
    </li>
  </ul>
</template>