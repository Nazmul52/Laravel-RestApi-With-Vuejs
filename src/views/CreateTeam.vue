<template>
  <div>
    <div class="main">
      <!--Matches section start-->
      <section class="promo-section vh-100 w-100 position-fixed contest_main_bg">
        <div class="container-fluid text-center h-100">
          <div class="row h-100">
            <div class="col-md-6 p-0 h-100 bg-light">
              <div class="contest_left h-100 team_create_header">
                <app-match-details :matchDetail="getMatchDetailByMatchId"
                                   :totalSelectedCount="totalSelectedPlayerCount"
                                   :playerInTeamACount="playerInTeamACount"
                                   :playerInTeamBCount="playerInTeamBCount"
                                   :credit="credit"
                                   :hours="hours"
                                   :minutes="minutes"
                ></app-match-details>
                <app-selected-player-count :playerSelected="playerSelected"
                                           :totalSelectedCount="totalSelectedPlayerCount"></app-selected-player-count>
                <app-player-list @totalPlayerSelected="totalPlayerSelected"
                                 @totalCreditSelected="totalCreditSelected"
                                 @playerInTeamCount="playerInTeamCount"
                                 :activeContest="active_contest"
                                 :matchDetail="matchDetail"></app-player-list>
              </div>
            </div>
            <app-team-structure></app-team-structure>
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
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Prize List</h4>
              </div>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 1
                  <span class="badge badge-success badge-pill">10000 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 2
                  <span class="badge badge-success badge-pill">2000 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 3-5
                  <span class="badge badge-success badge-pill">300 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 6-10
                  <span class="badge badge-success badge-pill">40 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 11-13
                  <span class="badge badge-success badge-pill">30 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 30-40
                  <span class="badge badge-success badge-pill">10 BDT</span>
                </li>
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
import * as type from '@/store/type';
import {mapActions} from 'vuex';
import {image_server_base_path} from '@/utils/enviornment_data';
import {mapGetters} from 'vuex';
import SelectedPlayerCount from '@/components/team/SelectedPlayerCount';
import PlayerList from '@/components/team/PlayerList';
import MatchDetails from '@/components/team/MatchDetails';
import TeamStructure from '@/components/team/TeamStructure';

export default {
  name: "CreateTeam",
  data() {
    return {
      active_contest: {},
      matchDetail: {},
      image_server_base_path: image_server_base_path,
      hours: 0,
      minutes: 0,
      interval: undefined,
      playerSelected: 0,
      totalSelectedPlayerCount: 0,
      credit: 0,
      playerInTeamACount: 0,
      playerInTeamBCount: 0,
    }
  },
  components: {
    'appSelectedPlayerCount': SelectedPlayerCount,
    'appPlayerList': PlayerList,
    'appMatchDetails': MatchDetails,
    'appTeamStructure': TeamStructure,
  },
  computed: {
    ...mapGetters({
      matchDetailByMatchId: type.MATCH_BY_MATCH_ID,
      getActiveContest: type.ACTIVE_CONTEST_BY_MATCH_ID_GETTER,
    }),
    matchId() {
      return this.$route.params.match_id;
    },
    matchType() {
      return this.$route.params.match_type
    },
    getMatchDetailByMatchId() {
      return this.matchDetailByMatchId(this.matchId, this.matchType);
    }
  },
  methods: {
    ...(mapActions({fetchActiveContest: type.ACTIVE_CONTEST_BY_MATCH_ID_ACTION})),
    setTime(minutes_hours) {
      this.minutes = minutes_hours.minutes;
      this.hours = minutes_hours.hours;
    },
    // eslint-disable-next-line no-unused-vars
    selectedPlayer(spList) {
    },
    totalPlayerSelected(count) {
      this.totalSelectedPlayerCount = count || 0;
    },
    totalCreditSelected(credit) {
      this.credit = credit;
    },
    playerInTeamCount({a, b}) {
      this.playerInTeamACount = a;
      this.playerInTeamBCount = b;

    }
  },
  mounted() {
    setTimeout(() => {
      this.fetchActiveContest({match_id: this.matchId});
      console.log(this.getMatchDetailByMatchId);
      this.matchDetail = this.getMatchDetailByMatchId;
      const interval = setInterval(() => {
        if (this.matchDetail && this.matchDetail.constructor === Object && Object.keys(this.matchDetail).length !== 0) {
          this.setTime(this.getTimeDiff(this.matchDetail.match_time || new Date()));
          clearInterval(interval);
        }
      }, 2000);
    }, 5000);
  },
  watch: {
    // eslint-disable-next-line no-unused-vars
    getActiveContest(nv, ov) {
      this.active_contest = nv || {};
    },
    // eslint-disable-next-line no-unused-vars
  },
  updated() {
    this.interval = setInterval(() => this.setTime(this.getTimeDiff(this.matchDetail.match_time)), 60000);
    this.setTime(this.getTimeDiff(this.matchDetail.match_time));
  },
}
</script>

<style scoped>

</style>
