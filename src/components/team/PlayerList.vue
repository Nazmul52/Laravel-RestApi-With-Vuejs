<template>
  <div class="bg-light h-100">
    <div class="d-flex justify-content-between">
      <ul class="d-flex nav nav-pills w-100">
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='keeper'?'active':'')" href="javascript:void(0)"
             @click="playerType('keeper')">WK ({{ keeperCount }})</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='batsman'?'active':'')" href="javascript:void(0)"
             @click="playerType('batsman')">BAT ({{ batsmanCount }})</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='allrounder'?'active':'')" href="javascript:void(0)"
             @click="playerType('allrounder')">AR ({{ allrounderCount }})</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='bowler'?'active':'')" href="javascript:void(0)"
             @click="playerType('bowler')">BOWL ({{ bowlerCount }})</a>
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
                      <p class="text-danger mb-0 d-block">
                        {{
                          player.team_belong === 1 ? (activeContest && activeContest.a ? activeContest.a.team_key : '') : (activeContest && activeContest.b ? activeContest.a.team_key : '')
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
                      <i class="far fa-minus-square text-danger" v-if="player.isSeleted"></i>
                      <i class="far fa-plus-square text-success" v-if="!player.isSeleted"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="team_create_btn position-absolute">
              <button id="create_team_btn" class="btn btn-success border-radius mt-4 mb-2"
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
import * as type from '@/store/type';

export default {
  name: "PlayerList",
  data() {
    return {
      pType: 'keeper',
      pTypeTitle: 'Wicket-Keepers',
      imagePath: image_server_base_path,
      sort_by: undefined,
      orderBYASC: true,
      selectedTeamData: [],
      count: 0,
      credit: 0,
      MAXIMUM_NUM_PLAYERS: 11,
      MAXIMUM_CREDIT: 100.0,
      MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM: 7,
      need_3_batsman: 'You need at least 3 Batsmen',
      need_1_wk: "You need at least 1 Wicketkeep",
      need_1_all_rounder: "You need at least 1 All-Rounder",
      need_3_bowlers: "You need at least 3 bowlers",
      squad_cannot_cross_max_players: "Your squad can not cross 11 players",
      total_credit_value_greater_100: "Total credit value can not be greater than 100",
      not_more_than_7_players_from_any_team: "Not more than 7 players from any team",
      not_more_than_1_wicket_keeper: 'Not more than 1 wicket keeper',
      not_more_than_5_batsmen: 'Not more than 5 batsmen',
      not_more_than_3_allrounders: 'Not more than 3 allrounders',
      not_more_than_5_bowlers: 'Not more than 5 bowlers',
    }
  },
  props: {
    activeContest: {
      type: Object,
      required: true,
      default: function () {
        return {};
      }
    },
    matchDetail: {
      type: Object,
      required: true,
      default: function () {
        return {};
      }
    },
  },
  methods: {
    ...mapMutations({setSelectedPlayerForTeam: type.SELECTED_TEAM_CRICKET_SETTER}),
    continueForTeamConfirm() {
      this.$router.push({path: '/create-team/cricket/' + this.matchDetail.match_id})
    },
    playerType(type) {
      this.pType = type;
      switch (type) {
        case 'keeper':
          this.pTypeTitle = 'Wicket-Keepers';
          break;
        case 'batsman':
          this.pTypeTitle = 'Batsmans';
          break;
        case 'bowler':
          this.pTypeTitle = 'Bowlers';
          break;
        case 'allrounder':
          this.pTypeTitle = 'All-Rounders';
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
      if (player)
        this.selectedTeamData[this.pType].push(player);
      /*

            const response = {status: 'success', message: []};
            if (this.max_per_match < this.selectedTeamData[this.pType].length) {
              response.status = 'fail';
              response.message.push('You cannot take more than ' + this.max_per_match + ' ' + this.pType);
            }
            if (this.playerInTeamACount > 6 || this.playerInTeamBCount > 6) {  //max 7 player can select from a team
              response.status = 'fail';
              response.message.push('You cannot take more than 7 players from a team');
            }
            if (this.totalSelectedPlayer > 11) {
              response.status = 'fail';
              if (this.totalSelectedPlayer > 11)
                response.message.push('You cannot take more than ' + 11);
              const min_per_match_Keeper = this.activeContest['team_rules']['keeper']['min_per_match'];
              if (min_per_match_Keeper < this.keeperCount) {
                response.message.push('You cannot take less than ' + min_per_match_Keeper + ' Keeper');
              }
              const min_per_match_batsman = this.activeContest['team_rules']['batsman']['min_per_match'];
              if (min_per_match_batsman < this.batsmanCount) {
                response.message.push('You cannot take less than ' + min_per_match_batsman + ' batsman');
              }
              const min_per_match_allrounder = this.activeContest['team_rules']['allrounder']['min_per_match'];
              if (min_per_match_allrounder < this.allrounderCount) {
                response.message.push('You cannot take less than ' + min_per_match_allrounder + ' allrounder');
              }
              const min_per_match_bowler = this.activeContest['team_rules']['bowler']['min_per_match'];
              if (min_per_match_bowler < this.bowlerCount) {
                response.message.push('You cannot take less than ' + min_per_match_bowler + ' bowler');
              }
            }
            let creditCount = 0;
            this.activeContest.players.forEach(player => {
              creditCount += player.isSeleted ? player.credit_points : 0;
            });
            if (creditCount > 100) {
              response.status = 'fail';
              response.message.push('You cannot use more than ' + 100 + ' for build a team');
            }
      */
      if (this.checkAllCategoryForMinimumRequiredPlayer()) {

        if (this.batsmanCount < this.min_per_match('batsman')) {
          alert(this.need_3_batsman);
        } else if (this.keeperCount < this.min_per_match('keeper')) {
          alert(this.need_1_wk);
        } else if (this.allrounderCount < this.min_per_match('allrounder')) {
          alert(this.need_1_all_rounder);
        } else if (this.bowlerCount < this.min_per_match('bowler')) {
          alert(this.need_3_bowlers);
        }
        return false;
      }

      let creditCount = 0;
      this.activeContest.players.forEach(player => {
        creditCount += player.isSeleted ? player.credit_points : 0;
      });
      if (this.totalSelectedPlayer > this.MAXIMUM_NUM_PLAYERS) {
        alert(this.squad_cannot_cross_max_players);
        return false;
      }

      if (creditCount > this.MAXIMUM_CREDIT) {
        alert(this.total_credit_value_greater_100);
        return false;
      }
      if (this.playerInTeamACount  > this.MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM) {
        alert(this.not_more_than_7_players_from_any_team);
        return false;
      }

      if (this.playerInTeamBCount > this.MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM) {
        alert(this.not_more_than_7_players_from_any_team);
        return false;
      }
      if (this.keeperCount > this.max_per_match('keeper')) {
        alert(this.not_more_than_1_wicket_keeper);
        return false;
      }


      if (this.batsmanCount > this.max_per_match('batsman')) {
        alert(`Not more than ${this.max_per_match('batsman')} batsm${this.min_per_match('batsman') > 1 ? 'e' : 'a'}n`);
        return false;
      }


      if (this.allrounderCount > this.max_per_match('allrounder')) {
        alert(this.not_more_than_3_allrounders);
        return false;
      }

      if (this.bowlerCount > this.max_per_match('bowler')) {
        alert(this.not_more_than_5_bowlers);
        return false;
      }
      this.selectedTeamData[this.pType].pop();
      return true;
    },
    checkAllCategoryForMinimumRequiredPlayer() {
      let requiredWk = 0, requiredBat = 0, requiredAllR = 0, requiredBowl = 0,
          totalRequiredRemaining, totalSelectedRemaining;

      if (this.keeperCount < this.min_per_match('keeper'))
        requiredWk = this.min_per_match('keeper') - this.keeperCount;
      if (this.batsmanCount < this.min_per_match('batsman'))
        requiredBat = this.min_per_match('batsman') - this.batsmanCount;
      if (this.allrounderCount < this.min_per_match('allrounder'))
        requiredAllR = this.min_per_match('allrounder') - this.allrounderCount;
      if (this.bowlerCount < this.min_per_match('bowler'))
        requiredBowl = this.min_per_match('bowler') - this.bowlerCount;

      totalRequiredRemaining = requiredWk + requiredBat + requiredAllR + requiredBowl;
      totalSelectedRemaining = this.MAXIMUM_NUM_PLAYERS - (this.allrounderCount + this.bowlerCount + this.keeperCount + this.batsmanCount);

      if (totalRequiredRemaining === 0 && totalSelectedRemaining === 0)
        return false;

      if (totalRequiredRemaining >= totalSelectedRemaining) {

        // if (playerCat.equalsIgnoreCase(PLAYER_ROLE_BAT)) {
        //   if (fantasyTeamSelect.playerTypeCounterBat < this.batsmanCount)
        //     return false;
        // }

        return true;
      }
      return false;
    },
    playerSelect(player = {}) {
      console.log(player);
      this.activeContest.players = this.activeContest.players.map(player1 => {
        if (player.player_key === player1.player_key) {
          player1.isSeleted = !player1.isSeleted;
          if (player1.isSeleted) {
            const response_of_rule = this.teamRules(player);
            if (!response_of_rule) {
              this.selectedTeamData[this.pType] = [...this.selectedTeamData[this.pType].filter(player1 => player1.player_key !== player.player_key)]
              player1.isSeleted = !player1.isSeleted;
            } else {
              this.selectedTeamData[this.pType].push(player);
            }
          } else {
            this.selectedTeamData[this.pType] = [...this.selectedTeamData[this.pType].filter(player1 => player1.player_key !== player.player_key)]
          }
        }
        return player1;
      });
      this.count = 0;
      try {
        if (this.playerInTeamACount  > this.MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM) {
          alert(this.not_more_than_7_players_from_any_team);
          return false;
        }

        if (this.playerInTeamBCount > this.MAXIMUM_NUM_PLAYER_FOR_INDIVIDUAL_TEAM) {
          alert(this.not_more_than_7_players_from_any_team);
          return false;
        }
        this.count = this.activeContest.players.filter(player => player.isSeleted).length || 0;
      } catch (e) {
        this.count = 0;
      }
      try {
        this.credit = 0;
        this.activeContest.players.forEach(player => {
          if (player.isSeleted) {
            this.credit += player.credit_points;
          }
        });
        // eslint-disable-next-line no-empty
      } catch (e) {

      }
      this.$emit('totalPlayerSelected', this.count);
      this.$emit('totalCreditSelected', this.credit);
      this.$emit('playerInTeamCount', {a: this.playerInTeamACount, b: this.playerInTeamBCount});
      this.setSelectedPlayerForTeam(this.selectedTeamData);
    },
  },
  computed: {
    ...mapGetters({getSelectedPlayerForTeam: type.SELECTED_TEAM_CRICKET_GETTER}),
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
    keeperCount() {
      try {
        return this.selectedTeamData['keeper'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    batsmanCount() {
      try {
        return this.selectedTeamData['batsman'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    allrounderCount() {
      try {
        return this.selectedTeamData['allrounder'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    bowlerCount() {
      try {
        return this.selectedTeamData['bowler'].length || 0;
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    totalSelectedPlayer() {
      let count = 0;
      try {
        count = this.activeContest.players.filter(player => player.isSeleted).length || 0;
      } catch (e) {
        count = 0;
      }
      this.$emit('totalPlayerSelected', count)
      return count;
    },
    playerInTeamACount() {
      try {
        return this.activeContest.players.filter(player => player.isSeleted && player.team_belong === 1).length || 0
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    playerInTeamBCount() {
      try {
        return this.activeContest.players.filter(player => player.isSeleted && player.team_belong === 2).length || 0
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    }

  },
  watch: {
    // eslint-disable-next-line no-unused-vars
    getSelectedPlayerForTeam(nv, ov) {
      console.log(nv);
      this.selectedTeamData = nv;

    }
  },
  mounted() {
    this.selectedTeamData = {...this.getSelectedPlayerForTeam} || {}
  },
}
</script>

<style scoped>

</style>
