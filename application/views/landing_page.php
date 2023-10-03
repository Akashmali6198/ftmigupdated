<style>
.hero {
    padding-top: 250px;
    padding-left:400px;
    padding-right:400px;
    /*padding-bottom:180px !important;*/
    /*padding-bottom: 150px;*/
    position: relative;
      background-size: 100% 100%;
}
.row.text-center.p-4.inner-div {
    padding:100px !important;
    
}

 /* mobile responsive meadia query */
   @media only screen and (max-width: 600px){
   .hero{
       padding-top:215px !important;
       padding-left:50px;
       padding-right:50p;
       padding-bottom:215px !important;
        }
    .row.text-center.p-4.inner-div {
        padding:50px !important;
        padding-right:100 !important;
        display:flex;
        text-align:center;
    }
    .hero__content {
    /* text-align: center; */
    display: grid;
    }
    .container {
    width: 100%;
    padding-right: 0px;
    padding-left: 8px;
    margin-right: auto;
    margin-left: auto;
    }
   }
   
    /* desktop ios responsive meadia query */
   /*@media screen and (max-width:1920px){*/
   /*.hero{*/
   /*    padding-top:440px;*/
   /*    padding-left:50px;*/
   /*    padding-right:50px;*/
   /*    padding-bottom:440px;*/
   /*     }*/
   /*}*/
 
    /*@media screen and (min-width: 1080px) and (max-width: 1920px) {*/
    /* .hero{*/
    /*   padding-top:300px !important;*/
    /*   padding-left:50px !important;*/
    /*   padding-right:50px !important;*/
    /*   padding-bottom:300px !important;*/
    /*    }*/
    /*}*/
 
   /* home page mobile */
   @media (max-width: 768px) {
   .home-network p {
   text-align:center;
   }
   .home-network h2 {
   font-size:37px !important;
   text-align:center;
   }
   .row{
   margin-right: unset;
   margin-left: unset;
   }
   span.text-white.font-weight-normal {
   font-size: 23px !important;
   }
   .hero__title {
   font-size: 35px !important;
   
   }
   .hs-scrolling-debate h1{
   font-size:28px !important;
   }
   .investor-card__thumb {
   width: 100%;
   min-height: 125px;
   }
   .p-5{
   padding:2%!important;
   margin-top:2%;
   }
   } 
   /* media query */
</style>
<!-- hero start -->
<section class="hero bg_img" data-background="" style="background-size:cover;">
   <div class="container">
      <div class="row text-center p-4 inner-div" style="background-color:#0000009c;">
         <div class="col-xl-12 col-lg-8">
            <div class="hero__content">
               <!--<h2 class="hero__title"><span class="text-white font-weight-normal">Your network is your net worth</span><br><b class="base--color">INVEST IN YOUR NETWORK</b></h2>-->
               <h2>Are You An</h2>
               <a href="<?= base_url("login"); ?>" class="cmn-btn text-uppercase font-weight-600 mt-4 investor-issue-btn">INVESTOR</a>
               <a href="<?= base_url("login"); ?>" class="cmn-btn text-uppercase font-weight-600 mt-4 investor-issue-btn">ISSUER</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- hero end -->
 <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/wow.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/js/app.js"></script>



  <!-- Your HTML code for the video cards goes here -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
