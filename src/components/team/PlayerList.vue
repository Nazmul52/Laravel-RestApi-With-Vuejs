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
          <a :class="'nav-link rounded-0 '+(pType==='bowler'?'active':'')" href="javascript:void(0)"
             @click="playerType('bowler')">AR (2)</a>
        </li>
        <li class="nav-item col p-0">
          <a :class="'nav-link rounded-0 '+(pType==='allrounder'?'active':'')" href="javascript:void(0)"
             @click="playerType('allrounder')">BOWL (2)</a>
        </li>
      </ul>
    </div>
    <div class="overflow-auto h-75">
      <div class="card-body green-bg text-left p-0 mb-4">
        <div class="tab-content">
          <div class="tab-pane fade show active">
            <div class="alert alert-primary rounded-0 text-center border-0" role="alert">
              Pick 1-4 Wicket-Keepers
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
                  <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                </div>
                <div class="player_buy_info">
                  <div class="player_name_each">
                    <div class="">
                      <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                      <p class="text-danger mb-0 d-block">ZIM</p>
                    </div>
                  </div>
                  <div class="player_selby">
                    <p class="mb-0">32/2%</p>
                  </div>
                  <div class="player_selby player_credits">
                    <p class="mb-0">32/2%</p>
                  </div>
                  <div class="player_add_remove">
                    <div class="align-self-center">
                      <i class="far fa-plus-square text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--            <div class="create_team_each selected pl-3 mt-3">-->
            <!--              <div class="player_thumb">-->
            <!--                <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">-->
            <!--              </div>-->
            <!--              <div class="player_buy_info">-->
            <!--                <div class="player_name_each">-->
            <!--                  <div class="">-->
            <!--                    <p class="mb-0 d-block font-weight-bold">B Taylor</p>-->
            <!--                    <p class="text-danger mb-0 d-block">ZIM</p>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--                <div class="player_selby">-->
            <!--                  <p class="mb-0">32/2%</p>-->
            <!--                </div>-->
            <!--                <div class="player_selby player_credits">-->
            <!--                  <p class="mb-0">32/2%</p>-->
            <!--                </div>-->
            <!--                <div class="player_add_remove">-->
            <!--                  <div class="align-self-center">-->
            <!--                    <a href="#">-->
            <!--                      <i class="far fa-minus-square text-danger"></i>-->
            <!--                    </a>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--              </div>-->
            <!--            </div>-->
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
export default {
  name: "PlayerList",
  data() {
    return {
      pType: 'keeper',
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
    playerType(type) {
      this.pType = type;
      switch (type) {
        case 'keeper':
          break;
        case 'batsman':
          break;
        case 'bowler':
          break;
        case 'allrounder':
          break;
        default:

      }
    },
    sortBy(by) {
      switch (by) {
        case 'credits':
          break;
      }
    }
  },
  computed: {
    selectedPLayerList() {
      return this.activeContest.players.filter(player => player.role === this.pType);
    }
  },
}
</script>

<style scoped>

</style>
