<template>
  <div>
    <div class="bg-dark px-4 pt-3 pb-2">
      <div class="d-flex justify-content-between pb-2">
        <div class="go_back">
          <a href="javascript:void(0)" @click="$router.go(-1)"> <i class="fas fa-arrow-left"></i> </a>
        </div>
        <div class="contest_each_title"><h5 class="text-danger mb-0">{{ hours }}h {{ minutes }}m left</h5></div>
        <div class="go_back">
          <i class="fas fa-info-circle text-white ml-3"
             data-toggle="tooltip"
             data-placement="top"
             title="Tooltip on top"></i>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center mt-2">
        <div class="text-left team_create_header_left" v-if="matchDetail.teams">
          <img src="@/assets/logo.png" width="28" alt=""/>
          <p class="mb-0 mt-2">Players</p>
          <h5 class="mb-0 mt-1"><span>{{ totalSelectedCount }}</span>/11</h5>
        </div>
        <div class="w-50 team_create_header_center" v-if="matchDetail">
          <h6 class="text-white mb-3">Max 7 players from a team</h6>
          <div class="d-flex justify-content-between mt-3">
            <div class="matche_vs_left pl-0">
              <p class="mb-0 d-inline-block" v-if="matchDetail.teams"><img class="d-block mr-1" :src="imagePath+matchDetail.teams[0].logo" alt=""/></p>
              <p class="mb-0 text-white text-left font-weight-bold d-inline-block" v-if="matchDetail.teams">{{ matchDetail.teams[0].code }} <span
                  class="d-block">{{ playerInTeamACount }}</span></p>
            </div>
            <div class="matche_vs_right pr-0">
              <p class="mb-0 text-white text-left font-weight-bold d-inline-block" v-if="matchDetail.teams">{{ matchDetail.teams[1].code }} <span
                  class="d-block">{{ playerInTeamBCount }}</span>
              </p>
              <p class="mb-0 text-white font-weight-bold d-inline-block" v-if="matchDetail.teams">
                <img class="d-block ml-1"
                     :src="imagePath+matchDetail.teams[1].logo"
                     alt=""/>
              </p>
            </div>
          </div>
        </div>
        <div class="text-right team_create_header_right">
          <img src="@/assets/logo.png" width="28" style="opacity: 0;"/>
          <p class="mb-0 mt-2">Credits</p>
          <h5 class="mb-0 mt-1">{{ 100 - credit }}</h5>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {image_server_base_path} from '@/utils/enviornment_data';

export default {
  name: "MatchDetails",
  data() {
    return {
      imagePath: image_server_base_path,
    }
  },
  props: {
    totalSelectedCount: {
      type: Number,
      default: () => 0,
      required: true,
    },
    credit: {
      type: Number,
      default: () => 0,
      required: true
    },
    playerInTeamACount: {
      type: Number,
      default: () => 0,
      required: true,
    },
    playerInTeamBCount: {
      type: Number,
      default: () => 0,
      required: true,
    },
    matchDetail: {
      type: Object,
      required: false,
      default: () => {
        return {}
      }
    },
    hours: {
      type: Number,
      required: true,
      default: () => 0,
    },
    minutes: {
      type: Number,
      required: true,
      default: () => 0,
    }
  },
  mounted() {
    console.log(this.matchDetail);
  }
}
</script>

<style scoped>

</style>
