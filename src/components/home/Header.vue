<template>
  <div>
    <header id="header" class="header-main">
      <!--main header menu start-->
      <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
        <div class="container">
          <nav class="navbar navbar-expand-md header-nav">

            <!--logo start-->
            <router-link :to="{name:'Home'}">
              <a class="navbar-brand" href="javascript:void(0)">
                <img src="@/assets/logo.png" alt="logo" class="img-fluid"/>
              </a>
            </router-link>
            <!--logo end-->

            <!--main menu start without login-->
            <ul v-if="!loginStatus" class="navbar-nav ml-auto main-navbar-nav">
              <!--button start-->
              <li class="nav-item header-nav-last-item d-flex align-items-center">
                <a data-toggle="modal" href="#exampleModalCenter"
                   class="btn btn-outline-brand-01 btn-outline-white text-uppercase" id="login-modal">Log In</a>
              </li>
              <!--button end-->
            </ul>
            <!--main menu end-->

            <!--main menu start with login-->
            <ul v-if="loginStatus" class="navbar-nav ml-auto main-navbar-nav">
              <!--notification start-->
              <li class="nav-item header-nav-last-item d-flex align-items-center position-relative mr-4">
                <a href="#" class="text-white notification_bell" id="dropdownMenuLink1" data-toggle="dropdown">
                  <img class="mr-1" src="@/assets/bell.svg" width="24" alt="">
                  <span>9</span>
                </a>
                <div class="nitification_dropdown dropdown-menu" aria-labelledby="dropdownMenuLink1">
                  <a class="dropdown-item unred" href="#">
                    Write to us at support@gameof11.com about the issue with issue name “Login/Registration
                    unsuccessful”.
                  </a>
                  <hr>
                  <a class="dropdown-item" href="#">
                    Write to us at support@gameof11.com about the issue with issue name “Login/Registration
                    unsuccessful”.
                  </a>
                  <hr>
                  <a class="dropdown-item" href="#">
                    Write to us at support@gameof11.com about the issue with issue name “Login/Registration
                    unsuccessful”.
                  </a>
                </div>
              </li>
              <!--notification end-->
              <!--button start-->
              <li class="nav-item header-nav-last-item d-flex align-items-center position-relative">
                <a href="#" class="text-white dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown">
                  <img class="mr-1 rounded-circle border" :src="encodeURI(file_path+(getUserData.avatar.imagePath) ? getUserData.avatar.imagePath : '')" width="36" alt="">
                  {{ getUserData.name }}
                </a>
                <div class="login_dropdown dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <router-link :to="{name:'UserProfile'}" class="dropdown-item">My Account</router-link>
                  <a class="dropdown-item" href="#">Change Password</a>
                  <hr>
                  <a class="dropdown-item" href="javascript:void(0)" @click="logoutSubmit">Log Out</a>
                </div>
              </li>
              <!--button end-->
            </ul>
            <!--main menu end-->
          </nav>
        </div>
      </div>
      <!--main header menu end-->
    </header>
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
              <div class="row" v-if="loginResponse.login_fail_message">
                <div class="col-md-12">
                  <h4 class="w-95 bg-danger">{{ loginResponse.login_fail_message }} <i
                      class="fa fa-window-close w-5"></i></h4>
                </div>
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
import * as type from '@/store/type';
import {mapActions, mapGetters} from 'vuex';
import {image_server_base_path} from '@/utils/enviornment_data';

export default {
  name: "Header",
  data() {
    return {
      file_path: image_server_base_path,
      password: '',
      phone: '',
      loginResponseData: {
        login_status: false,
        login_fail_message: undefined,
      },
    
    }
  },
  computed: {
    ...mapGetters({
      loginResponse: type.USER_LOGIN_STATUS,
      getUserData: type.USER_DATA_GETTER
    }),
    loginStatus(){
      return this.loginResponse.login_status;
    }


  },
  methods: {
    ...mapActions({
      logoutSubmit: type.USER_LOGOUT,
      loginAttempt: type.USER_LOGIN
    }),
    loginSubmit() {
      this.loginAttempt({phone: this.phone, password: this.password});
    }
  },
  watch: {
    loginResponse: function (nv, ov) {
      this.loginResponseData.login_fail_message = nv.login_fail_message;
      this.loginResponseData.login_status = nv.login_status;
      if (!nv.login_fail_message)
        document.querySelector('#close-login-modal').click();
      console.log(ov);
    },
  }
}
</script>

<style scoped>

</style>
