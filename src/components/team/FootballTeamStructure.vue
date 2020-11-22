<template>
  <div class="col-md-6 field_map h-100">
    <div class="players_position">
      <div class="players_space_around">
        <div class="players_position_each">
          <div class="players_position_each_title text-uppercase">Goal Keeper</div>
          <div class="players_position_align wicket_keepers" v-if="selectedPlayers">
            <div class="players_position_align" v-for="(player,index) of selectedPlayers.goalkeeper" :key="index">
              <div class="players_field_position">
                <div class="">
                  <div class="players_position_profile_img">
                    <div class="profile_img_area">
                      <div class="profile_img_body"
                           :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                    </div>
                  </div>
                </div>
                <div class="player_name_block">
                  <div class="player_name_block_each">{{ player.name }}</div>
                </div>
                <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
              </div>
            </div>
          </div>
        </div>
        <div class="players_position_each">
          <div class="players_position_each_title text-uppercase">Defenders</div>
          <div class="players_position_align batsman_keepers" v-if="selectedPlayers">
            <div class="players_position_align" v-for="(player,index) of selectedPlayers.defender" :key="index">
              <div class="players_field_position">
                <div class="">
                  <div class="players_position_profile_img">
                    <div class="profile_img_area">
                      <div class="profile_img_body"
                           :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                    </div>
                  </div>
                </div>
                <div class="player_name_block">
                  <div class="player_name_block_each">{{ player.name }}</div>
                </div>
                <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
              </div>
            </div>
          </div>
        </div>
        <div class="players_position_each">
          <div class="players_position_each_title text-uppercase">Mid Fielders</div>
          <div class="players_position_align batsman_keepers" v-if="selectedPlayers">
            <div class="players_position_align" v-for="(player,index) of selectedPlayers.midfielder" :key="index">
              <div class="players_field_position">
                <div class="">
                  <div class="players_position_profile_img">
                    <div class="profile_img_area">
                      <div class="profile_img_body"
                           :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                    </div>
                  </div>
                </div>
                <div class="player_name_block">
                  <div class="player_name_block_each">{{ player.name }}</div>
                </div>
                <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
              </div>
            </div>
          </div>
        </div>
        <div class="players_position_each">
          <div class="players_position_each_title text-uppercase">Strikers</div>
          <div class="players_position_align batsman_keepers" v-if="selectedPlayers">
            <div class="players_position_align" v-for="(player,index) of selectedPlayers.striker" :key="index">
              <div class="players_field_position">
                <div class="">
                  <div class="players_position_profile_img">
                    <div class="profile_img_area">
                      <div class="profile_img_body"
                           :style="{backgroundImage: 'url('+encodeURI(imagePath+player.player_image)+')'}"></div>
                    </div>
                  </div>
                </div>
                <div class="player_name_block">
                  <div class="player_name_block_each">{{ player.name }}</div>
                </div>
                <div class="player_credit_amount">{{ player.credit_points }} Cr</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {mapGetters} from 'vuex';
import * as type from '@/store/type';
import {image_server_base_path} from '@/utils/enviornment_data';

export default {
  name: "FootballTeamStructure",
  data() {
    return {
      imagePath: image_server_base_path,
    }
  },
  computed: {
    ...mapGetters({selectedPlayers: type.SELECTED_TEAM_FOOTBALL_GETTER})
  }

}
</script>

<style scoped>

</style>
