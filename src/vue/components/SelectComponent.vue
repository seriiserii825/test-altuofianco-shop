<script setup>
import {ref} from "@vue/reactivity";

const props = defineProps({
  label: {
    type: String,
    required: false,
  },
  value: {
    type: Object,
    required: false,
  },
  values: {
    type: Array,
    required: false,
  },
  tabindex: {
    type: Number,
    required: false,
  },
  options: {
    type: Array,
    required: true,
  },
  disabled: {
    type: Boolean,
    required: false
  }
});

const emits = defineEmits(['update:value']);

const is_visible_options = ref(false);

function getItemById(id){
  return props.options.find(item => item.id === id);
}

function toggleIsVisibleOptions() {
  is_visible_options.value = !is_visible_options.value;
}

function handleOptionClick(option) {
  if(props.values){
    let local_values= [...props.values];
    if(local_values.includes(option.id)){
      local_values.splice(local_values.indexOf(option.id), 1);
    }else{
      local_values.push(option.id);
    }
    emits('update:values', local_values);
  }else{
    emits('update:value', option);
  }
  is_visible_options.value = false;
}
</script>
<template>
  <div class="v-select prevent-select"
       :class="{'disabled': disabled}"
       :tabindex="props.tabindex || -1"
  >
    <header class="v-select__header">
      <h3 v-if="props.label" class="v-select__title filter-title">
        <span class="v-select__span">{{ props.label }}</span>
      </h3>
      <div
          :class="{ 'is-active': is_visible_options}"
          class="v-select-selected"
          @click="toggleIsVisibleOptions"
      >
        <span v-if="props.value">{{ props.value.title }}</span>
        <span v-else>
          <span v-if="props.values && props.values.length > 0">
            <span class="v-select-selected__span" v-for="item in props.values" :key="item">{{ getItemById(item).title
              }}</span>
          </span>
        </span>
      </div>
    </header>
    <ul class="v-select-options"
        v-if="is_visible_options"
        :class="{'overflow': props.options.length > 8}">
      <li v-for="item in props.options"
          :key="item.id"
          class="v-select-options__item"
          :class="{'selected': props.values && props.values.includes(item.id)}"
          @click="handleOptionClick({id: item.id, title: item.title})"
      >{{ item.title }}
      </li>
    </ul>
  </div>
</template>
