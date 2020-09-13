<template>
  <div :class="getClasses()">
    <div class="card-body px-0">
      <router-link :to="{name:'Contest'}">
        <a href="javascript:void(0)">
          <div class="d-flex justify-content-between px-3">
            <div class="matche_vs">
              <p>{{ matchDetail.match_name }}</p>
            </div>
            <div class="matche_type">
              <p class="text-success font-weight-bold">{{ matchDetail.format }}</p>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="matche_vs_left">
              <p v-if="matchDetail.teams[0]">
                <img class="mr-1 match_team_image" :src="image_server_base_path+matchDetail.teams[0].logo" alt="">
                {{ matchDetail.teams[0].code || matchDetail.teams[0].team_key }}
              </p>
            </div>
            <div class="matche_time">
              <p class="text-danger font-weight-bold">{{ hours }}h {{ minutes }}m left</p>
            </div>
            <div class="matche_vs_right">
              <p v-if="matchDetail.teams[1]">
                {{ matchDetail.teams[1].code || matchDetail.teams[1].team_key }} <img class="ml-1 match_team_image"
                                                                                      :src="image_server_base_path+matchDetail.teams[1].logo"
                                                                                      alt="">
              </p>
            </div>
          </div>
          <div class="d-flex justify-content-start px-3">
            <div class="matche_contest_count">
              <p class="text-warning mb-0">Total Contest: {{ matchDetail.contest_count }}</p>
            </div>
          </div>
        </a>
      </router-link>
    </div>
  </div>
</template>

<script>
import {image_server_base_path} from '@/utils/enviornment_data'

export default {
  name: "MatchComponent",
  props: {
    rootClass: {
      type: Object,
      default: () => {
        return {};
      },
    },
    matchDetail: {
      type: Object,
      default() {
        return {
          contest_count: Number,
          format: String,
          is_calculation_complete: Number,
          is_published: Number,
          join_ends_before: Number,
          match_id: Number,
          match_key: String,
          match_name: String,
          match_time: String,
          teams: {
            type: Array,
            steps: {
              type: Object,
              default() {
                return {
                  logo: String,
                  name: String,
                  team_id: Number,
                  team_key: String,
                }
              }
            }
          },
          tournament_id: Number,
          tournament_name: String,
        }
      },
      require: true,
    }
  },
  data() {
    return {
      image_server_base_path: image_server_base_path,
      hours: 0,
      minutes: 0,
      interval: undefined,
    }
  },
  methods: {
    getClasses() {
      return {
        ...this.rootClass,
        card: true,
      }
    }
  },
  mounted() {
    this.interval = setInterval(() => {
      const time_in_mile_second = new Date(this.matchDetail.match_time) - new Date();
      const time_in_minutes = time_in_mile_second / 1000;
      this.minutes = Math.max(0, Math.round(time_in_minutes % 60));
      this.hours = Math.max(0, Math.round(time_in_minutes / 60));
    }, 60000);
  },
  beforeDestroy() {
    localStorage.setItem('s_m', JSON.stringify(this.matchDetail));
    clearInterval(this.interval);
  }

}
</script>

<style scoped>

</style>
