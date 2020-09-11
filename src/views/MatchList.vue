<template>
  <div>
    <!--header section start-->
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

            <!--main menu start-->
            <ul class="navbar-nav ml-auto main-navbar-nav">
              <!--notification start-->
              <li class="nav-item header-nav-last-item d-flex align-items-center position-relative mr-4">
                <a href="#" class="text-white notification_bell" id="dropdownMenuLink" data-toggle="dropdown">
                  <img class="mr-1" src="@/assets/bell.svg" width="24" alt="">
                  <span>9</span>
                </a>
                <div class="nitification_dropdown dropdown-menu" aria-labelledby="dropdownMenuLink">
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
                  <img class="mr-1 rounded-circle" src="@/assets/img/client-2.jpg" width="36" alt=""> Amanda Evans
                </a>
                <div class="login_dropdown dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">
                    My Account
                  </a>
                  <a class="dropdown-item" href="#">Change Password</a>
                  <hr>
                  <a class="dropdown-item" href="#">Log Out</a>
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
    <!--header section end-->

    <div class="main">

      <!--hero section start-->
      <section class="ptb-120 overflow-hidden sub_banner primary-bg" style="height:400px">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 mx-auto text-center">
              <div class="hero-slider-content">
                <h2 class="text-uppercase text-white mb-4">Upcoming Matches</h2>
                <div class="matches_tab text-center">
                  <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active btn btn-brand-03 btn-lg" id="Cricket-tab" data-toggle="tab"
                         href="#Cricket" role="tab" aria-controls="Cricket" aria-selected="true">
                        <img src="@/assets/cricket-active.svg" alt=""> Cricket
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn btn-brand-04 btn-lg" id="Football-tab" data-toggle="tab" href="#Football"
                         role="tab" aria-controls="Football" aria-selected="false">
                        <img src="@/assets/football-inactive.svg" alt=""> Football
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--hero section end-->

      <!--Matches section start-->
      <section class="promo-section pt-120 pb-60" style="margin-top: -120px;">
        <div class="container text-center">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="Cricket" role="tabpanel" aria-labelledby="Cricket-tab">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="big_matche_list matche_each matche_each_big bg-light p-3 rounded">
                    <app-match-component :root-class="{'mb-3':true}"></app-match-component>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex justify-content-center align-items-center bg-light rounded h-100 p-4">
                    <Carousel :perPage="1">
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                    </Carousel>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Football" role="tabpanel" aria-labelledby="Football-tab">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="big_matche_list matche_each matche_each_big bg-light p-3 rounded">
                    <!-- @todo last class should be mb-0-->
                    <app-match-component :root-class="{'mb-3':true}"></app-match-component>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex justify-content-center align-items-center bg-light rounded h-100 p-4">
                    <Carousel :perPage="1">
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                      <Slide data-index="0"
                             data-name="MySlideName0"
                             @slideclick="handleSlideClick">
                        <div class="item">
                          <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                          <h3>Walter Adams</h3>
                          <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                          <p>Playing Since <span class="text-warning">2018</span></p>
                          <p class="main_feedback px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam aliquet
                            congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet lectus,
                            et
                            molestie sem tortor quis dui. Donec molestie nisi iaculis
                            sodales mollis. Nullam non tellus sed elit pulvinar dignissim ut vel ex.</p>
                        </div>
                      </Slide>
                    </Carousel>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Matches section end-->
    </div>

    <!--footer bottom copyright start-->
    <app-footer></app-footer>
    <!--scroll bottom to top button end-->
  </div>
</template>

<script>
import {Carousel, Slide} from "vue-carousel";
import MatchComponent from '@/components/home/match/MatchComponent'
import Footer from '@/components/home/Footer'

export default {
  name: "MatchList",
  components: {
    Carousel,
    Slide,
    'appMatchComponent': MatchComponent,
    'appFooter': Footer
  },
  data() {
    return {}
  },
  methods: {
    handleSlideClick(dataset) {
      console.log(dataset.index, dataset.name)
    },
  },
}
</script>

<style scoped>

</style>
