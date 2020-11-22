<template>
  <div class="bg-light h-100">
    <div class="d-flex justify-content-between">
      <ul class="d-flex nav nav-pills w-100">
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='goalkeeper'?'active':'')" href="javascript:void(0)"
             @click="playerType('goalkeeper')">GK ({{ goalkeeperCount }})</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='defender'?'active':'')" href="javascript:void(0)"
             @click="playerType('defender')">DEF ({{ defenderCount }})</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='midfielder'?'active':'')" href="javascript:void(0)"
             @click="playerType('midfielder')">MID ({{ midfielderCount }})</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='striker'?'active':'')" href="javascript:void(0)"
             @click="playerType('striker')">ST ({{ strikerCount }})</a>
        </li>
      </ul>
    </div>
    <div class="overflow-auto h-75">
      <div class="card-body green-bg text-left p-0 mb-4">
        <div class="tab-content">
          <div class="tab-pane fade show active">
            <div class="alert alert-primary rounded-0 text-center border-0" role="alert">
              Pick {{ min_per_match() }}-{{ max_per_match() }} {{ pTypeTitle }}
            </div>
            <div class="create_team_each create_team_each_header pl-3">
              <div class="player_thumb">

              </div>
              <div class="player_buy_info">
                <div class="player_name_each">
                  <div class="text-uppercase text-muted pb-2">
                    Players
                  </div>
                </div>
                <div class="player_selby">
                  <p class="text-uppercase text-muted mb-0 pb-2">S.By</p>
                </div>
                <div class="player_selby player_credits">
                  <a href="javascript:void(0)" class="text-uppercase text-muted mb-0 pb-2" @click="sortBy('credits')">
                    Credits
                    <i class="ti-arrow-down"></i>
                  </a>
                </div>
                <div class="player_add_remove">

                </div>
              </div>
            </div>
            <div v-for="(player,index) of selectedPLayerList" :key="index">
              <div
                  :class="'create_team_each pl-3 mt-3 '+(index === selectedPLayerList.length-1?'pb-5 ':'') + (player.isSelected?'selected':'')">
                <div class="player_thumb">
                  <img :src="encodeURI(imagePath+player.player_image)" width="60" alt="">
                </div>
                <div class="player_buy_info">
                  <div class="player_name_each">
                    <div class="">
                      <p class="mb-0 d-block font-weight-bold">{{ player.name }}</p>
                      <p class="text-danger mb-0 d-block text-uppercase">
                        {{
                          +player.team_belong === 1 ? (activeContest && activeContest.teams.a ? activeContest.teams.a.team_key : '') : (activeContest && activeContest.teams.b ? activeContest.teams.b.team_key : '')
                        }}</p>
                    </div>
                  </div>
                  <div class="player_selby">
                    <p class="mb-0">{{ player.selected_percentage }}%</p>
                  </div>
                  <div class="player_selby player_credits">
                    <p class="mb-0">{{ player.credit_points }}</p>
                  </div>
                  <div class="player_add_remove" style="cursor: pointer" @click="playerSelect(player)">
                    <div class="align-self-center">
                      <i class="far fa-minus-square text-danger" v-if="player.isSelected"></i>
                      <i class="far fa-plus-square text-success" v-if="!player.isSelected"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="team_create_btn position-absolute">
              <button id="create_football_team_btn" class="btn btn-success border-radius mt-4 mb-2"
                      :disabled="totalSelectedPlayer!==11" @click="continueForTeamConfirm">
                Continue
              </button>
            </div>
          </div>
        </div>
      </div>
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
  </div>
</template>

<script>
import {image_server_base_path} from '@/utils/enviornment_data';
import {mapGetters, mapMutations} from 'vuex';
import Vue from 'vue';
import * as type from '@/store/type';
import Swal from 'sweetalert2';
export default {
  name: "FootballPlayerList",
  data() {
    return {
      pType: 'goalkeeper',
      pTypeTitle: 'Goal-Keeper',
      imagePath: image_server_base_path,
      sort_by: undefined,
      activeContest: [],
      orderBYASC: true,
      selectedTeamData: [],
      count: 0,
      credit: 0,
      MAXIMUM_NUM_PLAYERS: 11,
      MAXIMUM_CREDIT: 100.0,
      MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM: 7,
      need_1_gk: "You need at least 1 Goal-Keeper",
      need_3_defender: "You need at least 3 Defender",
      need_1_striker: "You need at least 1 Striker",
      need_3_midfielder: "You need at least 3 Midfielder",
      squad_cannot_cross_max_players: "Your squad can not cross 11 players",
      total_credit_value_greater_100: "Total credit value can not be greater than 100",
      not_more_than_7_players_from_any_team: "Not more than 7 players from any team",
      not_more_than_1_goal_keeper: 'Not more than 1 goal keeper',
      not_more_than_5_defender: 'Not more than 5 defenders',
      not_more_than_5_midfielder: 'Not more than 5 midfielder',
      not_more_than_3_striker: 'Not more than 3 striker',
    }
  },
  props: {
    matchDetail: {
      type: Object,
      required: true,
      default: function () {
        return {};
      }
    },
  },
  methods: {
    ...mapMutations({
      setSelectedPlayerForTeam: type.SELECTED_TEAM_FOOTBALL_SETTER,
      setActiveContestByMatchIdMutation: type.ACTIVE_CONTEST_FOOTBALL_BY_MATCH_ID_MUTATION
    }),
    continueForTeamConfirm() {
      this.$router.push({path: '/confirm-team/football/' + this.matchDetail.match_id})
    },
    playerType(type) {
      this.pType = type;
      switch (type) {
        case 'goalkeeper':
          this.pTypeTitle = 'Goal-Keeper';
          break;
        case 'defender':
          this.pTypeTitle = 'Defender';
          break;
        case 'midfielder':
          this.pTypeTitle = 'Mid Fielder';
          break;
        case 'striker':
          this.pTypeTitle = 'Striker';
          break;
        default:

      }
    },
    sortBy(by) {
      this.sort_by = by;
      this.orderBYASC = !this.orderBYASC
    },
    min_per_match(pType) {
      try {
        pType = pType ? pType : this.pType;
        return this.activeContest['team_rules'][pType]['min_per_match'];
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    max_per_match(pType) {
      try {
        pType = pType ? pType : this.pType;
        return this.activeContest['team_rules'][pType]['max_per_match'];
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    teamRules(player) {
      if (this.checkAllCategoryForMinimumRequiredPlayer(player)) {
        if (this.goalkeeperCount < this.min_per_match('goalkeeper')) {
          // alert(this.need_3_batsman);
          Swal.fire({
            title: 'Warning!',
            text: this.need_1_gk,
          
          })

        } else if (this.defenderCount < this.min_per_match('defender')) {
          // alert(this.need_1_wk);
          Swal.fire({
            title: 'Warning!',
            text: this.need_3_defender,
          
          })
        } else if (this.midfielderCount < this.min_per_match('midfielder')) {
          // alert(this.need_1_striker);
           Swal.fire({
            title: 'Warning!',
            text: this.need_3_midfielder,
          
          })
        } else if (this.strikerCount < this.min_per_match('striker')) {
             Swal.fire({
            title: 'Warning!',
            text: this.need_1_striker,
          
          })
          // alert(this.need_3_bowlers);
        }
        return false;
      }

      let creditCount = 0;
      this.activeContest.players.forEach(player => {
        creditCount += player.isSelected ? player.credit_points : 0;
      });
      if (this.totalSelectedPlayer > this.MAXIMUM_NUM_PLAYERS) {
        // alert(this.squad_cannot_cross_max_players);
        Swal.fire({
          title: 'Warning!',
          text: this.squad_cannot_cross_max_players,
        
        })
        return false;
      }

      if (creditCount > this.MAXIMUM_CREDIT) {
        // alert(this.total_credit_value_greater_100);
         Swal.fire({
          title: 'Warning!',
          text: this.total_credit_value_greater_100,
        
        })
        return false;
      }
      if (this.playerInTeamACount > this.MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM) {
         Swal.fire({
          title: 'Warning!',
          text: this.not_more_than_7_players_from_any_team,
        
        })
        // alert(this.not_more_than_7_players_from_any_team);
        return false;
      }
      if (this.playerInTeamBCount > this.MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM) {
        // alert(this.not_more_than_7_players_from_any_team);
         Swal.fire({
          title: 'Warning!',
          text: this.not_more_than_7_players_from_any_team,
        
        })
        return false;
      }
      if (this.goalkeeperCount > this.max_per_match('goalkeeper')) {
        // alert(this.not_more_than_1_wicket_keeper);

         Swal.fire({
          title: 'Warning!',
          text: this.not_more_than_1_goal_keeper,
        
        })
        return false;
      }


      if (this.midfielderCount > this.max_per_match('midfielder')) {
        // alert(`Not more than ${this.max_per_match('batsman')} batsm${this.min_per_match('batsman') > 1 ? 'e' : 'a'}n`);
         Swal.fire({
          title: 'Warning!',
          text: this.not_more_than_5_midfielder,
        
        })
        return false;
      }


      if (this.defenderCount > this.max_per_match('defender')) {
        // alert(this.not_more_than_3_allrounders);
        console.log(this.defenderCount);
         Swal.fire({
          title: 'Warning!',
          text: this.not_more_than_5_defender,
        
        })
        return false;
      }

      if (this.strikerCount > this.max_per_match('striker')) {
        // alert(this.not_more_than_5_bowlers);
        Swal.fire({
          title: 'Warning!',
          text: this.not_more_than_3_striker,
        
        })
        return false;
      }
      return true;
    },
    checkAllCategoryForMinimumRequiredPlayer(player) {
      let requiredWk = 0, requiredBat = 0, requiredAllR = 0, requiredBowl = 0,
          totalRequiredRemaining, totalSelectedRemaining;

      if (this.goalkeeperCount < this.min_per_match('goalkeeper'))
        requiredWk = this.min_per_match('goalkeeper') - this.goalkeeperCount;
      if (this.midfielderCount < this.min_per_match('midfielder'))
        requiredBat = this.min_per_match('midfielder') - this.midfielderCount;
      if (this.defenderCount < this.min_per_match('defender'))
        requiredAllR = this.min_per_match('defender') - this.defenderCount;
      if (this.strikerCount < this.min_per_match('striker'))
        requiredBowl = this.min_per_match('striker') - this.strikerCount;

      totalRequiredRemaining = requiredWk + requiredBat + requiredAllR + requiredBowl;
      totalSelectedRemaining = this.MAXIMUM_NUM_PLAYERS - (this.defenderCount + this.strikerCount + this.goalkeeperCount + this.midfielderCount);

      if (totalRequiredRemaining === 0 && totalSelectedRemaining === 0)
        return false;

      if (totalRequiredRemaining >= totalSelectedRemaining) {

        if (player.role === 'goalkeeper') {
          if (this.goalkeeperCount < this.min_per_match('goalkeeper'))
            return false;
        }
        if (player.role === 'midfielder') {
          if (this.midfielderCount < this.min_per_match('midfielder'))
            return false;
        }
        if (player.role === 'defender') {
          if (this.defenderCount < this.min_per_match('defender'))
            return false;
        }
        if (player.role === 'striker') {
          if (this.strikerCount < this.min_per_match('striker'))
            return false;
        }
        return true;
      }
      return false;
    },
    playerSelect(player = {}) {
      this.activeContest.players.forEach((player1, index) => {
        if (player.player_key === player1.player_key) {
          Vue.set(this.activeContest.players, index, {
            ...this.activeContest.players[index],
            isSelected: !this.activeContest.players[index].isSelected
          });
          if (this.activeContest.players[index].isSelected) {
            if (!this.teamRules(player)) {
              this.selectedTeamData[this.pType] = [
                ...this.selectedTeamData[this.pType].filter(player1 => player1.player_key !== player.player_key)
              ];
              Vue.set(this.activeContest.players, index, {
                ...this.activeContest.players[index],
                isSelected: !this.activeContest.players[index].isSelected
              });
            } else {
              this.selectedTeamData[this.pType].push(player);
            }
          } else {
            this.selectedTeamData[this.pType] = [
              ...this.selectedTeamData[this.pType].filter(player1 => player1.player_key !== player.player_key)
            ];
          }
        }
      });
      this.count = 0;
      try {
        this.count = this.activeContest.players.filter(player => player.isSelected).length || 0;
      } catch (e) {
        this.count = 0;
      }
      try {
        this.credit = 0;
        this.activeContest.players.forEach(player => {
          if (player.isSelected) {
            this.credit += player.credit_points;
          }
        });
        // eslint-disable-next-line no-empty
      } catch (e) {
        this.credit = 0;
      }
      this.$emit('totalPlayerSelected', this.count);
      this.$emit('totalCreditSelected', this.credit);
      this.$emit('playerInTeamCount', {a: this.playerInTeamACount, b: this.playerInTeamBCount});
      this.setSelectedPlayerForTeam(this.selectedTeamData);
      this.setActiveContestByMatchIdMutation(this.activeContest);
    },
  },
  computed: {
    ...mapGetters({
      getSelectedPlayerForTeam: type.SELECTED_TEAM_FOOTBALL_GETTER,
      getActiveContest: type.ACTIVE_CONTEST_FOOTBALL_BY_MATCH_ID_GETTER
    }),
    selectedPLayerList() {
      if (this.activeContest && this.activeContest.players) {
        return this.activeContest.players.filter(player => player.role === this.pType).sort((a, b) => {
          if (this.sort_by === 'credits') {
            return this.orderBYASC ? a.credit_points - b.credit_points : b.credit_points - a.credit_points;
          }
          return 0;
        });
      } else {
        return [];
      }
    },
    goalkeeperCount() {
      try {
        return this.selectedTeamData['goalkeeper'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    midfielderCount() {
      try {
        return this.selectedTeamData['midfielder'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    defenderCount() {
      try {
        return this.selectedTeamData['defender'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    strikerCount() {
      try {
        return this.selectedTeamData['striker'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    totalSelectedPlayer() {
      let count = 0;
      try {
        count = this.activeContest.players.filter(player => player.isSelected).length || 0;
      } catch (e) {
        count = 0;
      }
      this.$emit('totalPlayerSelected', count)
      return count;
    },
    playerInTeamACount() {
      try {

        return this.activeContest.players.filter(player => player.isSelected && +player.team_belong === 1).length || 0
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    playerInTeamBCount() {
      try {
        return this.activeContest.players.filter(player => player.isSelected && +player.team_belong === 2).length || 0
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    }

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
  mounted() {
    this.selectedTeamData = {...this.getSelectedPlayerForTeam} || {};
    console.log(this.getActiveContest);
  },
}
</script>

<style scoped>

</style>
