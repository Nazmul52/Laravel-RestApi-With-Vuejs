<template>
  <section class="promo-section ptb-60 gray-light-bg">
    <div class="container text-center">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="Cricket" role="tabpanel" aria-labelledby="Cricket-tab">
          <div class="row justify-content-md-center justify-content-sm-center matche_each">
            <div class="col-lg-4">
              <app-match-component></app-match-component>
            </div>
          </div>
          <router-link to="/match-list"><a href="javascript:void(0)" class="btn btn-brand-01">More Matches</a>
          </router-link>
        </div>
        <div class="tab-pane fade" id="Football" role="tabpanel" aria-labelledby="Football-tab">
          <div class="row justify-content-md-center justify-content-sm-center matche_each">
            <div class="col-lg-4">
              <app-match-component></app-match-component>
            </div>
          </div>
          <a href="#" class="btn btn-brand-01">More Matches</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import MatchComponent from './match/MatchComponent';

export default {
  name: "MatchListSection",
  components: {
    'appMatchComponent': MatchComponent
  }
}
</script>

<style scoped>

</style>
