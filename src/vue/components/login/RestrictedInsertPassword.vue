<script setup>
import {onMounted, ref} from "vue";
import {axiosInstance} from "../../utils/axios-instances";
import FormHeader from "./FormHeader.vue";
import InputComponent from "../InputComponent.vue";
import FormBtn from "../forms/FormBtn.vue";
import useEncrypt from "../../hooks/useEncrypt";
const emits = defineEmits(['emit_password']);
const password = ref("1111");
const partita = ref("");
const error_text = ref("");
const error_empty = ref("La password inserita non è corretta; riprova ad inserirla o richiedi una nuova password");
const error_text_default = "La password inserita non è corretta; riprova ad inserirla o richiedi una nuova password";
async function onSubmit() {
  const customer_id = localStorage.getItem("customer_id");
  if (!password.value) {
    error_text.value = error_empty.value;
  } else {
    error_text.value = "";
    try {
      const data = await axiosInstance.get(`/password?password=${password.value}&customer_id=${customer_id}`);
      let encrypted_message = useEncrypt(JSON.stringify(data.data.data));
      // useSetCookie("altuofianco_user", encrypted_message);
      localStorage.setItem("altuofianco_user", encrypted_message);
      window.location.href = window.location.origin;
    } catch (e) {
      console.log(e, 'e')
      error_text.value = e.response.data.data.error_message;
    }
  }
}
function onInput() {
  error_text.value = "";
}
function goToPasswordReceived() {
  emits("emit_password");
}
onMounted(() => {
  partita.value = localStorage.getItem("partita");
});
</script>
<template>
  <div class="vue-form">
    <div class="vue-form__header">
      <FormHeader
          title="Inserisci la password"
          message="Inserisci qui sotto la tua password"
      >
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 7V25" stroke="#00C2FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M13 12V16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.2002 14.7625L13.0002 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M10.6504 19.2375L13.0004 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M15.35 19.2375L13 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M16.8 14.7625L13 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M25 12V16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21.2002 14.7625L25.0002 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M22.6504 19.2375L25.0004 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M27.35 19.2375L25 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
          <path d="M28.8 14.7625L25 16" stroke="#00C2FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"/>
        </svg>
      </FormHeader>
    </div>
    <div class="vue-form__input">
      <InputComponent
          label="Partita Iva"
          id="partita"
          :errors="[]"
          v-model:value="partita"
          :dark="true"
      />
    </div>
    <div class="vue-form__input">
      <InputComponent
          label="Password"
          type="password"
          id="password"
          :errors="[error_text]"
          v-model:value="password"
      />
    </div>
    <div :style="{marginBottom: '1.6rem'}" class="vue-form__btn">
      <FormBtn @click="goToPasswordReceived">Richiedi una nuova password</FormBtn>
    </div>
    <div class="vue-form__btn">
      <FormBtn :primary="true" @click="onSubmit">Prosegui</FormBtn>
    </div>
  </div>
</template>
