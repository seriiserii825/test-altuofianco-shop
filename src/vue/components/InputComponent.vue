<script setup>
import {onMounted, ref, computed} from "vue";
const props = defineProps({
  type: {
    type: String,
    default: 'text',
  },
  label: {
    type: String,
    required: false,
  },
  placeholder: {
    type: String,
    required: false,
  },
  id: {
    type: String,
    required: false,
  },
  errors: {
    type: Array,
    required: false,
  },
  value: {
    type: [String, Number],
    required: false
  },
  dark: {
    type: Boolean,
    required: false,
  },
});
const input_type = ref('text');
const propsValue = computed(() => {
  return props.value;
});
const emits = defineEmits(['update:value']);
function changeHandler(e) {
  let value = e.target.value;
  emits('update:value', value);
}
const has_errors = computed(() => {
  return props.errors && props.errors.every(item => item !== "");
});
function togglePassword() {
  if (input_type.value === 'password') {
    input_type.value = 'text';
  } else {
    input_type.value = 'password';
  }
}
onMounted(() => {
  input_type.value = props.type;
});
</script>
<template>
  <div
      :class="{'v-input--dark': dark}"
      class="v-input">
    <label v-if="label" :for="id">{{ label }}</label>
    <input
        :id="id"
        :type="input_type"
        :placeholder="placeholder !== undefined ? placeholder : null"
        :value="propsValue"
        @input="changeHandler"
    />
    <div v-if="has_errors" class="v-input__error">
      <p v-for="(error, index) in errors" :key="index" v-html="error"></p>
    </div>
    <div @click="togglePassword" class="v-input--show">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M12 5.25C4.5 5.25 1.5 12 1.5 12C1.5 12 4.5 18.75 12 18.75C19.5 18.75 22.5 12 22.5 12C22.5 12 19.5 5.25 12 5.25Z"
            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path
            d="M12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75Z"
            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
  </div>
</template>
