<template>
<div>
  <div class="bg-dark px-4 pt-3 pb-2">
    <div class="d-flex justify-content-between pb-2">
      <div class="go_back">
        <a href="javascript:void(0)" @click="$router.go(-1)"> <i class="fas fa-arrow-left"></i> </a>
      </div>
      <div class="contest_each_title"><h5 class="text-danger mb-0">9h 43m left</h5></div>
      <div class="go_back">
        <i class="fas fa-info-circle text-white ml-3"
           data-toggle="tooltip"
           data-placement="top"
           title="Tooltip on top"></i>
      </div>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-2">
      <div class="text-left team_create_header_left">
        <img src="@/assets/logo.png" width="28" alt=""/>
        <p class="mb-0 mt-2">Players</p>
        <h5 class="mb-0 mt-1"><span>{{ totalSelectedCount }}</span>/11</h5>
      </div>
      <div class="w-50 team_create_header_center">
        <h6 class="text-white mb-3">Max 7 players from a team</h6>
        <div class="d-flex justify-content-between mt-3">
          <div class="matche_vs_left pl-0">
            <p class="mb-0 d-inline-block"><img class="d-block mr-1" src="@/assets/bd-01.png" alt=""/></p>
            <p class="mb-0 text-white text-left font-weight-bold d-inline-block">BAN <span
                class="d-block">0</span></p>
          </div>
          <div class="matche_vs_right pr-0">
            <p class="mb-0 text-white text-left font-weight-bold d-inline-block">ZIM <span
                class="d-block">0</span>
            </p>
            <p class="mb-0 text-white font-weight-bold d-inline-block">
              <img class="d-block ml-1"
                   src="@/assets/zim-01.png"
                   alt=""/>
            </p>
          </div>
        </div>
      </div>
      <div class="text-right team_create_header_right">
        <img src="@/assets/logo.png" width="28" style="opacity: 0;"/>
        <p class="mb-0 mt-2">Credits</p>
        <h5 class="mb-0 mt-1">2050</h5>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
name: "MatchDetails",
  props:{
    totalSelectedCount:{
      type:Number,
      default:()=>0,
      required:true,
    }
  }
}
</script>

<style scoped>

</style>
