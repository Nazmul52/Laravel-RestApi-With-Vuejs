<template>
  <div>
    <!--header section start-->
    <app-header></app-header>
    <!--header section end-->

    <div class="main">

      <!--hero section start-->
      <section class="ptb-120 overflow-hidden sub_banner primary-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 mx-auto text-center">
              <div class="hero-slider-content">
                <!-- <img class="rounded-circle mb-3" src=" " width="120" alt=""> -->

                <h3 class="text-warning mb-0">{{ getUserData.name }}  </h3>
                <p class="mb-0 text-white">{{ getUserData.phone }}</p>
                <p class="text-white d-inline-block pb-2 account_email_border">{{ getUserData.email }}</p>
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
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="section-heading">
                <h3 class="text-white">Account Information</h3>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-9">
              <!-- my account first block start -->
              <div class="bg-white my_acccount_info p-4 mb-3">
                <div class="row">
                  <div class="col-md-4 border-right">
                    <div class="deposite_coin">
                      <img class="mb-2" src="@/assets/coin.svg" width="24" alt="">
                      <h2 class="mb-0">{{ getUserData.metadata.total_coins }} </h2>
                      <p class="text-muted">Deposit Coins</p>
                      <hr class="mx-5">
                      <button type="button" class="btn btn-sm btn-warning" name="button" data-toggle="modal"
                              data-target="#Addcoin_modal">Add Coins
                      </button>
                      <a href="#" class="text-warning text-underline text-uppercase mt-3 mb-0 d-block"
                         data-toggle="modal" data-target="#Coinlog_modal"><u>Coins Log</u></a>
                    </div>
                  </div>
                  <div class="col-md-4 border-right">
                    <div class="deposite_coin">
                      <img class="mb-2" src="@/assets/taka.png" width="18" alt="">
                      <h2 class="mb-0">{{ getUserData.metadata.total_cash }}</h2>
                      <p class="text-muted">Deposite Coins</p>
                      <hr class="mx-5">
                      <button type="button" class="btn btn-sm btn-success" name="button" data-toggle="modal"
                              data-target="#Redeem_modal">Redeem Coins
                      </button>
                      <a href="#" class="text-success text-underline text-uppercase mt-3 mb-0 d-block"
                         data-toggle="modal" data-target="#Withdraw_modal"><u>Withdraw</u></a>
                    </div>
                  </div>
                  <div class="col-md-4  align-self-center">
                    <div class="withdraw_pending h-100">
                      <p class="text-success mb-0">Pending Withdraw</p>
                      <ul>
                        <li>{{ getUserData.metadata.total_pending_requests}}</li>
                     <!--    <li>3</li>
                        <li>7</li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- my account first block end -->

              <!-- my account second block start -->
              <div class="bg-white my_acccount_info px-4 py-3 mb-3">
                <div class="d-flex justify-content-between">
                  <div class="">
                    <img class="mr-2" src="@/assets/giftbox.png" alt=""> Your available free contests= <span
                      class="text-warning">{{ getUserData.metadata.referral_contest_unlocked}}</span>
                    <i class="fas fa-info-circle text-muted ml-3" data-toggle="tooltip" data-placement="top"
                       title="Tooltip on top"></i>
                  </div>
                  <div class="">
                    <img class="mr-2" src="@/assets/man.png" alt="">
                    <a href="#" class="text-warning"><u>Refer to a Friend</u></a>
                  </div>
                </div>
              </div>
              <!-- my account second block end -->

              <!-- my account third block start -->
              <h3 class="mt-5">Playing History</h3>
              <div class="bg-white my_acccount_info pb-4 mb-5">
                <ul class="nav nav-tabs justify-content-center mt-3" id="myTab" role="tablist">
                  <li class="nav-item text-center">
                    <a class="nav-link text-uppercase font-weight-bold active" id="Cricket-tab" data-toggle="tab"
                       href="#Cricket" role="tab" aria-controls="Cricket" aria-selected="true">
                      Cricket
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" id="Football-tab" data-toggle="tab"
                       href="#Football" role="tab" aria-controls="Football" aria-selected="false">
                      Football
                    </a>
                  </li>
                </ul>
                <hr>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="Cricket" role="tabpanel" aria-labelledby="Cricket-tab">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="deposite_coin mt-2">
                          <img class="mb-2" src="@/assets/taka.png" width="20" alt="">
                          <h2 class="mb-0">500</h2>
                          <p class="text-muted mb-0">Contest</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="deposite_coin mt-2">
                          <img class="mb-2" src="@/assets/taka.png" width="20" alt="">
                          <h2 class="mb-0">500</h2>
                          <p class="text-muted mb-0">Top Rank</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="deposite_coin mt-2">
                          <img class="mb-2" src="@/assets/taka.png" width="20" alt="">
                          <h2 class="mb-0">500</h2>
                          <p class="text-muted mb-0">Matches</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Football" role="tabpanel" aria-labelledby="Football-tab">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="deposite_coin mt-2">
                          <img class="mb-2" src="@/assets/taka.png" width="20" alt="">
                          <h2 class="mb-0">500</h2>
                          <p class="text-muted mb-0">Contest</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="deposite_coin mt-2">
                          <img class="mb-2" src="@/assets/taka.png" width="20" alt="">
                          <h2 class="mb-0">500</h2>
                          <p class="text-muted mb-0">Top Rank</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="deposite_coin mt-2">
                          <img class="mb-2" src="@/assets/taka.png" width="20" alt="">
                          <h2 class="mb-0">500</h2>
                          <p class="text-muted mb-0">Matches</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- my account third block end -->

              <a href="#" class="btn btn-brand-01 mb-2">Edit My Profile</a><br>
              <a href="#" class="text-danger">Verify Your Profile <i class="fas fa-info-circle text-danger ml-1"
                                                                     data-toggle="tooltip" data-placement="top"
                                                                     title="Tooltip on top"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!--Matches section end-->

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

    <!-- Withdraw Modal -->
    <div class="modal fade" id="Withdraw_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="withdraw-close-modal">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/withdraw.svg" class="img-fluid mb-3" width="40" alt="Logo">
                </a>
                <h4 class="mb-3">Withdraw Request</h4>
                <p class="text-muted">The minimum withdrawal amount is <span class="text-success font-weight-bold">250 BDT</span>
                  and the maximum amount is <span class="text-success font-weight-bold">4999 BDT</span></p>
                <div class="alert alert-warning" role="alert">
                  <i>"Personal bKash number is needed while withdrawing the wining prize"</i>
                </div>
              </div>
              <form class="login-signup-form"  v-on:submit.prevent="withdrawRequest">
                <small class="text-danger" v-if="errors.message"> {{ errors.message}} </small>
                <div class="form-group">

                  <!-- Label -->
                  <label class="pb-1">
                    Enter Amount (BDT)
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                                        <span>
                      <img class="d-block" src="@/assets/taka.png" width="12" alt="">
                    </span>
                    </div>
                    <input type="number" v-model="form.amount" class="form-control" placeholder="Write amount in BDT">
                  </div>
                </div>
                <div class="form-group">
                  <!-- Label -->
                  <label class="pb-1">
                    bKash Number (Personal)
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                      <span class="ti-mobile"></span>
                    </div>
                    <input type="text" v-model="form.transaction_number" class="form-control" placeholder="E.g. 01XXXXXXXXX">
                  </div>
                </div>
                <div class="form-group">
                  <!-- Label -->
                  <label class="pb-1">
                    Confirm bKash Number
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                      <span class="ti-mobile"></span>
                    </div>
                    <input type="text" v-model="form.confirm_number" class="form-control" placeholder="E.g. 01XXXXXXXXX">

                  </div>
                  <small class="text-danger" v-if="errors.confirm_number"> {{ errors.confirm_number}} </small>

                </div>
                <!-- Submit -->
                <button type="submit" class="btn btn-block btn-brand-01 border-radius mt-4 mb-3">
                  Send Withdraw Request
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->
    <!-- Redeem Modal -->
    <div class="modal fade" id="Redeem_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="redeem-coin-close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/redeem.svg" class="img-fluid mb-3" width="80" alt="Logo">
                </a>
                <h4 class="mb-4">Redeem Coin</h4>
                <p class="text-muted">Proin Ac Quam Et Lectus Vestibulum Blandit. Nunc Maximus Nibh At Placerat
                  Tincidunt. Nam Sem Lacus, Ornare Non Ante Sed, Ultricies Fringilla Massa.</p>
                <h4 class="text-warning font-weight-bold mt-3">1 BDT = 50 Coins</h4>
              </div>
              <form class="login-signup-form mt-4" v-on:submit.prevent="redeemCoin">
                <small class="text-danger" v-if="errors.message"> {{ errors.message}} </small>

                <div class="form-group">
                  <!-- Label -->
                  <label class="pb-1">
                    Enter Amount (BDT)
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                                        <span>
                      <img class="d-block" src="@/assets/taka.png" width="12" alt="">
                    </span>
                    </div>
                    <input type="number" class="form-control" placeholder="Write amount in BDT to redeem coins" v-model="redeem.amount">
                  </div>
                </div>
                <!-- Submit -->
                <button class="btn btn-block btn-brand-01 border-radius mt-4 mb-3">
                  Redeem Coins Now
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->
    <!-- Coin Log Modal -->
    <div class="modal fade" id="Coinlog_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap text-center p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/coins.svg" class="img-fluid mb-3" width="60" alt="Logo">
                </a>
                <h4 class="mb-4">Coins Log</h4>
                <p class="text-warning mt-3">Last {{ coin_logs.length}} coins log available*</p>
              </div>
              <div class="coin_logs bg-light px-3 rounded-lg">
                <div class="d-flex justify-content-between coin_log_each pt-3" v-for="coin in coin_logs" :key="coin.id">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">{{ coin.title }}</h5>
                    <p class="text-muted">{{ coin.description }}</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-success">
                      + {{ coin.coin}}
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">{{ coin.log_time }}</small>
                  </div>
                </div>
<!--                 <div class="d-flex justify-content-between coin_log_each pt-3">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">Promo Code</h5>
                    <p class="text-muted">You have availed promo code offer</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-success">
                      + 1000
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">Feb 19, 08:23 AM</small>
                  </div>
                </div>
                <div class="d-flex justify-content-between coin_log_each pt-3">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">Promo Code</h5>
                    <p class="text-muted">You have availed promo code offer</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-danger">
                      - 1000
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">Feb 19, 08:23 AM</small>
                  </div>
                </div>
                <div class="d-flex justify-content-between coin_log_each pt-3">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">Promo Code</h5>
                    <p class="text-muted">You have availed promo code offer</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-danger">
                      - 1000
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">Feb 19, 08:23 AM</small>
                  </div>
                </div>
                <div class="d-flex justify-content-between coin_log_each pt-3">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">Promo Code</h5>
                    <p class="text-muted">You have availed promo code offer</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-success">
                      + 1000
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">Feb 19, 08:23 AM</small>
                  </div>
                </div>
                <div class="d-flex justify-content-between coin_log_each pt-3">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">Promo Code</h5>
                    <p class="text-muted">You have availed promo code offer</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-success">
                      + 1000
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">Feb 19, 08:23 AM</small>
                  </div>
                </div>
                <div class="d-flex justify-content-between coin_log_each pt-3">
                  <div class="coin_log_left text-left">
                    <h5 class="mb-1">Promo Code</h5>
                    <p class="text-muted">You have availed promo code offer</p>
                  </div>
                  <div class="coin_log_right text-right">
                    <h5 class="mb-1 text-danger">
                      - 1000
                      <img src="@/assets/coin.svg" width="18" alt="">
                    </h5>
                    <small class="text-muted">Feb 19, 08:23 AM</small>
                  </div>
                </div> -->
              </div>
              <button class="btn btn-warning border-radius mt-4 mb-3">
                Get Coins Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->
    <!-- Add Coin Modal -->
    <div class="modal fade" id="Addcoin_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-signup-wrap p-3">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="login-signup-header text-center">
                <a href="index.html">
                  <img src="@/assets/coins.svg" class="img-fluid mb-3" width="60" alt="Logo">
                </a>
                <h4 class="mb-4">Add Coins</h4>
                <p class="text-muted">Proin Ac Quam Et Lectus Vestibulum Blandit. Nunc Maximus Nibh At Placerat
                  Tincidunt. Nam Sem Lacus, Ornare Non Ante Sed, Ultricies Fringilla Massa.</p>
                <h4 class="text-warning font-weight-bold mt-3">1 BDT = 50 Coins</h4>
              </div>
              <form class="login-signup-form mt-4 text-center" action="index-login.html">
                <div class="form-group text-left">
                  <!-- Label -->
                  <label class="pb-1">
                    Enter Amount (BDT)
                  </label>
                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <div class="input-icon">
                                        <span>
                      <img class="d-block" src="@/assets/taka.png" width="12" alt="">
                    </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Write amount in BDT to get coins">
                  </div>
                </div>
                <!-- Submit -->
                <button class="btn btn-success border-radius mt-2 mb-3">
                  Add Coins Now
                </button>
              </form>
              <div class="coins_pack mt-4">
                <h5 class="text-uppercase">Available Coins Pack</h5>
                <div class="owl-carousel owl-theme coins_pack_carousel custom-nav">
                  <div class="item coins_pack_item text-uppercase">
                    <input type="radio" id="coins1" name="coins_pack_offer">
                    <label for="coins1" class="font-weight-bold text-center py-3 px-4">
                      <img class="d-block mx-auto" src="@/assets/coin-offer.png" width="52" alt="">
                      300 Coins
                      <del>৳60 BDT</del>
                      <span class="d-block text-success">৳55 BDT</span>
                    </label>
                  </div>
                  <div class="item coins_pack_item text-uppercase">
                    <input type="radio" id="coins2" name="coins_pack_offer">
                    <label for="coins2" class="font-weight-bold text-center py-3 px-4">
                      <img class="d-block mx-auto" src="@/assets/coin-offer.png" width="52" alt="">
                      300 Coins
                      <del>৳60 BDT</del>
                      <span class="d-block text-success">৳55 BDT</span>
                    </label>
                  </div>
                  <div class="item coins_pack_item text-uppercase">
                    <input type="radio" id="coins3" name="coins_pack_offer">
                    <label for="coins3" class="font-weight-bold text-center py-3 px-4">
                      <img class="d-block mx-auto" src="@/assets/coin-offer.png" width="52" alt="">
                      300 Coins
                      <del>৳60 BDT</del>
                      <span class="d-block text-success">৳55 BDT</span>
                    </label>
                  </div>
                  <div class="item coins_pack_item text-uppercase">
                    <input type="radio" id="coins4" name="coins_pack_offer">
                    <label for="coins4" class="font-weight-bold text-center py-3 px-4">
                      <img class="d-block mx-auto" src="@/assets/coin-offer.png" width="52" alt="">
                      300 Coins
                      <del>৳60 BDT</del>
                      <span class="d-block text-success">৳55 BDT</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->
  </div>
</template>

<script>
import Header from '@/components/home/Header';
// import * as type from '@/store/type';
import {image_server_base_path} from '@/utils/enviornment_data';
// import {mapGetters} from 'vuex';
import auth_axios from '@/http/axios/http-auth';
// import axios from 'axios';

export default {
  name: "UserProfile",
  data() {
    return {
      file_path: image_server_base_path,
      coin_logs: [],
      form: {
        transaction_number: null,
        amount: null,
        confirm_number: null
      },
      redeem: {
        amount: null
      },
      errors: {
        confirm_number : null,
        message: null
      },
      getUserData: {
        metadata : {
            total_coins: 0,
            total_cash: 0,
            total_pending_requests: 0,
        }
      },


    }
  },
  methods:{



    getCoinLogs() {
      auth_axios(`/user/coins-log?lang=en`).then(res => res.data.data).then(res => {
        this.coin_logs = res;
      });
    },
    withdrawRequest(){
      if(this.form.transaction_number != this.form.confirm_number ){
        this.errors.confirm_number = 'Confirmation Bkash Number does not match.';
      }else{
        auth_axios.post(`/withdraw-request`, this.form).then(res => {
            if(res.data.status == 1){
                this.$noty.success(res.data.message);
                document.querySelector('#withdraw-close-modal').click();
            }else{
                this.errors.message = res.data.message;
                
            }
          
        });
      }
      
    },

    redeemCoin(){
    
        auth_axios.post(`/redeem-coin`, this.redeem).then(res => {
            if(res.data.status == 1){
                this.$noty.success(res.data.message);
                document.querySelector('#redeem-coin-close').click();
                this.getLoginUserData();
                this.redeem.amount = '';
            }else{
                this.errors.message = res.data.message;
                
            }
          
        });
      
    },

    getLoginUserData(){
        auth_axios('user').then(res => {
            this.getUserData = res.data.data;
        })
    }
  },
  components: {
    'app-header': Header,
  },
  computed: {
    // ...mapGetters({
    //   getUserData: type.USER_DATA_GETTER
    // }),

  },
  mounted(){
    this.getLoginUserData();
    this.getCoinLogs();
  },
 
}
</script>

<style scoped>

</style>
