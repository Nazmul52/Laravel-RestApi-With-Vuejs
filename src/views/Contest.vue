<template>
  <div>


    <div class="main">

      <!--Matches section start-->
      <section class="promo-section vh-100 w-100 position-fixed contest_main_bg">
        <div class="container-fluid text-center h-100">
          <div class="row h-100">
            <div class="col-md-6 p-0 h-100 bg-light">
              <div class="contest_left h-100">
                <div class="bg-secondary px-4 pt-3 pb-2">
                  <div class="d-flex justify-content-between">
                    <div class="go_back">
                      <a href="#">
                        <i class="fas fa-arrow-left"></i>
                      </a>
                    </div>
                    <div class="contest_each_title">
                      <h5 class="text-white mb-0">T20 Match</h5>
                    </div>
                    <div class="go_back">
                      <i class="fas fa-info-circle text-white ml-3" data-toggle="tooltip" data-placement="top"
                         title="Tooltip on top"></i>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="matche_vs_left">
                      <p class="mb-0 text-white font-weight-bold">
                        <img class="mr-1" src="@/assets/bd-01.png" alt=""> BAN
                      </p>
                    </div>
                    <div class="matche_time">
                      <p class="text-warning mb-0">VS</p>
                    </div>
                    <div class="matche_vs_right">
                      <p class="mb-0 text-white font-weight-bold">
                        ZIM <img class="ml-1" src="@/assets/zim-01.png" alt="">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="bg-dark p-2">
                  <div class="d-flex justify-content-center">
                    <h5 class="text-danger mb-0">9h 43m left</h5>
                  </div>
                </div>
                <div class="bg-light p-3 h-100">
                  <div class="d-flex justify-content-between mb-4">
                    <div class="shorting_left">
                      <span class="d-inline-block mr-2">Short By :</span>
                      <div class="btn-group btn-group-toggle text-uppercase" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-success active">
                          <input type="radio" name="options" id="option1" checked=""> Total Prize
                        </label>
                        <label class="btn btn-sm btn-outline-success">
                          <input type="radio" name="options" id="option2"> Entry Fee
                        </label>
                      </div>
                    </div>
                    <div class="">
                      <button type="button" class="btn btn-sm btn-brand-01">
                        Create Team
                      </button>
                    </div>
                  </div>
                  <div class="overflow-auto h-75">
                    <div class="card-body green-bg text-left p-0 mb-4">
                      <h4 class="mb-0">Mini Mega</h4>
                      <p class="text-muted mb-1">Play & Win Big!</p>
                      <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
                        <div class="d-flex justify-content-between px-3">
                          <div class="text-left">
                            <span>Total Prize</span>
                            <h3 class="text-success mb-0">$5560</h3>
                          </div>
                          <div class="text-right">
                            <a href="javascript:void(0)" class="text-warning" data-toggle="modal"
                               data-target="#entry_fees">Entry 5000</a><img class=" mb-1 ml-2" src="@/assets/coin.svg"
                                                                            width="16" alt="">
                            <button type="button" class="btn btn-xs btn-block btn-success" data-toggle="modal"
                                    data-target="#select_team">
                              Join Now
                            </button>
                          </div>
                        </div>
                        <div class="progress mx-3 my-1">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                               aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mx-3 mb-2 mt-1">
                          <div class="text-left">
                            <span>65 Team Joined</span>
                          </div>
                          <div class="text-right">
                            <span class="text-danger">0 Spots Left</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between bg-light px-3 py-1">
                          <div class="text-left">
                            <span>Total 100 Winners</span>
                          </div>
                          <div class="text-right">
                            <i class="fas fa-info-circle text-warning ml-3" data-toggle="tooltip" data-placement="top"
                               title="Tooltip on top"></i>
                            <a href="javascript:void(0)" class="text-success" data-toggle="modal"
                               data-target="#prize_list">Special Offer Available</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body green-bg text-left p-0 mb-4">
                      <h4 class="mb-0">Mini Mega</h4>
                      <p class="text-muted mb-1">Play & Win Big!</p>
                      <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
                        <div class="d-flex justify-content-between px-3">
                          <div class="text-left">
                            <span>Total Prize</span>
                            <h3 class="text-success mb-0">$5560</h3>
                          </div>
                          <div class="text-right">
                            <span class="text-warning">Entry 5000</span><img class=" mb-1 ml-2" src="@/assets/coin.svg"
                                                                             width="16" alt="">
                            <button type="button" class="btn btn-xs btn-block btn-secondary" disabled>
                              Join Now
                            </button>
                          </div>
                        </div>
                        <div class="progress mx-3 my-1">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                               aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mx-3 mb-2 mt-1">
                          <div class="text-left">
                            <span>65 Team Joined</span>
                          </div>
                          <div class="text-right">
                            <span class="text-danger">0 Spots Left</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between bg-light px-3 py-1">
                          <div class="text-left">
                            <span>Total 100 Winners</span>
                          </div>
                          <div class="text-right">
                            <i class="fas fa-info-circle text-warning ml-3" data-toggle="tooltip" data-placement="top"
                               title="Tooltip on top"></i>
                            <span class="text-success">Special Offer Available</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body green-bg text-left p-0 mb-4">
                      <h4 class="mb-0">Mini Mega</h4>
                      <p class="text-muted mb-1">Play & Win Big!</p>
                      <div class="metche_details bg-white pt-3 pb-0 overflow-hidden">
                        <div class="d-flex justify-content-between px-3">
                          <div class="text-left">
                            <span>Total Prize</span>
                            <h3 class="text-success mb-0">$5560</h3>
                          </div>
                          <div class="text-right">
                            <span class="text-warning">Entry 5000</span><img class=" mb-1 ml-2" src="@/assets/coin.svg"
                                                                             width="16" alt="">
                            <button type="button" class="btn btn-xs btn-block btn-success">
                              Join Now
                            </button>
                          </div>
                        </div>
                        <div class="progress mx-3 my-1">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                               aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mx-3 mb-2 mt-1">
                          <div class="text-left">
                            <span>65 Team Joined</span>
                          </div>
                          <div class="text-right">
                            <span class="text-danger">0 Spots Left</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between bg-light px-3 py-1">
                          <div class="text-left">
                            <span>Total 100 Winners</span>
                          </div>
                          <div class="text-right">
                            <i class="fas fa-info-circle text-warning ml-3" data-toggle="tooltip" data-placement="top"
                               title="Tooltip on top"></i>
                            <span class="text-success">Special Offer Available</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 h-100">
              <div class="d-flex justify-content-center align-items-center contest_right h-100">
                <div class="bg-light rounded w-100 p-5">
                  <Carousel :perPage="1">
                    <Slide data-index="0"
                           data-name="MySlideName0"
                           @slideclick="handleSlideClick">
                      <div class="item">
                        <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                        <h3>Walter Adams</h3>
                        <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                        <p>Playing Since <span class="text-warning">2018</span></p>
                        <p class="main_feedback text-muted px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam
                          aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet
                          lectus, et molestie sem tortor quis dui. Donec molestie nisi iaculis sodales mollis. Nullam
                          non
                          tellus sed elit pulvinar dignissim ut vel ex.</p>
                      </div>
                    </Slide>
                    <Slide data-index="1"
                           data-name="MySlideName1"
                           @slideclick="handleSlideClick">
                      <div class="item">
                        <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                        <h3>Walter Adams</h3>
                        <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                        <p>Playing Since <span class="text-warning">2018</span></p>
                        <p class="main_feedback text-muted px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam
                          aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet
                          lectus, et molestie sem tortor quis dui. Donec molestie nisi iaculis sodales mollis. Nullam
                          non
                          tellus sed elit pulvinar dignissim ut vel ex.</p>
                      </div>
                    </Slide>
                    <Slide data-index="2"
                           data-name="MySlideName2"
                           @slideclick="handleSlideClick">
                      <div class="item">
                        <img class="rounded-circle mb-3" src="@/assets/img/client-2.jpg" width="120" alt="">
                        <h3>Walter Adams</h3>
                        <p class="m-0">Total Match Played <span class="text-success">130</span></p>
                        <p>Playing Since <span class="text-warning">2018</span></p>
                        <p class="main_feedback text-muted px-4">Duis rhoncus dui venenatis consequat porttitor. Etiam
                          aliquet congue consequat. In posuere, nunc sit amet laoreet blandit, urna sapien imperdiet
                          lectus, et molestie sem tortor quis dui. Donec molestie nisi iaculis sodales mollis. Nullam
                          non
                          tellus sed elit pulvinar dignissim ut vel ex.</p>
                      </div>
                    </Slide>
                  </Carousel>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Matches section end-->

    </div>



    <!-- Prize Modal -->
    <div class="modal fade" id="prize_list">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Prize List</h4>
              </div>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 1
                  <span class="badge badge-success badge-pill">10000 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 2
                  <span class="badge badge-success badge-pill">2000 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 3-5
                  <span class="badge badge-success badge-pill">300 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 6-10
                  <span class="badge badge-success badge-pill">40 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 11-13
                  <span class="badge badge-success badge-pill">30 BDT</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Rank 30-40
                  <span class="badge badge-success badge-pill">10 BDT</span>
                </li>
              </ul>
              <button class="btn btn-brand-01 border-radius mt-4 mb-2">
                Join Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

    <!-- Entry Fees Modal -->
    <div class="modal fade" id="entry_fees">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Entry Fee</h4>
                <p class="text-muted">The minimum withdrawal amount is <span class="text-success font-weight-bold">250 BDT</span>
                  and the maximum amount is <span class="text-success font-weight-bold">4999 BDT</span></p>
              </div>
              <button class="btn btn-brand-01 border-radius mt-4 mb-2">
                Join Now
              </button>
              <p class="text-center mb-0">Don't have enough coins?</p>
              <a href="sign-up.html"><u>Get Coins</u></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

    <!-- Select Team Modal -->
    <div class="modal fade" id="select_team">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Select Your Team</h4>
                <p class="text-muted">Maecenas Interdum Lorem Eleifend Orci Aliquam Mollis. Aliquam Non Rhoncus Magna
                  Suspendisse. </p>
              </div>
              <div class="bg-light rounded px-4 mt-4">
                <div class="team_details_each">
                  <div class="text-left mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">Team Name: <span
                          class="text-success font-weight-bold">Lucifer</span></label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between team_details">
                    <div class="">
                      <span class="team_captain bg-dark text-white mb-2">C</span> Ronnie Grand
                      <div class="clearfix"></div>
                      <span class="team_vicecaptain bg-warning text-white">VC</span> Ronnie Grand
                    </div>
                    <div class="">
                      <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item text-muted">
                          WK
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BAT
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          ALL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BOWL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="team_details_each">
                  <div class="text-left mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio2">Team Name: <span
                          class="text-success font-weight-bold">Lucifer</span></label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between team_details">
                    <div class="">
                      <span class="team_captain bg-dark text-white mb-2">C</span> Ronnie Grand
                      <div class="clearfix"></div>
                      <span class="team_vicecaptain bg-warning text-white">VC</span> Ronnie Grand
                    </div>
                    <div class="">
                      <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item text-muted">
                          WK
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BAT
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          ALL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BOWL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="team_details_each">
                  <div class="text-left mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio3">Team Name: <span
                          class="text-success font-weight-bold">Lucifer</span></label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between team_details">
                    <div class="">
                      <span class="team_captain bg-dark text-white mb-2">C</span> Ronnie Grand
                      <div class="clearfix"></div>
                      <span class="team_vicecaptain bg-warning text-white">VC</span> Ronnie Grand
                    </div>
                    <div class="">
                      <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item text-muted">
                          WK
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BAT
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          ALL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                        <li class="list-group-item text-muted">
                          BOWL
                          <span class="d-block text-dark font-weight-bold">1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <button id="joinButton" class="btn btn-success border-radius mt-4 mb-2" data-toggle="modal"
                      data-target="#join_confirmation" data-dismiss="modal" disabled="true">
                Join Contest
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

    <!-- Entry Fees Modal -->
    <div class="modal fade" id="join_confirmation">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3 text-uppercase">Confirmation</h4>
                <p class="text-warning mb-0">
                  Your total coins = 4750 <img class=" mb-1" src="@/assets/coin.svg" width="16" alt="">
                </p>
                <p class="text-success">
                  Available free contests = 0
                </p>
              </div>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Entry Fee
                  <span class="text-dark">
                  5000
                  <img class=" mb-1 ml-1" src="@/assets/coin.svg" width="16" alt="">
                </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Apply Free Contest</label>
                  </div>
                  <span class="text-dark">
                  - 5000
                  <img class=" mb-1 ml-1" src="@/assets/coin.svg" width="16" alt="">
                </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-success">
                  To Pay
                  <span class="text-dark font-weight-bold">
                  0
                  <img class=" mb-1 ml-1" src="@/assets/coin.svg" width="16" alt="">
                </span>
                </li>
              </ul>
              <p class="text-center text-muted mt-4 mb-0">By joining this contest, you accept GO11's T&C</p>
              <button class="btn btn-brand-01 border-radius mt-2 mb-2">
                Confirm Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->

  </div>
</template>

<script>
import {Carousel, Slide} from "vue-carousel";

export default {
  name: "Contest",
  components: {
    Carousel,
    Slide
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
