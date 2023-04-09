<script setup>
import {ref} from "@vue/reactivity";
import SingleAddHeader from "./SingleAddHeader.vue";
import {onMounted} from "vue";
import {axiosInstance} from "../../utils/axios-instances";
import SingleAddSlider from "../../components/SingleAddSlider.vue";
import SingleAddTags from "../../components/SingleAddTags.vue";
import SingleAddDescription from "../../components/SingleAddDescription.vue";

const loading = ref(true);
const immobile = ref(null);
const title = ref(null);
const code = ref(null);
const price = ref(null);
const contract = ref(null);
const foto_list = ref(null);
onMounted(() => {
  const app_key = document.getElementById("singleAdd").getAttribute("app-key");
  const auth_key = document.getElementById("singleAdd").getAttribute("auth-key");
  axiosInstance.defaults.headers.common["authkey"] = auth_key;
  axiosInstance.defaults.headers.common["appkey"] = app_key;
  const href = window.location.href;
  const steps = href.split('/');
  const id_step = steps[steps.length - 2];
  const id = id_step.split('-')[0];
  axiosInstance
      .get(`/immobili/${id}`)
      .then((resp) => {
        immobile.value = resp.data.data[0];
        code.value = immobile.value.codice;
        title.value = immobile.value.titolo + " " + immobile.value.comune + "()";
        title.value = `${immobile.value.titolo} ${immobile.value.comune} (${
            immobile.value.frazione ? immobile.value.frazione : ""
        })`;
        price.value = immobile.value.prezzo_richiesto + '';
        contract.value = immobile.value.motivazione === 1 ? 'In vendita' : 'In affitto';
        foto_list.value = immobile.value.foto_list;
        loading.value = false;
      })
      .catch((error) => {
        console.log(error, "error fetch comune");
        loading.value = false;
      });
})
</script>
<template>
  <div class="single-add" v-if="!loading">
    <div class="single-add__container">
      <SingleAddHeader :code="code" :title="title" :price="price" :contract="contract"/>
      <SingleAddSlider v-if="foto_list.length" :foto_list="foto_list"/>
      <div class="single-add__main">
        <div class="single-add__content">
          <SingleAddTags
              :totale_mq="immobile.totale_mq"
              :locali="immobile.locali"
              :bagni="immobile.bagni"
          />
          <div class="single-add__sections">
            <SingleAddDescription
                v-if="immobile.disposizione_interna"
                :disposizione_interna="immobile.disposizione_interna"
            />
            <div class="single-add__block">
              <div class="single-add__block-title">Altre caratteristiche</div>

              <div class="single-add__features">

                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">

                    <div class="single-add__row-title">Bagni:</div>
                    <div class="single-add__row-value">
                      1
                    </div>
                  </div>
                </div>
                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-title">Piano:</div>
                  <div class="single-add__row-value">
                    Rialzato
                  </div>
                </div>
                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">

                    <div class="single-add__row-title">Totale piani stabile:</div>
                    <div class="single-add__row-value">
                      8
                    </div>
                  </div>
                </div>


                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">


                    <div class="single-add__row-title">Box:</div>
                    <div class="single-add__row-value">
                      No
                    </div>
                  </div>
                </div>

                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">


                    <div class="single-add__row-title">Riscaldamento:</div>
                    <div class="single-add__row-value">
                      Centralizzato
                    </div>
                  </div>
                </div>

                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">


                    <div class="single-add__row-title">Condizionatore:</div>
                    <div class="single-add__row-value">
                      Sì
                    </div>
                  </div>
                </div>


                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">

                    <div class="single-add__row-title">Arredamento:</div>
                    <div class="single-add__row-value">
                      Sì
                    </div>
                  </div>
                </div>


                <div class="single-add__row">
                  <div class="single-add__row-svg">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none">
                      <path d="M15.5625 1.6875L5.9375 11.3125L1.125 6.5" stroke="#00C74F" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="single-add__row-r">

                    <div class="single-add__row-title">Classe energetica:</div>
                    <div class="single-add__row-value">

                      G
                    </div>
                  </div>
                </div>


              </div>
            </div>
            <div class="single-add__block single-add__block--map">
              <div class="single-add__block-title">Mappa della zona dell'immobile</div>
              <div class="single-add__map-container">
                <div
                    class="single-add__map leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                    data-lat="45.481813" data-lng="9.164278" id="singleEstateMap" tabindex="0"
                    style="position: relative;">
                  <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="leaflet-pane leaflet-tile-pane">
                      <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                        <div class="leaflet-tile-container leaflet-zoom-animated"
                             style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                                                                                       src="https://b.tile.openstreetmap.org/15/17217/11725.png"
                                                                                                       class="leaflet-tile leaflet-tile-loaded"
                                                                                                       style="width: 256px; height: 256px; transform: translate3d(169px, 202px, 0px); opacity: 1;"><img
                            alt="" src="https://c.tile.openstreetmap.org/15/17218/11725.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(425px, 202px, 0px); opacity: 1;"><img
                            alt="" src="https://a.tile.openstreetmap.org/15/17217/11724.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(169px, -54px, 0px); opacity: 1;"><img
                            alt="" src="https://b.tile.openstreetmap.org/15/17218/11724.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(425px, -54px, 0px); opacity: 1;"><img
                            alt="" src="https://c.tile.openstreetmap.org/15/17217/11726.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(169px, 458px, 0px); opacity: 1;"><img
                            alt="" src="https://a.tile.openstreetmap.org/15/17218/11726.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(425px, 458px, 0px); opacity: 1;"><img
                            alt="" src="https://a.tile.openstreetmap.org/15/17216/11725.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-87px, 202px, 0px); opacity: 1;"><img
                            alt="" src="https://a.tile.openstreetmap.org/15/17219/11725.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(681px, 202px, 0px); opacity: 1;"><img
                            alt="" src="https://c.tile.openstreetmap.org/15/17216/11724.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-87px, -54px, 0px); opacity: 1;"><img
                            alt="" src="https://c.tile.openstreetmap.org/15/17219/11724.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(681px, -54px, 0px); opacity: 1;"><img
                            alt="" src="https://b.tile.openstreetmap.org/15/17216/11726.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-87px, 458px, 0px); opacity: 1;"><img
                            alt="" src="https://b.tile.openstreetmap.org/15/17219/11726.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(681px, 458px, 0px); opacity: 1;">
                        </div>
                      </div>
                    </div>
                    <div class="leaflet-pane leaflet-overlay-pane"></div>
                    <div class="leaflet-pane leaflet-shadow-pane"><img
                        src="https://essevi.altuofianco.com/wp-content/themes/ar-essevi/assets/i/leaflet/marker-shadow.png"
                        class="leaflet-marker-shadow leaflet-zoom-animated" alt=""
                        style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(464px, 250px, 0px);">
                    </div>
                    <div class="leaflet-pane leaflet-marker-pane"><img
                        src="https://essevi.altuofianco.com/wp-content/themes/ar-essevi/assets/i/leaflet/marker-icon.png"
                        class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="Marker" tabindex="0"
                        role="button"
                        style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(464px, 250px, 0px); z-index: 250;">
                    </div>
                    <div class="leaflet-pane leaflet-tooltip-pane"></div>
                    <div class="leaflet-pane leaflet-popup-pane"></div>
                    <div class="leaflet-proxy leaflet-zoom-animated"
                         style="transform: translate3d(4.40785e+06px, 3.00165e+06px, 0px) scale(16384);"></div>
                  </div>
                  <div class="leaflet-control-container">
                    <div class="leaflet-top leaflet-left">
                      <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in"
                                                                                       href="#" title="Zoom in"
                                                                                       role="button"
                                                                                       aria-label="Zoom in"
                                                                                       aria-disabled="false"><span
                          aria-hidden="true">+</span></a><a class="leaflet-control-zoom-out" href="#" title="Zoom out"
                                                            role="button" aria-label="Zoom out"
                                                            aria-disabled="false"><span aria-hidden="true">−</span></a>
                      </div>
                    </div>
                    <div class="leaflet-top leaflet-right"></div>
                    <div class="leaflet-bottom leaflet-left"></div>
                    <div class="leaflet-bottom leaflet-right">
                      <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com"
                                                                                  title="A JavaScript library for interactive maps">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="12" height="8"
                             viewBox="0 0 12 8" class="leaflet-attribution-flag">
                          <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                          <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                          <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                        </svg>
                        Leaflet</a> <span aria-hidden="true">|</span> © <a
                          href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="app-single" class="single-add__sidebar">
          <div id="vueAccentAdds">
            <div class="sbr"><h2 class="sbr__title single-add__block-title">
              Annunci in evidenza
            </h2> <!----> <!---->
              <div class="sbr__container">
                <div class="add add--sbr">
                  <div class="add__header">
                    <div class="add__rif">
                      Riferimento <span>prestigioso plurilocale in palazzo depoca</span></div>
                    <a href="/annunci-immobiliari/2132344-appartamento-milano-brera/" class="add__title"><h3>
                      Appartamento a <span>milano (brera)</span></h3></a>
                    <div class="add__subtitle">
                      <div class="add__contract">
                        In Vendita
                      </div>
                      <div class="add__price">€ 3.800.000</div>
                    </div>
                  </div>
                  <a href="/annunci-immobiliari/2132344-appartamento-milano-brera/" class="add__img">
                    <picture>
                      <source srcset="https://agestanet.risorseimmobiliari.it/public/annunci/02950/2132344/F_433736.jpg"
                              media="(max-width: 1200px)">
                      <img loading="lazy"
                           src="https://agestanet.risorseimmobiliari.it/public/annunci/02950/2132344/F_433736.jpg"
                           alt="Appartamento a milano (brera)"></picture>
                  </a>
                  <div class="add__footer">
                    <div class="add__footer-item">
                      <div class="add__footer-svg">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none">
                          <path
                              d="M16.75 3.125H4.25C3.90482 3.125 3.625 3.40482 3.625 3.75V16.25C3.625 16.5952 3.90482 16.875 4.25 16.875H16.75C17.0952 16.875 17.375 16.5952 17.375 16.25V3.75C17.375 3.40482 17.0952 3.125 16.75 3.125Z"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path
                              d="M14.5398 12.3722H14.3898H9.96364H9.81364V12.2222V11.2935V11.2294L9.85994 11.1851L12.4258 8.72992L12.4266 8.7292L12.4266 8.7292C12.8146 8.36308 12.9935 7.98635 12.9935 7.59692C12.9935 7.32386 12.9105 7.11997 12.7549 6.9689C12.599 6.81754 12.3859 6.73543 12.0988 6.73543C11.7802 6.73543 11.5644 6.82692 11.4236 6.9877C11.2766 7.15548 11.1961 7.38211 11.195 7.68224L11.2218 7.97879L11.2367 8.14232H11.0725H9.96364H9.83225L9.81495 8.01208C9.80163 7.91188 9.79531 7.79773 9.79531 7.67048C9.79531 7.00546 10.0026 6.45599 10.4264 6.03734L14.5398 12.3722ZM14.5398 12.3722V12.2222M14.5398 12.3722V12.2222M14.5398 12.2222V11.1923V11.0423H14.3898H11.8889L13.261 9.82437C13.2611 9.82433 13.2611 9.82429 13.2612 9.82424C13.672 9.46196 13.9706 9.10758 14.1473 8.76009C14.331 8.4108 14.4206 8.01254 14.4206 7.56933C14.4206 6.93846 14.2116 6.41362 13.7882 6.00847M14.5398 12.2222L13.7882 6.00847M13.7882 6.00847C13.3688 5.60115 12.7993 5.40554 12.0988 5.40554C11.4186 5.40554 10.8561 5.61281 10.4264 6.03733L13.7882 6.00847Z"
                              fill="#1A2746" stroke="#1A2746" stroke-width="0.3"></path>
                        </svg>
                      </div>
                      <div class="add__footer-label">
                        327 m<sup>2</sup></div>
                    </div>
                    <div class="add__footer-item">
                      <div class="add__footer-svg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path
                              d="M8.125 13.125V6.25H16.25C16.913 6.25 17.5489 6.51339 18.0178 6.98223C18.4866 7.45107 18.75 8.08696 18.75 8.75V13.125"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M1.25 16.25V3.75" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path d="M1.25 13.125H18.75V16.25" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path d="M8.125 6.25H1.25" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                      </div>
                      <div class="add__footer-label"><span>Locali</span> 14
                      </div>
                    </div>
                    <div class="add__footer-item">
                      <div class="add__footer-svg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M5.625 15V16.875" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path d="M14.375 15V16.875" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path
                              d="M4.375 8.125V4.0625C4.375 3.6481 4.53962 3.25067 4.83265 2.95765C5.12567 2.66462 5.5231 2.5 5.9375 2.5C6.3519 2.5 6.74933 2.66462 7.04235 2.95765C7.33538 3.25067 7.5 3.6481 7.5 4.0625"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M15.625 7.5H10.625V11.25H15.625V7.5Z" stroke="#1A2746" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                          <path
                              d="M15.625 8.125H18.125C18.2908 8.125 18.4497 8.19085 18.5669 8.30806C18.6842 8.42527 18.75 8.58424 18.75 8.75V11.25C18.75 12.2446 18.3549 13.1984 17.6517 13.9017C16.9484 14.6049 15.9946 15 15 15H5C4.00544 15 3.05161 14.6049 2.34835 13.9017C1.64509 13.1984 1.25 12.2446 1.25 11.25V8.75C1.25 8.58424 1.31585 8.42527 1.43306 8.30806C1.55027 8.19085 1.70924 8.125 1.875 8.125H10.625"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                      <div class="add__footer-label"><span>Bagni</span> 3
                      </div>
                    </div>
                  </div>
                  <div class="add__accent">
                    <svg width="16" height="35" viewBox="0 0 16 35" fill="none">
                      <path d="M16 0V35H0L16 0Z" fill="#2C499C"></path>
                    </svg>
                    <span>In Evidenza</span>
                    <svg width="16" height="35" viewBox="0 0 16 35" fill="none">
                      <path d="M0 35V0H16L0 35Z" fill="#2C499C"></path>
                    </svg>
                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none">
                      <path d="M0 0V8H16L0 0Z" fill="#1A2746"></path>
                    </svg>
                  </div>
                </div>
                <div class="add add--sbr">
                  <div class="add__header">
                    <div class="add__rif">
                      Riferimento <span>GARDENIE BILO  3</span></div>
                    <a href="/annunci-immobiliari/2125536-appartamento-milano-primaticcio/" class="add__title"><h3>
                      Appartamento a <span>milano (primaticcio)</span></h3></a>
                    <div class="add__subtitle">
                      <div class="add__contract">
                        In Vendita
                      </div>
                      <div class="add__price">€ 278.000</div>
                    </div>
                  </div>
                  <a href="/annunci-immobiliari/2125536-appartamento-milano-primaticcio/" class="add__img">
                    <picture>
                      <source srcset="https://agestanet.risorseimmobiliari.it/public/annunci/02950/2125536/F_486059.jpg"
                              media="(max-width: 1200px)">
                      <img loading="lazy"
                           src="https://agestanet.risorseimmobiliari.it/public/annunci/02950/2125536/F_486059.jpg"
                           alt="Appartamento a milano (primaticcio)"></picture>
                  </a>
                  <div class="add__footer">
                    <div class="add__footer-item">
                      <div class="add__footer-svg">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none">
                          <path
                              d="M16.75 3.125H4.25C3.90482 3.125 3.625 3.40482 3.625 3.75V16.25C3.625 16.5952 3.90482 16.875 4.25 16.875H16.75C17.0952 16.875 17.375 16.5952 17.375 16.25V3.75C17.375 3.40482 17.0952 3.125 16.75 3.125Z"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path
                              d="M14.5398 12.3722H14.3898H9.96364H9.81364V12.2222V11.2935V11.2294L9.85994 11.1851L12.4258 8.72992L12.4266 8.7292L12.4266 8.7292C12.8146 8.36308 12.9935 7.98635 12.9935 7.59692C12.9935 7.32386 12.9105 7.11997 12.7549 6.9689C12.599 6.81754 12.3859 6.73543 12.0988 6.73543C11.7802 6.73543 11.5644 6.82692 11.4236 6.9877C11.2766 7.15548 11.1961 7.38211 11.195 7.68224L11.2218 7.97879L11.2367 8.14232H11.0725H9.96364H9.83225L9.81495 8.01208C9.80163 7.91188 9.79531 7.79773 9.79531 7.67048C9.79531 7.00546 10.0026 6.45599 10.4264 6.03734L14.5398 12.3722ZM14.5398 12.3722V12.2222M14.5398 12.3722V12.2222M14.5398 12.2222V11.1923V11.0423H14.3898H11.8889L13.261 9.82437C13.2611 9.82433 13.2611 9.82429 13.2612 9.82424C13.672 9.46196 13.9706 9.10758 14.1473 8.76009C14.331 8.4108 14.4206 8.01254 14.4206 7.56933C14.4206 6.93846 14.2116 6.41362 13.7882 6.00847M14.5398 12.2222L13.7882 6.00847M13.7882 6.00847C13.3688 5.60115 12.7993 5.40554 12.0988 5.40554C11.4186 5.40554 10.8561 5.61281 10.4264 6.03733L13.7882 6.00847Z"
                              fill="#1A2746" stroke="#1A2746" stroke-width="0.3"></path>
                        </svg>
                      </div>
                      <div class="add__footer-label">
                        50 m<sup>2</sup></div>
                    </div>
                    <div class="add__footer-item">
                      <div class="add__footer-svg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path
                              d="M8.125 13.125V6.25H16.25C16.913 6.25 17.5489 6.51339 18.0178 6.98223C18.4866 7.45107 18.75 8.08696 18.75 8.75V13.125"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M1.25 16.25V3.75" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path d="M1.25 13.125H18.75V16.25" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path d="M8.125 6.25H1.25" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                      </div>
                      <div class="add__footer-label"><span>Locali</span> 2
                      </div>
                    </div>
                    <div class="add__footer-item">
                      <div class="add__footer-svg">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M5.625 15V16.875" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path d="M14.375 15V16.875" stroke="#1A2746" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                          <path
                              d="M4.375 8.125V4.0625C4.375 3.6481 4.53962 3.25067 4.83265 2.95765C5.12567 2.66462 5.5231 2.5 5.9375 2.5C6.3519 2.5 6.74933 2.66462 7.04235 2.95765C7.33538 3.25067 7.5 3.6481 7.5 4.0625"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M15.625 7.5H10.625V11.25H15.625V7.5Z" stroke="#1A2746" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                          <path
                              d="M15.625 8.125H18.125C18.2908 8.125 18.4497 8.19085 18.5669 8.30806C18.6842 8.42527 18.75 8.58424 18.75 8.75V11.25C18.75 12.2446 18.3549 13.1984 17.6517 13.9017C16.9484 14.6049 15.9946 15 15 15H5C4.00544 15 3.05161 14.6049 2.34835 13.9017C1.64509 13.1984 1.25 12.2446 1.25 11.25V8.75C1.25 8.58424 1.31585 8.42527 1.43306 8.30806C1.55027 8.19085 1.70924 8.125 1.875 8.125H10.625"
                              stroke="#1A2746" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                      <div class="add__footer-label"><span>Bagni</span> 1
                      </div>
                    </div>
                  </div>
                  <div class="add__accent">
                    <svg width="16" height="35" viewBox="0 0 16 35" fill="none">
                      <path d="M16 0V35H0L16 0Z" fill="#2C499C"></path>
                    </svg>
                    <span>In Evidenza</span>
                    <svg width="16" height="35" viewBox="0 0 16 35" fill="none">
                      <path d="M0 35V0H16L0 35Z" fill="#2C499C"></path>
                    </svg>
                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none">
                      <path d="M0 0V8H16L0 0Z" fill="#1A2746"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

