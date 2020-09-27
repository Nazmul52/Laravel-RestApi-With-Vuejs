<template>
  <div>
    <app-header :login_Status="loginResponseData.login_status"
    ></app-header>
    <!--header section end-->
    <div class="main">

      <!--hero section start-->
      <section class="ptb-120 overflow-hidden sub_banner primary-bg" style="height:400px">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 mx-auto text-center">
              <div class="hero-slider-content">
                <h2 class="text-uppercase text-white mb-4">Upcoming Matches</h2>
                <div class="matches_tab text-center">
                  <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item" @click="changeMatchType('cricket')">
                      <a :class="getMatchType==='cricket'?'nav-link active btn btn-brand-03 btn-lg active':'nav-link btn btn-brand-03 btn-lg'"
                         href="javascript:void(0)">
                        <img src="@/assets/cricket-active.svg" alt=""> Cricket
                        {{ changeMatchType === 'cricket' ? 'active' : '' }}
                      </a>
                    </li>
                    <li class="nav-item" @click="changeMatchType('football')">
                      <a :class="getMatchType==='football'?'nav-link active btn btn-brand-03 btn-lg active':'nav-link btn btn-brand-03 btn-lg'"
                         href="javascript:void(0)">
                        <img src="@/assets/football-inactive.svg" alt=""> Football
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--hero section end-->

      <!--Matches section start-->
      <section class="promo-section pt-120 pb-60" style="margin-top: -120px;">
        <div class="container text-center">
          <div class="tab-content">
            <div class="tab-pane fade show active">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="big_matche_list matche_each matche_each_big bg-light p-3 rounded"
                       v-for="(match,index) of getUpcomingMatchList(undefined)" :key="index">
                    <app-match-component :matchType="getMatchType"
                                         :matchDetail="{...match}"
                                         :root-class="{'mb-3':true}"
                    ></app-match-component>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex justify-content-center align-items-center bg-light rounded h-100 p-4">
                    <Carousel :perPage="1">
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                    </Carousel>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Matches section end-->
    </div>

    <!--footer bottom copyright start-->
    <app-footer></app-footer>
    <!--scroll bottom to top button end-->
  </div>
</template>

<script>
import {Carousel, Slide} from "vue-carousel";
import MatchComponent from '@/components/home/match/MatchComponent'
import Footer from '@/components/home/Footer'
import * as type from '@/store/type';
import {mapMutations, mapGetters, mapActions} from 'vuex';
import Header from '@/components/home/Header';

export default {
  name: "MatchList",
  components: {
    Carousel,
    Slide,
    'appMatchComponent': MatchComponent,
    'appFooter': Footer,
    'appHeader': Header
  },
  data() {
    return {
      loginResponseData: {
        login_status: false,
        login_fail_message: undefined,
      }
    }
  },
  methods: {
    ...mapMutations({
      changeMatchType: type.MATCH_TYPE,
    }),
    ...mapActions({
      fetchUpcomingCricketList: type.UPCOMING_MATCH_LIST_CRICKET,
      fetchUpcomingFootballList: type.UPCOMING_MATCH_LIST_FOOTBALL
    }),
    handleSlideClick(dataset) {
      console.log(dataset.index, dataset.name)
    },
  },
  computed: {
    ...mapGetters({
      getMatchType: type.MATCH_TYPE,
      getUpcomingMatchList: type.UPCOMING_MATCH_LIST,
      loginResponse: type.USER_LOGIN_STATUS
    }),
  },
  mounted() {
    this.fetchUpcomingCricketList();
    this.fetchUpcomingFootballList();
  },
  watch: {
    loginResponse: function (nv, ov) {
      this.loginResponseData.login_fail_message = nv.login_fail_message;
      this.loginResponseData.login_status = nv.login_status;
      console.log(ov);
    }
  }
}
</script>

<style scoped>

</style>
