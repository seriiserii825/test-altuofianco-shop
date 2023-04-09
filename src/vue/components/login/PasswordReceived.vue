<script setup>
import FormIntro from "./FormIntro.vue";
import FormBtn from "../forms/FormBtn.vue";
const emits = defineEmits(["emit_password_received"]);
const email = localStorage.getItem("received_email");
function onSubmit(){
  emits("emit_password_received");
}
</script>
<template>
  <div class="password-received">
    <div class="vue-form">
      <div class="vue-form__intro">
        <FormIntro
            title="Password inviata"
            subtitle="La password è stata inviata al seguente indirizzo e-mail:"
            :email="email"
            color="#18BC5A"
        >
          <svg
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
          >
            <path
                d="M52.5745 8.97492L5.9745 22.0999C5.57782 22.2084 5.22421 22.4365 4.96185 22.7532C4.69948 23.0698 4.54112 23.4597 4.50832 23.8696C4.47553 24.2796 4.5699 24.6896 4.77858 25.044C4.98726 25.3984 5.30011 25.6798 5.67451 25.8499L27.0745 35.9749C27.4937 36.1691 27.8304 36.5057 28.0245 36.9249L38.1495 58.3249C38.3196 58.6993 38.6011 59.0122 38.9554 59.2208C39.3098 59.4295 39.7199 59.5239 40.1298 59.4911C40.5397 59.4583 40.9296 59.2999 41.2463 59.0376C41.5629 58.7752 41.7911 58.4216 41.8995 58.0249L55.0245 11.4249C55.124 11.0849 55.1301 10.7243 55.0423 10.3811C54.9545 10.0378 54.776 9.7245 54.5255 9.47397C54.2749 9.22344 53.9616 9.04492 53.6184 8.95712C53.2751 8.86931 52.9146 8.87546 52.5745 8.97492V8.97492Z"
                stroke="#18BC5A"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
            <path
                d="M27.7246 36.2751L39.0246 24.9751"
                stroke="#18BC5A"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
          </svg>
        </FormIntro>
      </div>
      <div class="vue-form__text">Il messaggio dovrebbe arrivarti entro pochi minuti: ricordati di controllare anche la
        cartello spam.
      </div>
      <div class="vue-form__button">
        <FormBtn @click="onSubmit" :primary="true">Vai al login</FormBtn>
      </div>
    </div>
  </div>
</template>
