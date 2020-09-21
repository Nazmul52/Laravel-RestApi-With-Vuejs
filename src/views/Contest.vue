<template>
  <div>


    <div class="main">

      <!--Matches section start-->
      <section class="promo-section vh-100 w-100 position-fixed contest_main_bg">
        <div class="container-fluid text-center h-100">
          <div class="row h-100">
            <div class="col-md-6 p-0 h-100 bg-light" v-if="matchDetail">
              <div class="contest_left h-100">
                <div class="bg-secondary px-4 pt-3 pb-2">
                  <div class="d-flex justify-content-between">
                    <div class="go_back">
                      <router-link :to="{name:'MatchList'}">
                        <i class="fas fa-arrow-left"></i>
                      </router-link>
                    </div>
                    <div class="contest_each_title">
                      <h5 class="text-white mb-0">{{ matchDetail.format }}</h5>
                    </div>
                    <div class="go_back">
                      <i class="fas fa-info-circle text-white ml-3" data-toggle="tooltip" data-placement="top"
                         title="Tooltip on top"></i>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="matche_vs_left">
                      <p class="mb-0 text-white font-weight-bold" v-if="matchDetail.teams && matchDetail.teams[0]">
                        <img style="max-width: 7rem;" class="mr-1"
                             :src="image_server_base_path+matchDetail.teams[0].logo">
                        {{ matchDetail.teams[0].code || matchDetail.teams[0].team_key }}
                      </p>
                    </div>
                    <div class="matche_time">
                      <p class="text-warning mb-0">VS</p>
                    </div>
                    <div class="matche_vs_right">
                      <p class="mb-0 text-white font-weight-bold" v-if="matchDetail.teams &&  matchDetail.teams[1]">
                        {{ matchDetail.teams[1].code || matchDetail.teams[1].team_key }}
                        <img class="ml-1" style="max-width: 7rem;"
                             :src="image_server_base_path+matchDetail.teams[1].logo"
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="bg-dark p-2">
                  <div class="d-flex justify-content-center">
                    <h5 class="text-danger mb-0">{{ hours }}h {{ minutes }}m left</h5>
                  </div>
                </div>
                <div class="bg-light p-3 h-100">
                  <div class="d-flex justify-content-between mb-4">
                    <div class="shorting_left">
                      <span class="d-inline-block mr-2">Short By :</span>
                      <div class="btn-group btn-group-toggle text-uppercase" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-success active">
                          <input type="radio" v-model="sort_by" @click="sortBy('total_prize')" value="total_prize">
                          Total Prize
                        </label>
                        <label class="btn btn-sm btn-outline-success">
                          <input type="radio" v-model="sort_by" @click="sortBy('entry_fee')" value="entry_fee">
                          Entry Fee
                        </label>
                      </div>
                    </div>
                    <div class="">
                      <button type="button" class="btn btn-sm btn-brand-01">
                        Create Team
                      </button>
                    </div>
                  </div>
                  <div v-for="(conts,index) of contest" :key="index">
                    <app-contest :contest="{...conts}" :index="index" @priceList="priceListProcess"></app-contest>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 h-100">
              <div class="d-flex justify-content-center align-items-center contest_right h-100">
                <div class="bg-light rounded w-100 p-5">
                  <Carousel :perPage="1">
                    <Slide data-index="0"
                           data-name="MySlideName0"
                           @slideclick="handleSlideClick">
                      <div class="item">
                        <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                        <h3>Walter Adams</h3>
                        <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                        <p>Playing Since <span class="text-warning">2018</span></p>
                        <p class="main_feedback text-muted px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam
                          aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet
                          lectus, et molestie sem tortor quis dui. Donec molestie nisi iaculis sodales mollis. Nullam
                          non
                          tellus sed elit pulvinar dignissim ut vel ex.</p>
                      </div>
                    </Slide>
                    <Slide data-index="1"
                           data-name="MySlideName1"
                           @slideclick="handleSlideClick">
                      <div class="item">
                        <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                        <h3>Walter Adams</h3>
                        <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                        <p>Playing Since <span class="text-warning">2018</span></p>
                        <p class="main_feedback text-muted px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam
                          aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet
                          lectus, et molestie sem tortor quis dui. Donec molestie nisi iaculis sodales mollis. Nullam
                          non
                          tellus sed elit pulvinar dignissim ut vel ex.</p>
                      </div>
                    </Slide>
                    <Slide data-index="2"
                           data-name="MySlideName2"
                           @slideclick="handleSlideClick">
                      <div class="item">
                        <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                        <h3>Walter Adams</h3>
                        <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                        <p>Playing Since <span class="text-warning">2018</span></p>
                        <p class="main_feedback text-muted px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam
                          aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet
                          lectus, et molestie sem tortor quis dui. Donec molestie nisi iaculis sodales mollis. Nullam
                          non
                          tellus sed elit pulvinar dignissim ut vel ex.</p>
                      </div>
                    </Slide>
                  </Carousel>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Matches section end-->
    </div>
    <!-- Prize Modal -->
    <div class="modal fade" id="prize_list">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <router-link :to="{name:'Home'}">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </router-link>
                <h4 class="mb-3 text-uppercase">Prize List</h4>
              </div>
              <ul class="list-group">
                <div v-for="prize_amount of selectedPrizeList.keys()" :key="prize_amount">
                  <li class="list-group-item d-flex justify-content-between align-items-center"
                  >
                    Rank {{
                      selectedPrizeList.get(prize_amount).length > 1 ?
                          selectedPrizeList.get(prize_amount)[0] + '-' + selectedPrizeList.get(prize_amount)[selectedPrizeList.get(prize_amount).length - 1]
                          : selectedPrizeList.get(prize_amount)[0]
                    }}
                    <span class="badge badge-success badge-pill">{{ prize_amount }} BDT</span>
                  </li>
                </div>
              </ul>
              <button class="btn btn-brand-01 border-radius mt-4 mb-2">
                Join Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

    <!-- Entry Fees Modal -->
    <div class="modal fade" id="entry_fees">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Entry Fee</h4>
                <p class="text-muted">The minimum withdrawal amount is <span class="text-success font-weight-bold">250 BDT</span>
                  and the maximum amount is <span class="text-success font-weight-bold">4999 BDT</span></p>
              </div>
              <button class="btn btn-brand-01 border-radius mt-4 mb-2">
                Join Now
              </button>
              <p class="text-center mb-0">Don't have enough coins?</p>
              <a href="sign-up.html"><u>Get Coins</u></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

    <!-- Select Team Modal -->
    <div class="modal fade" id="select_team">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Select Your Team</h4>
                <p class="text-muted">Maecenas Interdum Lorem Eleifend Orci Aliquam Mollis. Aliquam Non Rhoncus Magna
                  Suspendisse. </p>
              </div>
              <div class="bg-light rounded px-4 mt-4">
                <div class="team_details_each">
                  <div class="text-left mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">Team Name: <span
                          class="text-success font-weight-bold">Lucifer</span></label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between team_details">
                    <div class="">
                      <span class="team_captain bg-dark text-white mb-2">C</span> Ronnie Grand
                      <div class="clearfix"></div>
                      <span class="team_vicecaptain bg-warning text-white">VC</span> Ronnie Grand
                    </div>
                    <div class="">
                      <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item text-muted">
                          WK
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BAT
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          ALL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BOWL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="team_details_each">
                  <div class="text-left mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">Team Name: <span
                          class="text-success font-weight-bold">Lucifer</span></label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between team_details">
                    <div class="">
                      <span class="team_captain bg-dark text-white mb-2">C</span> Ronnie Grand
                      <div class="clearfix"></div>
                      <span class="team_vicecaptain bg-warning text-white">VC</span> Ronnie Grand
                    </div>
                    <div class="">
                      <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item text-muted">
                          WK
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BAT
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          ALL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BOWL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="team_details_each">
                  <div class="text-left mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">Team Name: <span
                          class="text-success font-weight-bold">Lucifer</span></label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between team_details">
                    <div class="">
                      <span class="team_captain bg-dark text-white mb-2">C</span> Ronnie Grand
                      <div class="clearfix"></div>
                      <span class="team_vicecaptain bg-warning text-white">VC</span> Ronnie Grand
                    </div>
                    <div class="">
                      <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item text-muted">
                          WK
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BAT
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          ALL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BOWL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <button id="joinButton" class="btn btn-success border-radius mt-4 mb-2" data-toggle="modal"
                      data-target="#join_confirmation" data-dismiss="modal" disabled="true">
                Join Contest
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

    <!-- Entry Fees Modal -->
    <div class="modal fade" id="join_confirmation">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Confirmation</h4>
                <p class="text-warning mb-0">
                  Your total coins = 4750 <img class=" mb-1" src="@/assets/coin.svg" width="16" alt="">
                </p>
                <p class="text-success">
                  Available free contests = 0
                </p>
              </div>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Entry Fee
                  <span class="text-dark">
                  5000
                  <img class=" mb-1 ml-1" src="@/assets/coin.svg" width="16" alt="">
                </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Apply Free Contest</label>
                  </div>
                  <span class="text-dark">
                  - 5000
                  <img class=" mb-1 ml-1" src="@/assets/coin.svg" width="16" alt="">
                </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                  To Pay
                  <span class="text-dark font-weight-bold">
                  0
                  <img class=" mb-1 ml-1" src="@/assets/coin.svg" width="16" alt="">
                </span>
                </li>
              </ul>
              <p class="text-center text-muted mt-4 mb-0">By joining this contest, you accept GO11's T&C</p>
              <button class="btn btn-brand-01 border-radius mt-2 mb-2">
                Confirm Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

  </div>
</template>

<script>
import {image_server_base_path} from '@/utils/enviornment_data'
import {Carousel, Slide} from "vue-carousel";
import axios from 'axios';
import {mapGetters} from 'vuex';
import * as type from '@/store/type';
import appContest from '@/components/contest/contest';

export default {
  name: "Contest",
  components: {
    Carousel,
    Slide,
    'app-contest': appContest,
  },
  data() {
    return {
      matchDetail: {},
      image_server_base_path: image_server_base_path,
      hours: 0,
      minutes: 0,
      interval: undefined,
      sort_by: 'total_prize',
      contest: [],
      selectedPrizeList: new Map(),
    }
  },
  mounted() {
    this.$nextTick(() => {
      const type = this.matchType === 'football' ? '/football' : '';
      axios.get(type + '/active-contests',
          {
            params: {
              match_id: this.matchId
            }
          }).then(res => {
        if (+res.data.status === 1) {
          this.contest = res.data.data.contests;
        }
      }).catch(err => {
        console.log(err);
      }).then(() => {

      });
      // wait for match list api response using interval and time calculate under interval
      const interval = setInterval(() => {
        this.matchDetail = this.matchDetailByMatchId(this.matchId, this.matchType);
        if (Object.keys(this.matchDetail).length !== 0 && this.matchDetail.constructor === Object) {
          this.setTime(this.getTimeDiff(this.matchDetail.match_time));
          clearInterval(interval);
        }
      }, 2000);
    });
  },
  updated() {
    this.interval = setInterval(() => this.setTime(this.getTimeDiff(this.matchDetail.match_time)), 60000);
    this.setTime(this.getTimeDiff(this.matchDetail.match_time));
  },
  computed: {
    ...mapGetters({matchDetailByMatchId: type.MATCH_BY_MATCH_ID}),
    matchId() {
      return this.$route.params.match_id
    },
    matchType() {
      return this.$route.params.match_type
    },
  },
  methods: {
    sortBy(sort_by) {
      this.sort_by = sort_by;
      this.contest.sort((a, b) => {
        switch (sort_by) {
          case 'entry_fee':
            return +a.entry_amount - +b.entry_amount;
          case 'total_prize':
            return +a.winning_amount - +b.winning_amount;
          default:
            return -1;
        }
      });
      return this.sort_by;
    },
    setTime(minutes_hours) {
      this.minutes = minutes_hours.minutes;
      this.hours = minutes_hours.hours;
    },
    handleSlideClick(dataset) {
      console.log(dataset.index, dataset.name)
    },
    priceListProcess(index) {
      this.selectedPrizeList = new Map();
      const selectedContest = [...this.contest[index].prize];
      selectedContest.sort((prize_a, prize_b) => prize_a.rank - prize_b.rank).forEach(prize => {
        if (this.selectedPrizeList.has(prize.prize_amount)) {
          this.selectedPrizeList.set(prize.prize_amount, [...this.selectedPrizeList.get(prize.prize_amount), prize.rank])
        } else {
          this.selectedPrizeList.set(prize.prize_amount, [prize.rank])
        }
      });
    }
  },
  beforeDestroy() {
    clearInterval(this.interval);
  },
  watch: {}
}
</script>

<style scoped>

</style>
