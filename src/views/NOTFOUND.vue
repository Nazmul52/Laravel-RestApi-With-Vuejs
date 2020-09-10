<template>
  <div>
    <div class="main">

      <!--404 section start-->
      <section class="ptb-100 bg-image full-height">
        <div class="background-image-wraper"
             :style="{backgroundImage: 'url(assets/contest-bg.jpg)', opacity: 1}"></div>
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
              <div class="error-content-wrap text-center text-white">
                <div class="notfound-404">
                  <h1 class="text-white">404</h1>
                </div>
                <h2 class="text-white">Sorry, something went wrong</h2>
                <p class="lead">The page you are looking for might have been removed had its name changed or is
                  temporarily
                  unavailable.</p>
                <router-link to="/">
                  <button class="btn btn-brand-03">Go to Homepage</button>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--404 section end-->

    </div>

    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
      <span class="fas fa-hand-point-up"></span>
    </div>
  </div>
</template>

<script>
export default {
  name: "NOTFOUND"
}
</script>

<style scoped>

</style>
