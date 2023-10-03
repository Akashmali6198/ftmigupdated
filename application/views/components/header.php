<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Follow The Money Investor Group</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/dots.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- video popup -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <!--wiser notifyscript-->
    <script>!function () { if (window.t4hto4) console.log("WiserNotify pixel installed multiple time in this page"); else { window.t4hto4 = !0; var t = document, e = window, n = function () { var e = t.createElement("script"); e.type = "text/javascript", e.async = !0, e.src = "https://pt.wisernotify.com/pixel.js?ti=5mgulln8nz14f", document.body.appendChild(e) }; "complete" === t.readyState ? n() : window.attachEvent ? e.attachEvent("onload", n) : e.addEventListener("load", n, !1) } }();</script>
  
    <style>
      a.dashboards-links:hover {
        color: #78A343 !important;
      }
    </style>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->
    <div class="full-wh">
      <!-- STAR ANIMATION -->
      <div class="bg-animation">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div id='stars4'></div>
      </div>
      <!-- / STAR ANIMATION -->
    </div>
    <div class="page-wrapper">
      <!-- header-section start  -->
      <header class="header">
        <div class="header__bottom">
          <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
              <a class="site-logo site-title" href="<?= base_url("home"); ?>">
                <img src="assets/images/logo.png" width="100px" alt="site-logo">
              </a>
              <ul class="account-menu mobile-acc-menu">
                <li class="icon"> <?php if(!empty($this->session->userdata('user'))){ ?> <a href="<?php echo base_url("logout");?>" onclick="return confirm('Are you sure to logout？')">
                    <i class="las la-sign-out-alt"></i>
                  </a> <?php }else{ ?> 
                  <a onclick="return confirm('Please select INVESTOR or ISSUER')">
                    <i class="las la-user"></i>
                  </a> <?php } ?> </li>
              </ul> <?php if(!empty($this->session->userdata('user'))){ ?> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
              </button> <?php } ?> <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav main-menu m-auto"> <?php if($this->session->userdata('user_type')=="ISSUER"){ ?> <li>
                    <a href="<?php echo base_url("browse_events");?>">Open/Closed</a>
                  </li>
                  <li>
                    <a data-toggle="modal" data-target="#chatmodal">Chat </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url("event");?>">Live </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url("Social");?>">Social</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url("#");?>">Markets </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url("upcoming_webinar");?>">Upcoming Webinar </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url("speakers");?>">Speakers </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url("issuer-dashboard");?>">Dashboard </a>
                  </li> <?php } ?> <?php if($this->session->userdata('user_type')=="INVESTOR"){ ?> <li>
                    <a href="<?php echo base_url("browse_events");?>">Open/Closed</a>
                  </li>
                  <li>
                    <a href="
																						<?php echo base_url("Social");?>">Social </a>
                  </li>
                  <!--<li>-->
                  <!--  <a href="-->
																		<!--				<?php echo base_url("#");?>">Chat </a>-->
                  <!--</li>-->
                  <li>
                    <a href="
																						<?php echo base_url("sponsors");?>">Sponsorship </a>
                  </li>
                  <li>
                    <a href="
																						<?php echo base_url("companie");?>">Our Clients</a>
                  </li>
                  <li>
                    <a href="
																						<?php echo base_url("Conferences");?>">Conferences </a>
                  </li>
                  <li>
                    <a href="
																						<?php echo base_url("investor-dashboard");?>">Dashboard </a>
                  </li> <?php } ?>
                </ul>
                <div class="nav-right">
                  <ul class="account-menu ml-3">
                    <li class="icon"> <?php if(!empty($this->session->userdata('user'))){ ?> <a href="<?php echo base_url("logout");?>" onclick="return confirm('Are you sure to logout？')">
                        <i class="las la-sign-out-alt"></i>
                      </a> <?php }else{ ?> 
                      <a onclick="return confirm('Please select INVESTOR or ISSUER')">
                        <i class="las la-user"></i>
                      </a> <?php } ?> </li>
                  </ul> <?php if(!empty($this->session->userdata('user'))){ ?> <select class="select d-inline-block w-auto ml-xl-3"> <?php if($this->session->userdata('user_type')=="INVESTOR"){ ?> <option value="0">INVESTOR</option> <?php } ?> <?php if($this->session->userdata('user_type')=="ISSUER"){ ?> <option value="1">ISSUER</option> <?php } ?> </select> <?php } ?>
                </div>
              </div>
            </nav>
            <!--<nav class="navbar navbar-expand-xl p-0 align-items-center">-->
            <!--<a class="site-logo site-title" href="index.php"><img src="assets/images/logo.png" alt="site-logo"></a>-->
            <!--  <ul class="navbar-nav">-->
            <!--      <li><a class="dashboards-links" style="color:#fff;" href="
																	<?php echo base_url("investor-dashboard");?>">&nbsp;&nbsp;&nbsp;&nbsp;INVESTOR</a></li>-->
            <!--  </ul>-->
            <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
            <!--    <span class="menu-toggle">xcc</span>-->
            <!--  </button>-->
            <!--  <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
            <!--    <ul class="navbar-nav main-menu m-auto">-->
            <!--    </ul>-->
            <!--    <div class="nav-right">-->
            <!--      <ul class="account-menu ml-3">-->
            <!--        <li class="icon">-->
            <!--            <li><a class="dashboards-links" style="color:#fff;" href="
																	<?php echo base_url("issuer-dashboard");?>">&nbsp;&nbsp;&nbsp;&nbsp;ISSUER</a></li>-->
            <!--        </li>-->
            <!--      </ul> -->
            <!--    </div>-->
            <!--  </div> -->
            <!--</nav>-->
          </div>
        </div>
        <!-- header__bottom end -->
      </header>
      <!-- header-section end  -->
      <!--script-->
      <script>
        $(document).ready(function() {
          $('.select').on('change', function() {
            let url = ' < ? php echo base_url("issuer-dashboard"); ? > ';
            if (this.value == "0") {
              url = ' < ? php echo base_url("investor-dashboard"); ? > ';
            }
            window.location.href = url;
          });
        });
      </script>
      <!--script-->