<template>
  <div id="scroll_up">
    <!--preloader end-->
    <!--header section start-->
    <app-header></app-header>
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
      <!--     My Contest-->
      <app-my-contest></app-my-contest>
      <!--    End My Contest-->
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
import MyContest from "@/components/home/MyContest";

export default {
  name: 'Home',
  data() {
    return {}
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
    'app-faq-section': FAQSection,
    'app-my-contest': MyContest
  },
  computed: {},
  methods: {},
  mounted() {
    // auth_axios.get('/coin-packs').then(res => {
    //   console.log(res);
    // }).catch(err => {
    //   console.log(err);
    // })
  },
  watch: {}
}
</script>
<style>
</style>
