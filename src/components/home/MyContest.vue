<template>
  <div>
    <section class="promo-section pb-5 pt-5">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>My Contests</h2>
              <p>Uniquely repurpose strategic core competencies with progressive content.<br>Assertively transition
                ethical imperatives and collaborative manufactured products. </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="form-group col-md-3">
            <select class="form-control" name="">
              <option value="">All Series</option>
              <option value="">Bangladesh Series</option>
              <option value="">India Series</option>
              <option value="">South Africa Series</option>
              <option value="">Afganistan Series</option>
              <option value="">Zimbabwe Series</option>
            </select>
          </div>
        </div>
      </div>
    </section>
    <section class="promo-section pb-60">
      <div class="container">
        <div class="col-md-8 mx-auto">
          <div class="row justify-content-between mb-4">
            <div class="col-md-6 shorting_left">
              <span class="font-weight-bold d-inline-block mr-2">Short By :</span>
              <div class="btn-group btn-group-toggle text-uppercase" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-success">
                  <input type="radio" name="options" id="option1" checked=""> Total Prize
                </label>
                <label class="btn btn-sm btn-outline-success active">
                  <input type="radio" name="options" id="option2"> Entry Fee
                </label>
              </div>
            </div>
            <div class="col-md-6 shorting_right text-right">
              <button type="button" :class="'btn btn-sm btn-outline-warning'+(contestType==='completed'?' active':'')"
                      @click="getContests('completed')">Completed
              </button>
              <button type="button" :class="'btn btn-sm btn-outline-secondary'+(contestType==='upcoming'?' active':'')"
                      @click="getContests('upcoming')">Upcoming
              </button>
              <button type="button" :class="'btn btn-sm btn-outline-secondary'+(contestType==='live'?' active':'')"
                      @click="getContests('live')">Live
              </button>
            </div>
          </div>
          <hr>
        </div>
      </div>
      <div class="container text-center">
        <div class="col-md-8 mx-auto">
          <div class="accordion" v-for="con of contest" :key="con.match_key">
            <div class="row justify-content-md-center justify-content-sm-center matche_each matche_each_big">
              <!--              format: "t20"-->
              <!--              join_ends_before: 1-->
              <!--              match_id: 763-->
              <!--              match_key: "c.match.hkg_vs_uae.73503"-->
              <!--              match_name: "United Arab Emirates vs Hong Kong"-->
              <!--              match_time: "2019-10-21 16:10:00"-->
              <!--              teams: Array(2)-->
              <!--              0:-->
              <!--              logo: null-->
              <!--              name: "United Arab Emirates"-->
              <!--              team_id: 77-->
              <!--              team_key: "UAE"-->
              <div class="col-lg-12">
                <div class="card">
                  <a :class="match_id !== con.match_id?'collapsed':''" href="javascript:void(0)"
                     @click="expandTheMatch(con.match_id)">
                    <div class="card-body px-0">
                      <div class="d-flex justify-content-between px-3">
                        <div class="matche_vs">
                          <p>{{ con.match_name }}</p>
                        </div>
                        <div class="matche_type">
                          <p class="text-success font-weight-bold">{{ con.format }}</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="matche_vs_left">
                          <p>
                            <img class="mr-1" width="154" :src="file_path+con.teams[0].logo" alt=""> {{ con.teams[0].team_key }}
                          </p>
                        </div>
                        <div class="matche_time">
                          <p class="text-danger font-weight-bold" >{{ getMatchTime(con.match_time)}}</p>
                       <!--    <p class="text-danger font-weight-bold">{{ hours }}h {{ minutes }}m left</p> -->
                        </div>
                        <div class="matche_vs_right">
                          <p>
                            {{ con.teams[1].team_key }} <img class="ml-1" :src="file_path+con.teams[0].logo" width="154" alt="">
                          </p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-start px-3">
                        <div class="matche_contest_count">
                          <p class="text-warning mb-0">Total Contest:
                            {{ con.total_joined_contests }}</p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div :class="(match_id==con.match_id? 'collapse show':'collapse hide')">
                    <div class="card-body green-bg text-left" v-for="conDetails of contestDetails"
                         :key="'c-d-'+conDetails.id+conDetails.user_team_id">
                      <h3 class="mb-0">{{ conDetails.name }}</h3>
                      <p class="text-muted">{{ conDetails.subtitle }}</p>
                      <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
                        <div class="d-flex justify-content-between px-3">
                          <div class="text-left" v-if="conDetails.winning_amount !== 'paid'">
                            <span>Total Prize</span>
                            <h3 class="mb-0">
                              <img class="mb-2" src="@/assets/coin.svg" width="24" alt="">
                              {{
                                conDetails.winning_amount
                              }}</h3>
                          </div>
                          <div class="text-left" v-else>
                            <span>Total Prize</span>
                            <h3 class="mb-0">
                              <img  class="mb-2" src="@/assets/taka.png" width="18" alt="">
                              {{
                                conDetails.winning_amount
                              }}</h3>
                          </div>
                          <div class="text-right">
                            <span class="text-warning">Entry {{ conDetails.entry_amount }}</span>
                            <!--                            <h3 class="mb-0">$5560</h3>-->
                          </div>
                        </div>
                        <div class="progress m-3" v-if="conDetails.is_league===1">
                          <div class="progress-bar bg-warning" role="progressbar"
                               :style="{width: Math.round(100*conDetails.total_user_joined/conDetails.teams_capacity)+'%'}"
                               :aria-valuenow="Math.round(100*conDetails.total_user_joined/conDetails.teams_capacity)"
                               aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mx-3 my-2" v-if="conDetails.is_league===1">
                          <div class="text-left">
                            <span>{{ conDetails.total_user_joined }} Team Joined</span>
                          </div>
                          <div class="text-right">
                            <span class="text-danger">{{ conDetails.teams_capacity - conDetails.total_user_joined }} Spots Left</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between bg-light px-3 py-2">
                          <div class="text-left">
                            <span>Total 100 Winners</span>
                          </div>
                          <div class="text-right">
                            <i class="fas fa-info-circle text-warning ml-3" data-toggle="tooltip" data-placement="top"
                               title="" data-original-title="Tooltip on top"></i>
                            <span class="text-success">Special Offer Available</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" v-if="contest.length===0">There is no contest available</div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import auth_axios from '@/http/axios/http-auth';
import {image_server_base_path} from '@/utils/enviornment_data';

export default {
  name: "MyContest",
  data() {
    return {
      contest: [],
      contestDetails: [],
      contestType: 'completed',
      match_id: null,
      file_path: image_server_base_path,
      hours: 1,
      minutes: 0,
      interval: undefined,
      match_time: ''
    }
  },
  methods: {
      setTime(minutes_hours) {
      this.minutes = minutes_hours.minutes;
      this.hours = minutes_hours.hours;

      return this.hours + 'h ' + this.minutes + 'm' + ' left'
    },
    getMatchTime(time){
      this.match_time = time;
       return this.setTime(this.getTimeDiff(time)); 
    },
    getContests(contestType) {
      this.contestType = contestType;
      auth_axios(`/user/${contestType}-match-contests`).then(res => res.data.data).then(res => {
        this.contest = res;
        // console.log(res);
      });
    },
    getContestDetails(match_id) {
      this.selectedMatch = match_id;
      auth_axios(`/user/match/contests?match_id=${match_id}`).then(res => res.data.data.contests).then(res => {
        this.contestDetails = res;
      });
    },
    expandTheMatch(match_id) {
      // console.log(this.match_id, match_id);
      if (this.match_id === match_id) {
        this.match_id = null;
        this.contestDetails = [];
      } else {
        this.match_id = match_id;
        this.getContestDetails(match_id);
      }
    }
  },
  mounted() {
    this.getContests(this.contestType);
    this.setTime(this.getTimeDiff(this.match_time));
    this.getMatchTime(this.match_time);

  },
  updated() {
    this.interval = setInterval(() => this.setTime(this.getTimeDiff(this.match_time)), 60000);
    this.setTime(this.getTimeDiff(this.match_time));
  },
  beforeDestroy() {
    clearInterval(this.interval);
  }

}
</script>

<style scoped>

</style>
