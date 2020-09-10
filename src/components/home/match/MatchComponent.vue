<template>
  <div :class="getClasses()">
    <div class="card-body px-0">
      <a href="#">
        <div class="d-flex justify-content-between px-3">
          <div class="matche_vs">
            <p>Bangladesh vs Zimbabwe</p>
          </div>
          <div class="matche_type">
            <p class="text-success font-weight-bold">ODD</p>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="matche_vs_left">
            <p>
              <img class="mr-1" src="@/assets/bd-01.png" alt=""> BAN
            </p>
          </div>
          <div class="matche_time">
            <p class="text-danger font-weight-bold">9h 43m left</p>
          </div>
          <div class="matche_vs_right">
            <p>
              ZIM <img class="ml-1" src="@/assets/zim-01.png" alt="">
            </p>
          </div>
        </div>
        <div class="d-flex justify-content-start px-3">
          <div class="matche_contest_count">
            <p class="text-warning mb-0">Total Contest: 08</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "MatchComponent",
  props: {
    rootClass: {
      type: Object,
      default: () => {
        return {};
      }
    }
    // {
    //   type: Object,
    //   default: () => {
    //     return {};
    //   },
    //   require: false,
    //   validator: () => {
    //     return false;
    //   },
    // }
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
    console.log(this.getClasses());
  }
}
</script>

<style scoped>

</style>
