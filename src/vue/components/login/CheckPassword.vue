<script setup>
import FormIntro from "./FormIntro.vue";
import FormBtn from "../forms/FormBtn.vue";
import {axiosInstance} from "../../utils/axios-instances";
const emits = defineEmits(["emit_check"]);
const email = localStorage.getItem("company_email");
function goToHome() {
  window.location.href = "/";
}
function onSubmit() {
  const customer_id = localStorage.getItem("customer_id");
  const first_login = localStorage.getItem("first_login");
  try {
    axiosInstance
        .put("/password", {
          customer_id: customer_id,
          first_login: first_login,
        })
        .then((response) => {
          const email = response.data.data.email;
          localStorage.setItem("received_email", email);
          emits("emit_check");
        });
  } catch (error) {
    console.log(error, "--- error");
  }
}
</script>
<template>
  <div class="vue-form">
    <div class="vue-form__intro">
      <FormIntro
          title="Invio della password"
          subtitle="La password verrà inviata al seguente indirizzo e-mail:"
          :email="email"
      >
        <svg
            width="64"
            height="64"
            viewBox="0 0 64 64"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
          <path
              d="M10 14V50"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M26 24V32"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M18.4004 29.5249L26.0004 31.9999"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M21.3008 38.475L26.0008 32"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M30.7 38.475L26 32"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M33.6 29.5249L26 31.9999"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M50 24V32"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M42.4004 29.5249L50.0004 31.9999"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M45.3008 38.475L50.0008 32"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M54.7 38.475L50 32"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
          <path
              d="M57.6 29.5249L50 31.9999"
              stroke="#00C2FF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
          />
        </svg>
      </FormIntro>
    </div>
    <footer class="vue-form__footer">
      <div class="vue-form__btn">
        <FormBtn @click="goToHome" color="error">Annulla</FormBtn>
      </div>
      <div class="vue-form__btn">
        <FormBtn @click="onSubmit">Procedi</FormBtn>
      </div>
    </footer>
  </div>
</template>
