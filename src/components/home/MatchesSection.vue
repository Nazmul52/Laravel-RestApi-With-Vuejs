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
            <li class="nav-item" @click="changeMatchType('cricket')">
              <a class="nav-link active btn btn-brand-03 btn-lg" data-toggle="tab"
                 href="javascript:void(0)" aria-selected="true">
                <img src="@/assets/cricket-active.svg" alt=""> Cricket
              </a>
            </li>
            <li class="nav-item" @click="changeMatchType('football')">
              <a class="nav-link btn btn-brand-04 btn-lg" data-toggle="tab"
                 href="javascript:void(0)" aria-selected="false">
                <img src="@/assets/football-inactive.svg" alt=""> Football
              </a>
            </li>
          </ul>
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
</template>

<script>
import {mapMutations} from 'vuex';
import * as type from '@/store/type';

export default {
  name: "MatchesSection",
  methods: {
    ...mapMutations({
      changeMatchType: type.MATCH_TYPE,
      getUpcomingMatchList: type.UPCOMING_MATCH_LIST,
    }),
  }
}
</script>

<style scoped>

</style>
