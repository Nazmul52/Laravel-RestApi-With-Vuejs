<template>
  <div>
    <!--preloader end-->
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
      <section class="ptb-120 overflow-hidden hero_banner primary-bg">
        <div class="container">
          <div
              class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-md-8 mx-auto text-center">
              <div class="hero-slider-content text-white py-5">
                <h1 class="text-white">Game of 11 - GO11</h1>
                <p class="lead font-weight-bold">Biggest Fantasy Platform in Bangladesh</p>
                <p class="lead bn_text">GO11 বাংলাদেশের সর্বপ্রথম কন্টেস্ট ভিত্তিক যান্টাসি গেইম। ম্যাচ সিলেক্ট
                  করো, ফ্যান্টাসি টিম বানাও আর কন্টেস্টে জয়েন করো। প্রতি কন্টেস্টেই জিতে নাও ক্যাশ
                  পুরস্কার!</p>

                <div class="action-btns mt-4">
                  <a href="#" class="">
                    <img src="@/assets/ios-app.svg" alt="">
                  </a>
                  <a href="#" class="ml-3">
                    <img src="@/assets/play-app.svg" alt="">
                  </a>
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
      <section class="promo-section pb-5 pt-5">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Upcoming Matches</h2>
                <p>Uniquely repurpose strategic core competencies with progressive content.<br>Assertively
                  transition ethical imperatives and collaborative manufactured products. </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center my-4">
            <div class="matches_tab text-center col-md-4">
              <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active btn btn-brand-03 btn-lg" id="Cricket-tab" data-toggle="tab"
                     href="#Cricket" role="tab" aria-controls="Cricket" aria-selected="true">
                    <img src="@/assets/cricket-active.svg" alt=""> Cricket
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-brand-04 btn-lg" id="Football-tab" data-toggle="tab"
                     href="#Football" role="tab" aria-controls="Football" aria-selected="false">
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
      <!--Matches section end-->

      <!--Matches list section start-->
      <section class="promo-section ptb-60 gray-light-bg">
        <div class="container text-center">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="Cricket" role="tabpanel" aria-labelledby="Cricket-tab">
              <div class="row justify-content-md-center justify-content-sm-center matche_each">
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
              </div>
              <a href="#" class="btn btn-brand-01">More Matches</a>
            </div>
            <div class="tab-pane fade" id="Football" role="tabpanel" aria-labelledby="Football-tab">
              <div class="row justify-content-md-center justify-content-sm-center matche_each">
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
                <div class="col-lg-4">
                  <div class="card">
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
                </div>
              </div>
              <a href="#" class="btn btn-brand-01">More Matches</a>
            </div>
          </div>
        </div>
      </section>
      <!--Matches list section end-->

      <!--Matches section start-->
      <section class="promo-section pb-5 pt-5">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>My Contests</h2>
                <p>Uniquely repurpose strategic core competencies with progressive content.<br>Assertively
                  transition ethical imperatives and collaborative manufactured products. </p>
              </div>
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
      <!--Matches section end-->

      <!--Matches list section start-->
      <section class="promo-section pb-60">
        <div class="container">
          <div class="col-md-8 mx-auto">
            <div class="row justify-content-between mb-4">
              <div class="col-md-6 shorting_left">
                <span class="font-weight-bold d-inline-block mr-2">Short By :</span>
                <div class="btn-group btn-group-toggle text-uppercase" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-success active">
                    <input type="radio" name="options" id="option1" checked> Total Prize
                  </label>
                  <label class="btn btn-sm btn-outline-success">
                    <input type="radio" name="options" id="option2"> Entry Fee
                  </label>
                </div>
              </div>
              <div class="col-md-6 shorting_right text-right">
                <button type="button" class="btn btn-sm btn-outline-warning active">Completed</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Upcoming</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Live</button>
              </div>
            </div>
            <hr>
          </div>
        </div>
        <div class="container text-center">
          <div class="col-md-8 mx-auto">
            <div id="accordion" class="accordion">
              <div class="row justify-content-md-center justify-content-sm-center matche_each matche_each_big">
                <div class="col-lg-12">
                  <div class="card">
                    <a class="collapsed" data-toggle="collapse" href="#collapse0" aria-expanded="false">
                      <div class="card-body px-0">
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
                      </div>
                    </a>
                    <div id="collapse0" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body green-bg text-left">
                        <h3 class="mb-0">Mini Mega</h3>
                        <p class="text-muted">Play & Win Big!</p>
                        <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
                          <div class="d-flex justify-content-between px-3">
                            <div class="text-left">
                              <span>Total Prize</span>
                              <h3 class="mb-0">$5560</h3>
                            </div>
                            <div class="text-right">
                              <span class="text-warning">Entry 5000</span>
                              <h3 class="mb-0">$5560</h3>
                            </div>
                          </div>
                          <div class="progress m-3">
                            <div class="progress-bar bg-warning" role="progressbar"
                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                          </div>
                          <div class="d-flex justify-content-between mx-3 my-2">
                            <div class="text-left">
                              <span>65 Team Joined</span>
                            </div>
                            <div class="text-right">
                              <span class="text-danger">0 Spots Left</span>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between bg-light px-3 py-2">
                            <div class="text-left">
                              <span>Total 100 Winners</span>
                            </div>
                            <div class="text-right">
                              <i class="fas fa-info-circle text-warning ml-3"
                                 data-toggle="tooltip" data-placement="top"
                                 title="Tooltip on top"></i>
                              <span class="text-success">Special Offer Available</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body green-bg text-left">
                        <h3 class="mb-0">Mini Mega</h3>
                        <p class="text-muted">Play & Win Big!</p>
                        <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
                          <div class="d-flex justify-content-between px-3">
                            <div class="text-left">
                              <span>Total Prize</span>
                              <h3 class="mb-0">$5560</h3>
                            </div>
                            <div class="text-right">
                              <span class="text-warning">Entry 5000</span>
                              <h3 class="mb-0">$5560</h3>
                            </div>
                          </div>
                          <div class="progress m-3">
                            <div class="progress-bar bg-warning" role="progressbar"
                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                          </div>
                          <div class="d-flex justify-content-between mx-3 my-2">
                            <div class="text-left">
                              <span>65 Team Joined</span>
                            </div>
                            <div class="text-right">
                              <span class="text-danger">0 Spots Left</span>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between bg-light px-3 py-2">
                            <div class="text-left">
                              <span>Total 100 Winners</span>
                            </div>
                            <div class="text-right">
                              <i class="fas fa-info-circle text-warning ml-3"
                                 data-toggle="tooltip" data-placement="top"
                                 title="Tooltip on top"></i>
                              <span class="text-success">Special Offer Available</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body px-0">
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
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body px-0">
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
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body px-0">
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
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body px-0">
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
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body px-0">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Matches list section end-->

    </div>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-5 gray-light-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center">
            <img src="@/assets/logo.png" alt="" width="90">
            <ul class="list-inline social-list-default background-color social-hover-2 mt-4 mb-2">
              <li class="list-inline-item">
                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
            <div class="terms-policy-wrap text-center">
              <ul class="list-inline">
                <li class="list-inline-item"><a class="small-text" href="#">Terms & Conditions</a></li>
                <li class="list-inline-item"><a class="small-text" href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a class="small-text" href="#">About Us</a></li>
              </ul>
            </div>
            <hr>
            <div class="copyright-wrap small-text text-center">
              <p class="mb-0">&copy; Copyright <a href="#">GameOff11</a> 2020</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--footer bottom copyright end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
      <span class="fas fa-hand-point-up"></span>
    </div>
  </div>
</template>

<script>
export default {
  name: "LoggedInHome"
}
</script>

<style scoped>

</style>
