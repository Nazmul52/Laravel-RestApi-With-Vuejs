<template>
  <div class="feature-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-5">
          <div class="feature-content-glance text-center">
            <h3 class="text-uppercase">At a glance</h3>
            <p>Start playing and win big on GO11, biggest fantasy sports platform in Bangladesh.</p>
            <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Get More Details</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-img-wrap text-center">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe :class="'youtube-frame embed-responsive-item'"
                      :sandbox="'allow-same-origin allow-scripts'"
                      :src="iframe_src"
                      v-if="iframe_load"
                      :frameborder="0"
                      :allow="'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'"
                      :allowfullscreen="true"></iframe>
              <!--                   <iframe class="embed-responsive-16bynsive-item" src="https://www.youtube.com/embed/Gcd4ONXBZ_U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "GlanceSection",
  data() {
    return {
      iframe_load: false,
      iframe_src: 'https://www.youtube.com/embed/OJMbQ-BpEWM',
    }
  },
  methods: {
  },
  mounted() {
    this.$nextTick(() => {
      this.iframe_load = true;
    })
  }
}


</script>

<style scoped>

</style>
