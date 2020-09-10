<template>
  <header id="header" class="header-main">
    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-md header-nav">

          <!--logo start-->
          <a class="navbar-brand" href="index.html">
            <img src="@/assets/logo.png" alt="logo" class="img-fluid"/>
          </a>
          <!--logo end-->

          <!--main menu start-->
          <ul class="navbar-nav ml-auto main-navbar-nav">
            <!--button start-->
            <li class="nav-item header-nav-last-item d-flex align-items-center">
              <a data-toggle="modal" href="#exampleModalCenter"
                 class="btn btn-outline-brand-01 btn-outline-white text-uppercase">Log In</a>
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
export default {
name: "Header"
}
</script>

<style scoped>

</style>
