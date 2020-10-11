<template>
  <section class="promo-section pb-5 pt-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 class="text-uppercase">Upcoming Matches</h2>
            <p>Uniquely repurpose strategic core competencies with progressive content.<br>Assertively
              transition ethical imperatives and collaborative manufactured products. </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center my-4">
        <div class="matches_tab text-center col-md-4">
          <ul class="nav nav-pills justify-content-center">
            <li class="nav-item" @click="updateMatchType('cricket')">
              <a :class="getMatchType==='cricket'?'nav-link active btn btn-brand-03 btn-lg active':'nav-link btn btn-brand-03 btn-lg'"
                 href="javascript:void(0)">
                <img src="@/assets/cricket-active.svg" alt=""> Cricket
                {{ changeMatchType === 'cricket' ? 'active' : '' }}
              </a>
            </li>
            <li class="nav-item" @click="updateMatchType('football')">
              <a :class="getMatchType==='football'?'nav-link active btn btn-brand-03 btn-lg active':'nav-link btn btn-brand-03 btn-lg'"
                 href="javascript:void(0)">
                <img src="@/assets/football-inactive.svg" alt=""> Football
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="form-group col-md-3">
          <select class="form-control" v-model="selected_tournament_id" @change="changeTournamentId">
            <option value="">All Series</option>
            <option v-for="(tournament,index) of getTournamentList" :value="tournament.key"
                    :key="index">
              {{ tournament.value }}
            </option>
          </select>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import {mapMutations, mapGetters} from 'vuex';
import * as type from '@/store/type';

export default {
  name: "MatchesSection",
  data() {
    return {
      selected_tournament_id: '',
    }
  },
  methods: {
    ...mapMutations({
      changeMatchType: type.MATCH_TYPE,
      getUpcomingMatchList: type.UPCOMING_MATCH_LIST,
      setTournamentId: type.TOURNAMENT_ID_SETTER,
    }),
    changeTournamentId() {
      this.setTournamentId(this.selected_tournament_id);
    },
    updateMatchType(match_type) {
      this.changeMatchType(match_type);
      this.selected_tournament_id = '';
    }
  },
  computed: {
    ...mapGetters({
      getMatchType: type.MATCH_TYPE,
      getTournamentList: type.TOURNAMENT_ID_NAME_MAP,
    }),
  },
}
</script>

<style scoped>
</style>
