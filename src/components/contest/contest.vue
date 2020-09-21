<template>
  <div v-if="contest">
    <div class="overflow-auto h-75">
      <div class="card-body green-bg text-left p-0 mb-4">
        <h4 class="mb-0">{{ contest.name }}</h4>
        <p class="text-muted mb-1">{{ contest.subtitle }}</p>
        <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
          <div class="d-flex justify-content-between px-3">
            <div class="text-left">
              <span>Total Prize</span>
              <h3 class="text-success mb-0">${{ contest.winning_amount }}</h3>
            </div>
            <div class="text-right">
              <a href="javascript:void(0)" class="text-warning" data-toggle="modal"
                 data-target="#entry_fees">Entry {{ contest.entry_amount }}</a><img class=" mb-1 ml-2"
                                                                                    src="@/assets/coin.svg"
                                                                                    width="16" alt="">
              <button type="button" class="btn btn-xs btn-block btn-success" data-toggle="modal"
                      data-target="#select_team">
                Join Now
              </button>
            </div>
          </div>
          <div class="progress mx-3 my-1" v-if="+contest.is_league !==0">
            <div class="progress-bar bg-warning" role="progressbar" :style="'width:'+contestProgress+'%'"
                 :aria-valuenow="contestProgress"
                 aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="d-flex justify-content-between mx-3 mb-2 mt-1">
            <div class="text-left">
              <span>{{ contest.total_user_joined }} Team Joined</span>
            </div>
            <div class="text-right">
              <span class="text-danger">{{ +contest.teams_capacity - +contest.total_user_joined }} Spots Left</span>
            </div>
          </div>
          <div class="d-flex justify-content-between bg-light px-3 py-1">
            <div class="text-left">
              <span>Total {{ contest.prize.length }} Winners</span>
            </div>
            <div class="text-right">
              <i class="fas fa-info-circle text-warning ml-3" data-toggle="tooltip" data-placement="top"
                 title="Tooltip on top"></i>
              <a href="javascript:void(0)" class="text-success" data-toggle="modal"
                 data-target="#prize_list" @click="setSpecialOffer">Special Offer Available</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "contest",
  props: {
    contest: {
      type: Object,
      default: () => {
        return {}
      },
      required: true,

    },
    index: {
      type: Number,
      required: true,
      default: () => 0
    }
  },
  data() {
    return {
    }
  },
  methods: {
    setSpecialOffer() {
      this.$emit('priceList', this.index)
    }
  },
  computed: {
    contestProgress() {
      return Math.round(this.contest.total_user_joined * 100 / this.contest.teams_capacity);
    },
  },
  watch: {
    // sort_by: (old_value,new_value) => {
    //   this.contest.prize
    // }
  },
  mounted() {

  }
}
</script>

<style scoped>

</style>
