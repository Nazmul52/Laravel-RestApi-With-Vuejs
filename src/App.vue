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
    <p>Bangladesh {{ doubleCounter }}</p>
    <button @click="setCounter({interval:5})">Bangladesh</button>
    <router-view></router-view>
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
  methods: {...mapActions({setCounter: type.SET_COUNTER})}, // so call setter
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
    this.$nextTick(() => {

    });
  }
}
</script>

<style>
@import '~bootstrap/dist/css/bootstrap.min.css';
</style>
