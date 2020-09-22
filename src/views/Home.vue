<template>
  <div id="scroll_up">
    <!--preloader end-->
    <!--header section start-->
    <app-header :login_Status="loginResponseData.login_status "></app-header>
    <!--header section end-->
    <div class="main">

      <!--hero section start-->
      <app-hero-section></app-hero-section>
      <!--hero section end-->

      <!--Matches section start-->
      <app-matches-section></app-matches-section>
      <!--Matches section end-->

      <!--Matches list section start-->
      <app-match-list-section></app-match-list-section>
      <!--Matches list section end-->

      <!--How to play start-->
      <app-how-to-play-section></app-how-to-play-section>
      <!--How to play section end-->

      <!--At a glance section start-->
      <app-glance-section></app-glance-section>
      <!--At a glance section end-->

      <!--Go11 growing section start-->
      <app-growing-section></app-growing-section>
      <!--Go11 growing section end-->

      <!--call to action start-->
      <app-action-start-section></app-action-start-section>
      <!--call to action end-->

      <!--faq new style start-->
      <app-faq-section></app-faq-section>
      <!--faq new style end-->

      <!--testimonial section start-->
      <app-terminal-section></app-terminal-section>
      <!--testimonial section end-->

      <!--contact section start-->
      <app-contact-section></app-contact-section>
      <!--contact section end-->

    </div>
    <!--footer bottom copyright start-->
    <app-footer></app-footer>
    <!--footer bottom copyright end-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" data-keyboard="false" tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-login-modal">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <router-link :to="{name:'Home'}">
                  <img src="@/assets/logo.png" class="img-fluid mb-3" width="90" alt="Logo">
                </router-link>
                <h4 class="mb-5">Login Your Account</h4>
              </div>
              <form class="login-signup-form" v-on:submit.prevent="loginSubmit">
                <div class="form-group">
                  <!-- Label -->
                  <label class="pb-1">
                    Email Address
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                      <span class="ti-email"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="+880161XXXXXXX" v-model="phone">
                  </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <!-- Label -->
                  <label class="pb-1">
                    Password
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                      <span class="ti-lock"></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Enter your password" v-model="password">
                  </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-brand-01 border-radius mt-4 mb-3" type="submit">
                  Login Now
                </button>
              </form>
              <!--              <div class="other-login-signup my-3">-->
              <!--                <div class="or-login-signup text-center">-->
              <!--                  <strong>Or Login With</strong>-->
              <!--                </div>-->
              <!--              </div>-->
              <!--              <ul class="list-inline social-login-signup text-center">-->
              <!--                <li class="list-inline-item my-1">-->
              <!--                  <a href="#" class="btn btn-facebook"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>-->
              <!--                </li>-->
              <!--                <li class="list-inline-item my-1">-->
              <!--                  <a href="#" class="btn btn-google"><i class="fab fa-google pr-1"></i> Google</a>-->
              <!--                </li>-->
              <!--              </ul>-->
              <p class="text-center mb-0">Don't have an account? <a href="sign-up.html">Register</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--build:js-->
  </div>
</template>

<script>
import Header from '@/components/home/Header'
import HeroSection from "@/components/home/HeroSection";
import MatchesSection from "@/components/home/MatchesSection";
import MatchListSection from "@/components/home/MatchListSection";
import HowToPlaySection from "@/components/home/HowToPlaySection";
import GlanceSection from "@/components/home/GlanceSection";
import GrowingSection from "@/components/home/GrowingSection";
import Footer from "@/components/home/Footer";
import ContactSection from "@/components/home/ContactSection";
import TerminalSection from "@/components/home/TerminalSection";
import ActionStartSection from "@/components/ActionStartSection";
import FAQSection from "@/components/home/FAQSection";
import * as type from '@/store/type';
import {mapGetters, mapActions} from 'vuex';
// import auth_axios from '@/http/axios/http-auth';

export default {
  name: 'Home',
  data() {
    return {
      password: '',
      phone: '',
      loginResponseData: {
        login_status: false,
        login_fail_message: undefined,
      }
    }
  },
  mixins: [],
  components: {
    'app-header': Header,
    'app-hero-section': HeroSection,
    'app-matches-section': MatchesSection,
    'app-match-list-section': MatchListSection,
    'app-how-to-play-section': HowToPlaySection,
    'app-glance-section': GlanceSection,
    'app-growing-section': GrowingSection,
    'app-footer': Footer,
    'app-contact-section': ContactSection,
    'app-terminal-section': TerminalSection,
    'app-action-start-section': ActionStartSection,
    'app-faq-section': FAQSection
  },
  computed: {
    ...mapGetters({loginResponse: type.USER_LOGIN_STATUS})
  },
  methods: {
    ...mapActions({loginAttempt: type.USER_LOGIN}),
    loginSubmit() {
      this.loginAttempt({phone: this.phone, password: this.password});
    }
  },
  mounted() {
    // auth_axios.get('/coin-packs').then(res => {
    //   console.log(res);
    // }).catch(err => {
    //   console.log(err);
    // })
  },
  watch: {
    loginResponse: function (nv, ov) {
      this.loginResponseData.login_fail_message = nv.login_fail_message;
      this.loginResponseData.login_status = nv.login_status;
      console.log(ov);
      document.querySelector('#close-login-modal').click();
    }
  }
}
</script>
<style>
</style>
