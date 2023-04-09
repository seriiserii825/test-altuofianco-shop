<script setup>
import {onMounted, ref} from "vue";
import {axiosInstance} from "../../utils/axios-instances";
import FormHeader from "./FormHeader.vue";
import InputComponent from "../InputComponent.vue";
import FormBtn from "../forms/FormBtn.vue";
import useGetCookie from "../../hooks/useGetCookie";
import useDecrypt from "../../hooks/useDecrypt";
const emits = defineEmits(["emit_login"]);
const error_text = ref("");
const non_partita_error_text = "Inserisci la parita iva";
const partita_error_text =
    'La partita Iva inserita non è presente nei nostri archivi. Riprova inserendo i dati corretti. Se non sei ancora cliente Altuofianco, <a href="/come-accumulare-punti">scopri come diventarlo</a>';
const partita = ref("2222");
const first_login = ref(null);
async function onSubmit() {
  if (!partita.value) {
    error_text.value = non_partita_error_text;
  } else {
    try {
      const data = await axiosInstance.get(`/check_vat?vat=${partita.value}`);
      first_login.value = data.data.data.first_login;
      localStorage.setItem("partita", partita.value);
      localStorage.setItem("company_email", data.data.data.company_email);
      localStorage.setItem("customer_id", data.data.data.customer_id);
      emits("emit_login", first_login.value);
    } catch (error) {
      error_text.value = partita_error_text;
    }
  }
}
function onInput() {
  error_text.value = "";
}
onMounted(() => {
  console.log('some')
});
</script>
<template>
  <div class="vue-form">
    <div class="vue-form__header">
      <FormHeader
          title="Inserisci qui sotto la tua partita iva"
          message="oppure il codice fiscale se sei un cliente di Altuofianco come persona fisica"
      >
        <svg
            width="32"
            height="32"
            viewBox="0 0 32 32"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
          <path
              d="M26 11H6C5.44772 11 5 11.4477 5 12V26C5 26.5523 5.44772 27 6 27H26C26.5523 27 27 26.5523 27 26V12C27 11.4477 26.5523 11 26 11Z"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M11.5 11V6.5C11.5 5.30653 11.9741 4.16193 12.818 3.31802C13.6619 2.47411 14.8065 2 16 2C17.1935 2 18.3381 2.47411 19.182 3.31802C20.0259 4.16193 20.5 5.30653 20.5 6.5V11"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
        </svg>
      </FormHeader>
    </div>
    <div class="vue-form__input">
      <InputComponent
          label="Partita Iva"
          id="partita"
          :errors="[error_text]"
          v-model:value="partita"
      />
    </div>
    <FormBtn @click="onSubmit">Prosegui</FormBtn>
  </div>
</template>
