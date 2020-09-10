<template>
  <div class="feature-section ptb-100 ">
    <div class="container text-center mb-5">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-7">
          <div class="section-heading">
            <h2 class="text-uppercase">How to play</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6">
          <!--            <div class="owl-carousel owl-theme web_mobile_slider_1 dot-bottom-center custom-dot">-->
          <Carousel :perPage="1">
            <Slide data-index="0"
                   data-name="MySlideName0"
                   @slideclick="handleSlideClick">
              <div class="item">
                <img src="@/assets/web_mobile.png" class="img-fluid" alt="">
              </div>
            </Slide>
            <Slide data-index="1"
                   data-name="MySlideName1"
                   @slideclick="handleSlideClick">
              <div class="item">
                <img src="@/assets/web_mobile.png" class="img-fluid" alt="">
              </div>
            </Slide>
            <Slide data-index="2"
                   data-name="MySlideName2"
                   @slideclick="handleSlideClick">
              <div class="item">
                <img src="@/assets/web_mobile.png" class="img-fluid" alt="">
              </div>
            </Slide>
          </Carousel>
          <!--            <carousel>-->
          <!--            </div>-->
        </div>
        <div class="col-md-5">
          <div class="feature-content-wrap">
            <h3>How to Play Step 2</h3>
            <p>Get the contest list and click "Create Your Team" to create your fantasy team.</p>
          </div>
          <div class="action-btns mt-4">
            <a href="#" class="">
              <img src="@/assets/ios-app2.svg" alt="">
            </a>
            <a href="#" class="ml-3">
              <img src="@/assets/play-app2.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {Carousel, Slide} from "vue-carousel";

export default {
  name: "HowToPlaySection",
  components: {
    Carousel,
    Slide
  },
  methods: {
    handleSlideClick(dataset) {
      console.log(dataset.index, dataset.name)
    },
  },
}
</script>

<style scoped>

</style>
