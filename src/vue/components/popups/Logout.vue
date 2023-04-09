<script setup>
const emits = defineEmits(["emit_logout"]);
import FormBtn from "../forms/FormBtn.vue";
import FormIntro from "../login/FormIntro.vue";
function onSubmit() {
  emits("emit_logout");
}
function gotToReservation() {
  emits("emit_logout");
  window.location.href = "/area-riservata";
}
</script>
<template>
  <div class="v-logout">
    <div class="v-logout__body">
      <div class="vue-form">
        <div class="vue-form__intro">
          <FormIntro
              title="Attenzione!"
              subtitle="Sei stato disconnesso dall'area riservata"
          >
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_332_1188)">
                <path
                    d="M35.6028 10.055L57.4678 48.0225C59.0003 50.6975 57.0203 54 53.8653 54H10.1353C6.98025 54 5.00025 50.6975 6.53275 48.0225L28.3977 10.055C29.9727 7.315 34.0278 7.315 35.6028 10.055Z"
                    stroke="#FF4848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32 36V26" stroke="#FF4848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path
                    d="M32 48C33.6569 48 35 46.6569 35 45C35 43.3431 33.6569 42 32 42C30.3431 42 29 43.3431 29 45C29 46.6569 30.3431 48 32 48Z"
                    fill="#FF4848"/>
              </g>
              <defs>
                <clipPath id="clip0_332_1188">
                  <rect width="64" height="64" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </FormIntro>
        </div>
        <footer class="vue-form__bottom">
          <div class="vue-form__text">Puoi accedere di nuovo utilizzando</div>
          <div class="vue-form__btn" :style="{marginBottom: '3.2rem'}">
            <FormBtn @click="gotToReservation" :primary="true">Area riservata</FormBtn>
          </div>
          <div class="vue-form__btn">
            <FormBtn @click="onSubmit" color="error">Chiudi</FormBtn>
          </div>
        </footer>
      </div>
    </div>
  </div>
</template>
