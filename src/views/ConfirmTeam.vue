<template>
  <div>

    <div class="main">

      <!--Matches section start-->
      <section class="promo-section vh-100 w-100 position-fixed contest_main_bg">
        <div class="container-fluid text-center h-100">
          <div class="row h-100">
            <div class="col-md-6 p-0 h-100 bg-light">
              <div class="contest_left h-100 team_create_header">
                <div class="bg-dark px-4 pt-3 pb-2">
                  <div class="d-flex justify-content-between pb-2">
                    <div class="go_back">
                      <a href="#"> <i class="fas fa-arrow-left"></i> </a>
                    </div>
                    <div class="contest_each_title">
                      <h5 class="text-danger mb-0">9h 43m left</h5>
                    </div>
                    <div class="go_back"><i class="fas fa-info-circle text-white ml-3" data-toggle="tooltip"
                                            data-placement="top" title="Tooltip on top"></i></div>
                  </div>
                  <div class="d-flex justify-content-between pb-4">
                    <div class="go_back">
                      <img src="@/assets/logo.png" width="28" alt=""/>
                    </div>
                    <div class="contest_each_title">
                      <h5 class="text-white mb-0">Choose Captain (C) & Vice Captain (VC)</h5>
                      <p class="text-white mb-0">Your Captain gets 2x points & Vice Captain gets 1.5x points</p>
                    </div>
                    <div class="go_back">

                    </div>
                  </div>
                </div>
                <div class="bg-light h-100">
                  <div class="overflow-auto h-75">
                    <div class="card-body green-bg text-left p-0">
                      <div class="tab-content" id="pills-tabContent">
                        <div class="form-group enter-team-name-fields p-3 mb-0">
                          <input type="text" class="form-control" name="" placeholder="Enter Team Name">
                        </div>
                        <div class="create_team_each create_team_each_header save_team_each  pl-3">
                          <div class="player_thumb">

                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="text-uppercase text-muted pb-2">
                                Players
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <a href="#" class="text-uppercase text-muted mb-0 pb-2">
                                Credits
                                <i class="ti-arrow-down"></i>
                              </a>
                            </div>
                            <div class="player_add_remove">
                              <div class="text-uppercase text-muted pb-2">
                                C/CV
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each selected pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#" class="captain-selected">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each selected pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#" class="vicecaptain-selected">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="create_team_each save_team_each  pl-3 mt-3">
                          <div class="player_thumb">
                            <img class="" src="@/assets/img/client-2.jpg" width="64" alt="">
                          </div>
                          <div class="player_buy_info">
                            <div class="player_name_each">
                              <div class="">
                                <p class="mb-0 d-block font-weight-bold">B Taylor</p>
                                <p class="text-danger mb-0 d-block">ZIM | <span
                                    class="text-uppercase text-muted">Keeper</span></p>
                              </div>
                            </div>
                            <div class="player_selby player_credits">
                              <p class="mb-0">32/2%</p>
                            </div>
                            <div class="player_add_remove">
                              <div class="align-self-center captain_vice_captain">
                                <a href="#">
                                  C
                                </a>
                                <a href="#">
                                  VC
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="team_create_btn position-absolute">
                          <button id="save_team_btn" class="btn btn-success border-radius mt-4 mb-2" disabled>Save
                            Team
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 field_map h-100">
              <div class="players_position">
                <div class="">
                  <div class="players_space_around">
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">Wicket Keepers</div>
                      <div class="players_position_align wicket_keepers">
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <span class="captain_batch">C</span>
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">Batsman</div>
                      <div class="players_position_align batsman_keepers">
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <span class="vicecaptain_batch">VC</span>
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">All Rounders</div>
                      <div class="players_position_align batsman_keepers">
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="players_position_each">
                      <div class="players_position_each_title text-uppercase">Bowlers</div>
                      <div class="players_position_align batsman_keepers">
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
                        </div>
                        <div class="players_position_align">
                          <div class="players_field_position">
                            <div class="">
                              <div class="players_position_profile_img">
                                <div class="profile_img_area">
                                  <div class="profile_img_body"
                                       :style="{backgroundImage: 'url(assets/img/client-2.jpg)'}"></div>
                                </div>
                              </div>
                            </div>
                            <div class="player_name_block">
                              <div class="player_name_block_each">Brain Lara</div>
                            </div>
                            <div class="player_credit_amount">10.0 Cr</div>
                          </div>
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
      <!--Matches section end-->

    </div>


  </div>
</template>

<script>
export default {
  name: "ConfirmTeam"
}
</script>

<style scoped>

</style>
