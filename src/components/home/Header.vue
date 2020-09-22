<template>
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
          <ul v-if="!login_Status" class="navbar-nav ml-auto main-navbar-nav">
            <!--button start-->
            <li class="nav-item header-nav-last-item d-flex align-items-center">
              <a data-toggle="modal" href="#exampleModalCenter"
                 class="btn btn-outline-brand-01 btn-outline-white text-uppercase" id="login-modal">Log In</a>
            </li>
            <!--button end-->
          </ul>
          <!--main menu end-->

          <!--main menu start with login-->
          <ul v-if="login_Status" class="navbar-nav ml-auto main-navbar-nav">
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
                <img class="mr-1 rounded-circle border" src="@/assets/img/client-2.jpg" width="36" alt="">
                Amanda Evans
              </a>
              <div class="login_dropdown dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">
                  My Account
                </a>
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
</template>

<script>
import * as type from '@/store/type';
import {mapActions} from 'vuex';

export default {
  name: "Header",
  props: {
    login_Status: {
      type: Boolean,
      default: () => false,
      required: true,
    }
  },
  data() {
    return {}
  },
  methods: {
    ...mapActions({logoutSubmit: type.USER_LOGOUT})
  },
  watch: {
    login_Status: () => {

    }
  }
}
</script>

<style scoped>

</style>
