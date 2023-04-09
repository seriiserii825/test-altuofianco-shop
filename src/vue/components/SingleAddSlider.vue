<template>
  <div class="single-add-slider">
    <carousel>
      <slide v-for="slide in foto_list" :key="slide.id">
        <div class="single-add-slider__item">
          <img :src="slide.nome" alt="">
        </div>
      </slide>
      <template #addons>
        <navigation/>
      </template>
    </carousel>
  </div>
</template>

<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import 'vue3-carousel/dist/carousel.css'
import {Carousel, Slide, Pagination, Navigation} from 'vue3-carousel'

export default {
  name: 'App',
  props: {
    foto_list: {
      type: Array,
      required: true,
    },
  },
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
}
</script>
