      <!--footer start  -->
      <!-- footer section start -->
      <div class="footusm-line"></div>
      <style>
        @media (max-width: 768px) {
          .f-usm-menu li img {
            object-fit: contain;
            float: unset !important;
            width: 200px !important;
          }

          .list-unstyled {
            text-align: center !important;
          }

          h4.ft {
            text-align: center !important;
            margin-top: 32px !important;
            font-size: 20px !important;
          }

          .footer-logo img {
            max-height: 70px !important;
            margin-left: 50% !important;
          }

          ul,
          ol {
            text-align: center !important;
          }
        }

        /* footer media query */
        @media only screen and (max-width: 600px) {
          .f-usm-menu {
            display: block !important
          }

          .nav-pills .nav-link {
            width: 100%;
          }

          /* media query */
        }

        .f-usm-menu {
          list-style: none;
          padding: 0;
          display: flex;
          justify-content: flex-start;
          align-items: center;
        }

        .f-usm-menu li {
          margin-right: 1px;
        }

        .f-usm-menu li:last-child {
          margin-right: 0;
        }

        .f-usm-menu li a {
          text-decoration: none;
          color: white;
          padding: 29px;
          font-size: 20px;
        }

        .f-usm-menu li img {
          object-fit: contain;
          float: right;
          width: 150px;
        }

        .ftback {
          background-color: black;
        }

        .foot-logo {
          max-width: 70%;
        }
      </style>
      <Section>
        <div class="container ftback text-center">
          <div class="row">
            <div class="col-md-12">
              <hr style="border:solid gray 1px">
              <ul id="scrolling-wrapper" class="f-usm-menu" data-dragging="false">
                <li>
                  <a href="index.php">
                    <img src="assets/images/logo.png" class="foot-logo" alt="ftmig">
                  </a>
                </li>
         <!--       <li>-->
         <!--         <a href="-->
									<!--<?php echo base_url("login");?>">Signup/Login </a>-->
         <!--       </li>-->
                <li>
                  <a href="
									<?php echo base_url("About");?>">About </a>
                </li>
                <li>
                  <a href="
									<?php echo base_url("Invest");?>">Invest </a>
                </li>
                <li>
                  <a href="
									<?php echo base_url("Raise");?>">Raise </a>
                </li>
                <li>
                  <a href="
									<?php echo base_url("Host");?>">Host </a>
                </li>
                <li>
                  <a href="
									<?php echo base_url("Demo");?>">Demo </a>
                </li>
                <li>
                  <a href="
									<?php echo base_url("Pricing");?>">Pricing </a>
                </li>
                <li>
                  <a href="
									<?php echo base_url("Security");?>">Security </a>
                </li>
              </ul>
              <hr style="border:solid gray 1px">
            </div>
          </div>
        </div>
      </Section>
      <!-- footer above -->
      <div class="footer__bottom">
        <div class="container" style="padding:30px">
          <div class="row">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="footer-pad">
                    <a href="#0" class="footer-logo">
                      <img src="assets/images/logo.png" alt="image">
                    </a>
                    <ul class="list-unstyled">
                      <li>
                        <a href="
														<?php echo base_url("#");?>">
                        </a>
                      </li>
                      <li>
                        <a href="
														<?php echo base_url("browse_events");?>" style="color: aliceblue;">Events </a>
                      </li>
                      <li>
                        <a href="
														<?php echo base_url("event");?>" style="color: aliceblue;">Live </a>
                      </li>
                      <!--<li><a href="
												<?php echo base_url("tv");?>" style="color: aliceblue;">TV</a></li>  -->
                      <li>
                        <a href="
														<?php echo base_url("#");?>" style="color: aliceblue;">Markets </a>
                      </li>
                      <!-- <li><a href="Magazine.php" style="color: aliceblue;" >Magazine</a></li>  -->
                      <li>
                        <a href="
														<?php echo base_url("Twitter");?>" style="color: aliceblue;">Twitter </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="footer-pad">
                    <h4 class="ft">INVESTMENT DISCOVERY PLATFORM</h4>
                    <br>
                    <ul class="list-unstyled">
                      <li>
                        <a href="
															<?php echo base_url("companie");?>" style="color: aliceblue;">Companies </a>
                      </li>
                      <li>
                        <a href="
															<?php echo base_url("speakers");?>" style="color: aliceblue;">Speakers </a>
                      </li>
                      <li>
                        <a href="
															<?php echo base_url("Conferences");?>" style="color: aliceblue;">Conference </a>
                      </li>
                      <li>
                        <a href="
															<?php echo base_url("#");?>" style="color: aliceblue;">Chat </a>
                      </li>
                      <li>
                        <a href="
															<?php echo base_url("Strategy");?>" style="color: aliceblue;">Strategy </a>
                      </li>
                      <li>
                        <a href="
															<?php echo base_url("Summits");?>" style="color: aliceblue;">Summits </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="footer-pad">
                    <h4 class="ft">INVESTOR EXPERIENCE PLATFORM</h4>
                    <br>
                    <ul class="list-unstyled">
                      <li>
                        <a href="
																<?php echo base_url("Ads");?>" style="color: aliceblue;">Ads </a>
                      </li>
                      <li>
                        <a href="
																<?php echo base_url("Web");?>" style="color: aliceblue;">Web </a>
                      </li>
                      <li>
                        <a href="
																<?php echo base_url("Creative");?>" style="color: aliceblue;">Creative </a>
                      </li>
                      <li>
                        <a href="
																<?php echo base_url("Ixo");?>" style="color: aliceblue;">IXO </a>
                      </li>
                      <li>
                        <a href="
																<?php echo base_url("Analytics");?>" style="color: aliceblue;">Analytics </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <h4 class="ft">OFFICE CONTACT</h4>
                  <br>
                  <ul class="social-network social-circle">
                    <li>
                      <a href="#" class="icoFacebook" title="Facebook" style="color: aliceblue;">(833) 544-4456</a>
                    </li>
                    <li>
                      <a href="#" class="icoLinkedin" title="Linkedin" style="color: aliceblue;">friends@FTMIG.com</a>
                    </li>
                    <li>
                      <a href="#" style="color: aliceblue;">#202-1200 Bay St., Toronto, Ontario, Canada, M5R 2A5</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 copy"></div>
              </div>
            </div>
            <div class="col-md-6 text-md-left text-center">
              <hr style="color:#fff">
              <br>
              <p>© 2023 <a href="index.php" class="base--color">Follow The Money Investor Group</a>. All rights reserved </p>
            </div>
            <div class="col-md-6">
              <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                <li>
                  <a href="#0" data-toggle="tooltip" data-placement="top" title="facebook">
                    <i class="lab la-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#0" data-toggle="tooltip" data-placement="top" title="twitter">
                    <i class="lab la-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest">
                    <i class="lab la-pinterest-p"></i>
                  </a>
                </li>
                <li>
                  <a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest">
                    <i class="lab la-pinterest-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </footer>
      <!-- footer section end -->
      </div>
      <!-- page-wrapper end -->
      <!-- jQuery library -->
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
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />-->
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>-->
      <script>
        $(document).ready(function() {
          $('.card').on('click', function() {
            var videoUrl = $(this).data('video');
            $.magnificPopup.open({
              items: {
                src: 'https://www.youtube.com/watch?v=' + videoUrl
              },
              type: 'iframe',
              iframe: {
                markup: ' < div class = "mfp-iframe-scaler" > ' +
                ' < div class = "mfp-close" > < /div>' +
                ' < iframe class = "mfp-iframe"
                frameborder = "0"
                allowfullscreen > < /iframe>' +
                ' < /div>',
                patterns: {
                  youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1&mute=1&controls=0'
                  }
                },
                srcAction: 'iframe_src',
              }
            });
          });
        });
      </script>
      </body>
      </html>
      
      
<div class="modal fade" id="chatmodal" tabindex="-1" role="dialog" aria-labelledby="chatmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("chat-with-carl"); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label style="color:black;">BOOK A CONSULT TO DISCUSS HOW YOUR COMPANY CAN REACH MORE INVESTORS</label>
            <input type="email" id="client_email" name="client_mail" class="form-control" style="color:black;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
          </div>
          <button type="submit" class="cmn-btn">Submit</button>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="cmn-btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>