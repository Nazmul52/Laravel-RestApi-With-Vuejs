<template>
  <div>

    <div class="main">

      <!--Matches section start-->
      <section class="promo-section vh-100 w-100 position-fixed contest_main_bg">
        <div class="container-fluid text-center h-100">
          <div class="row h-100">
            <div class="col-md-6 p-0 h-100 bg-light">
              <div class="contest_left h-100 team_create_header">
                <div class="bg-dark px-4 pt-3 pb-2">
                  <div class="d-flex justify-content-between pb-2">
                    <div class="go_back">
                      <a href="#"> <i class="fas fa-arrow-left"></i> </a>
                    </div>
                    <div class="contest_each_title">
                      <h5 class="text-danger mb-0">9h 43m left</h5>
                    </div>
                    <div class="go_back"><i class="fas fa-info-circle text-white ml-3" data-toggle="tooltip"
                                            data-placement="top" title="Tooltip on top"></i></div>
                  </div>
                  <div class="d-flex justify-content-between pb-4">
                    <div class="go_back">
                      <img src="@/assets/logo.png" width="28" alt=""/>
                    </div>
                    <div class="contest_each_title">
                      <h5 class="text-white mb-0">Choose Captain (C) & Vice Captain (VC)</h5>
                      <p class="text-white mb-0">Your Captain gets 2x points & Vice Captain gets 1.5x points</p>
                    </div>
                    <div class="go_back">

                    </div>
                  </div>
                </div>
                <div class="bg-light h-100">
                  <div class="overflow-auto h-75">
                    <div class="card-body green-bg text-left p-0">
                      <div class="tab-content" id="pills-tabContent">
                        <div class="form-group enter-team-name-fields p-3 mb-0">
                          <input type="text" class="form-control" v-model="team_search_key"
                                 placeholder="Enter Team Name">
                        </div>
                        <div class="create_team_each create_team_each_header save_team_each  pl-3">
                          <div class="player_thumb">

                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="text-uppercase text-muted pb-2">
                                Players
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <a href="javascript:void(0)" @click="sort_by_credit_asc=!sort_by_credit_asc"
                                 class="text-uppercase text-muted mb-0 pb-2">
                                Credits
                                <i class="ti-arrow-down"></i>
                              </a>
                            </div>
                            <div class="player_add_remove">
                              <div class="text-uppercase text-muted pb-2">
                                C/CV
                              </div>
                            </div>
                          </div>
                        </div>
                        <template v-for="player of getActiveContestThatSelected">
                          <div
                              :class="'create_team_each save_team_each'+ player.isCaptain || player.isViceCaptain?' selected pl-3 mt-3':''"
                              :key="player.player_key"
                              v-if="player.isSelected">
                            <div class="player_thumb">
                              <img class="" :src="encodeURI(imagePath+player.player_image)" width="64" alt="">
                            </div>
                            <div class="player_buy_info">
                              <div class="player_name_each">
                                <div class="">
                                  <p class="mb-0 d-block font-weight-bold">{{ player.name }}</p>
                                  <p class="text-danger mb-0 d-block text-uppercase">{{ teamKey(player.team_belong) }} |
                                    <span
                                        class="text-uppercase text-muted text-capitalize">{{ player.role }}</span></p>
                                </div>
                              </div>
                              <div class="player_selby player_credits">
                                <p class="mb-0">{{ player.selected_percentage }}%</p>
                              </div>
                              <div class="player_add_remove">
                                <div class="align-self-center captain_vice_captain">
                                  <a href="javascript:void(0)" :class="player.isCaptain?'captain-selected':''"
                                     @click="captainOrViceCaptain(player.player_key,'c')">
                                    C
                                  </a>
                                  <a href="javascript:void(0)" :class="player.isViceCaptain?'vicecaptain-selected':''"
                                     @click="captainOrViceCaptain(player.player_key,'vc')">
                                    VC
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </template>
                        <div class="team_create_btn position-absolute">
                          <button v-on:click="saveTeam" id="save_team_btn" class="btn btn-success border-radius mt-4 mb-2" >Save
                            Team
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 field_map h-100">
              <div class="players_position">
                <div class="">
                  <div class="players_space_around">
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">Wicket Keepers</div>
                      <div class="players_position_align wicket_keepers">
                        <div class="players_position_align" v-for="player of getSelectedPlayerForTeam['keeper']"
                             :key="player.player_key">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">{{ player.name }}</div>
                            </div>
                            <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">Batsman</div>
                      <div class="players_position_align batsman_keepers">
                        <div class="players_position_align" v-for="player of getSelectedPlayerForTeam['batsman']"
                             :key="player.player_key">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">{{ player.name }}</div>
                            </div>
                            <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">All Rounders</div>
                      <div class="players_position_align batsman_keepers">
                        <div class="players_position_align" v-for="player of getSelectedPlayerForTeam['allrounder']"
                             :key="player.player_key">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">{{ player.name }}</div>
                            </div>
                            <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">Bowlers</div>
                      <div class="players_position_align batsman_keepers">
                        <div class="players_position_align" v-for="player of getSelectedPlayerForTeam['bowler']"
                             :key="player.player_key">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">{{ player.name }}</div>
                            </div>
                            <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Matches section end-->
    </div>
  </div>
</template>

<script>
import {image_server_base_path} from '@/utils/enviornment_data';
import {mapGetters, mapMutations} from 'vuex';
import * as type from '@/store/type';
import auth_axios from '@/http/axios/http-auth';

export default {
  name: "ConfirmTeam",
  data() {
    return {
      imagePath: image_server_base_path,
      selectedTeamData: [],
      activeContest: [],
      team_search_key: '',
      sort_by_credit_asc: true,

    }
  },
  methods: {
    ...mapMutations({
      setSelectedPlayerForTeam: type.SELECTED_TEAM_CRICKET_SETTER,
      setActiveContestByMatchIdMutation: type.ACTIVE_CONTEST_BY_MATCH_ID_MUTATION
    }),
    teamKey(team_belong) {
      return team_belong === 1 ? this.activeContest.teams.a.team_key : this.activeContest.teams.b.team_key;
    },
    captainOrViceCaptain(player_key, captain_type) {
      this.activeContest.players.map(player => {
        if (captain_type === 'c' && player.player_key === player_key) {
          player.isCaptain = !player.isCaptain;

          // console.log(player.isCaptain);
        }
        if (captain_type === 'vc' && player.player_key === player_key) {
          player.isViceCaptain = !player.isViceCaptain;
        }
        return player.isViceCaptain;
      });

      console.log(this.activeContest);
      this.setActiveContestByMatchIdMutation(this.activeContest);
      this.$store.state.Contest.selectedTeam.team_name = 'Nazmul Team';
      this.$store.state.Contest.selectedTeam.match_id = '1196';
      console.log(this.$store.state.Contest.selectedTeam);
     
     
    },

    saveTeam(){
        auth_axios.post('user-team/create', this.getSelectedPlayerForTeam).then((res) => {
            console.log(res);
        }).catch(error => {
            console.log(error);
        })
        // console.log(this.getSelectedPlayerForTeam);

    }
  },
  computed: {
    ...mapGetters({
      getSelectedPlayerForTeam: type.SELECTED_TEAM_CRICKET_GETTER,
      getActiveContest: type.ACTIVE_CONTEST_BY_MATCH_ID_GETTER
    }),
    getActiveContestThatSelected() {
      let team = 0;
      if (this.team_search_key &&
          this.activeContest &&
          this.activeContest.teams &&
          this.activeContest.teams.a &&
          this.activeContest.teams.a.team_key &&
          this.activeContest.teams.a.team_key.includes(this.team_search_key.toLowerCase())) {
        team = 1;
      }
      if (this.team_search_key &&
          this.activeContest &&
          this.activeContest.teams &&
          this.activeContest.teams.b &&
          this.activeContest.teams.b.team_key &&
          this.activeContest.teams.b.team_key.includes(this.team_search_key.toLowerCase())) {
        team = 2;
      }
      return this.activeContest.players ? this.activeContest.players.filter(el => {
        if (team !== 0) {
          return el.isSelected && el.team_belong === team;
        }
        return el.isSelected;
      }).sort((player1, player2) => this.sort_by_credit_asc ? -1 * (player1.credit_points - player2.credit_points) : (player1.credit_points - player2.credit_points)) : [];
    },
    numberOfCaptain() {
      try {
        return this.activeContest.players.filter(el => el.isCaptain).length;
      } catch (e) {
        return 0;
      }
    },
    numberOfViseCaptain() {
      try {
        return this.activeContest.players.filter(el => el.isViceCaptain).length;
      } catch (e) {
        return 0;
      }
    }
  },
  mounted() {
    this.selectedTeamData = {...this.getSelectedPlayerForTeam} || {};
    this.activeContest = {...this.getActiveContest} || {};
  },
  watch: {
    // eslint-disable-next-line no-unused-vars
    getSelectedPlayerForTeam(nv, ov) {
      this.selectedTeamData = nv;

    },
    // eslint-disable-next-line no-unused-vars
    getActiveContest(nv, ov) {
      this.activeContest = nv || {};
    },
  },
}
</script>

<style scoped>

</style>
