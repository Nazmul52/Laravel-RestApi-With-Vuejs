<template>
  <div class="bg-light h-100">
    <div class="d-flex justify-content-between">
      <ul class="d-flex nav nav-pills w-100">
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='keeper'?'active':'')" href="javascript:void(0)"
             @click="playerType('keeper')">WK (1)</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='batsman'?'active':'')" href="javascript:void(0)"
             @click="playerType('batsman')">BAT (2)</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='allrounder'?'active':'')" href="javascript:void(0)"
             @click="playerType('allrounder')">AR (2)</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='bowler'?'active':'')" href="javascript:void(0)"
             @click="playerType('bowler')">BOWL (2)</a>
        </li>
      </ul>
    </div>
    <div class="overflow-auto h-75">
      <div class="card-body green-bg text-left p-0 mb-4">
        <div class="tab-content">
          <div class="tab-pane fade show active">
            <div class="alert alert-primary rounded-0 text-center border-0" role="alert">
              Pick {{ min_per_match }}-{{ max_per_match }} {{ pTypeTitle }}
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
                  <img :src="imagePath+player.player_image" width="60" alt="">
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
                    <p class="mb-0">32/2%</p>
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
              <button id="create_team_btn" class="btn btn-success border-radius mt-4 mb-2" disabled>
                Continue
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {image_server_base_path} from '@/utils/enviornment_data'
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
    ...mapMutations({setSelectedPlayerForTeam: type.SELECTED_TEAM_SETTER}),
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
    playerSelect(player) {
      this.activeContest.players = this.activeContest.players.map(player1 => {
        if (player.player_key === player1.player_key) {
          player1.isSeleted = !player1.isSeleted;
        }
        return player1;
      });
      let count = 0;
      try {
        count = this.activeContest.players.filter(player => player.isSeleted).length || 0;
      } catch (e) {
        count = 0;
      }
      this.$emit('totalPlayerSelected', count);
    }
  },
  computed: {
    ...mapGetters({getSelectedPlayerForTeam: type.SELECTED_TEAM_GETTER}),
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
    min_per_match() {
      try {
        return this.activeContest['team_rules'][this.pType]['min_per_match'];
        // eslint-disable-next-line no-empty
      } catch (e) {
        return 0;
      }
    },
    max_per_match() {
      try {
        return this.activeContest['team_rules'][this.pType]['max_per_match'];
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
    }
  },
  watch: {
    // eslint-disable-next-line no-unused-vars
    getSelectedPlayerForTeam(nv, ov) {
      console.log(nv,ov);
    }
  },
  mounted() {
  }
}
</script>

<style scoped>

</style>
