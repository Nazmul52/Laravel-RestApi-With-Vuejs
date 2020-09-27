<template>
  <div id="app">
    <div id="preloader">
      <div class="preloader-wrap">
        <img src="@/assets/logo.png" alt="logo" class="img-fluid" width="110"/>
        <div class="preloader">
          <i>.</i>
          <i>.</i>
          <i>.</i>
        </div>
      </div>
    </div>
    <!--    <p>Bangladesh {{ doubleCounter }}</p>-->
    <!--    <button @click="setCounter({interval:5})">Bangladesh</button>-->
    <router-view></router-view>
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" @click="scrollToTop(1000)">
      <span class="fas fa-hand-point-up"><a href="javascript:void(0)"></a></span>
    </div>
    <!--scroll bottom to top button end-->
  </div>
</template>

<script>
import {mapGetters} from 'vuex';
// import {mapMutations} from 'vuex';
import {mapActions} from 'vuex';
import * as type from './store/type'

export default {
  name: 'App',
  components: {},
  computed: {...mapGetters({doubleCounter: type.DOUBLE_COUNTER})},// so call getter
  methods: {
    ...mapActions({
      setCounter: type.SET_COUNTER,
      fetchUpcomingCricketList: type.UPCOMING_MATCH_LIST_CRICKET,
      fetchUpcomingFootballList: type.UPCOMING_MATCH_LIST_FOOTBALL,
      loginSubmit: type.USER_LOGIN
    }),
    scrollToTop(duration) {
      // cancel if already on top
      if (document.scrollingElement.scrollTop === 0) return;

      const totalScrollDistance = document.scrollingElement.scrollTop;
      let scrollY = totalScrollDistance, oldTimestamp = null;

      function step(newTimestamp) {
        if (oldTimestamp !== null) {
          // if duration is 0 scrollY will be -Infinity
          scrollY -= totalScrollDistance * (newTimestamp - oldTimestamp) / duration;
          if (scrollY <= 0) return document.scrollingElement.scrollTop = 0;
          document.scrollingElement.scrollTop = scrollY;
        }
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
      }

      window.requestAnimationFrame(step);
    }
  }, // so call setter
  // methods: {...mapActions(['setCounter']), ...mapMutations(['setCounter'])}, // so call setter

  // methods: {
  // setCount() {
  //   this.$store.commit('setCounter');
  // }

// }
// computed: {
//   getCount(){
//     return this.$store.getters.doubleCounter;
//   }
// },
  mounted() {
    this.fetchUpcomingCricketList();
    this.fetchUpcomingFootballList();
    this.loginSubmit({email: undefined, password: undefined});
    this.$nextTick(() => {

    });
  }
}
</script>

<style>
/*@import '~bootstrap/dist/css/bootstrap.min.css';*/
</style>
