<template>
  <section class="promo-section ptb-60 gray-light-bg">
    <div class="container text-center">
      <div class="tab-content">
        <div class="tab-pane fade show active">
          <div class="row justify-content-md-center justify-content-sm-center matche_each">
            <div class="col-lg-4" v-for="(match,index) of getUpcomingMatchList(6)" :key="index">
              <app-match-component :matchDetail="{...match}" v-if="index<6"></app-match-component>
            </div>
          </div>
          <router-link to="/match-list">
            <a href="javascript:void(0)" class="btn btn-brand-01">More Matches</a>
          </router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import MatchComponent from './match/MatchComponent';
import {mapGetters} from 'vuex';
import * as type from '@/store/type';

export default {
  name: "MatchListSection",
  props: {},
  data() {
    return {
      footballMatch: [],
      cricketMatch: [],
      matches: [],
    }
  },
  computed: {
    ...mapGetters({
      getUpcomingMatchList: type.UPCOMING_MATCH_LIST,
      getMatchType: type.MATCH_TYPE
    })
  },
  watch: {},
  components: {
    'appMatchComponent': MatchComponent
  },
  mounted() {

  }
}
</script>

<style scoped>

</style>
