<style>
  /* meadia query */
  @media (max-width: 768px) {
    #slider .carousel-item {
      height: 40vh !important;
    }

    h1 {
      font-size: 40px;
    }

    #slider .carousel-item .container {
      max-width: 100% !important;
    }

    img.speaker-image {
      height: 140px !important;
    }

    .speakerinfo {
      border: solid white 1px !important;
    }
  }

  /* media query */
  #slider .carousel-item {
    height: 80vh;
    background-size: cover;
    background-position: center;
  }

  #slider .carousel-caption {
    left: 5%;
    top: 50%;
    transform: translate(0, -50%);
    color: #fff;
    /*text-shadow: 1px 1px 2px rgba(0, 0, 0, .6);*/
  }

  #slider .caption-title {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 1rem;
  }

  #slider .caption-text {
    font-size: 1.5rem;
    line-height: 1.6;
    margin-bottom: 1rem;
  }

  #slider .carousel-item .container {
    max-width: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
  }

  #slider .carousel-item.active img {
    filter: brightness(80%);
  }

  #slider .carousel-item.active::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .padc {
    padding-top: 90px !important;
  }

  .slidetxt {
    padding-left: 10%;
  }

  .speaker {
    color: #78a343;
  }

  .nav-pills .nav-link {
    margin-bottom: 30px;
    padding: 20px;
    border: solid 2px gray;
  }

  .nav-pills .nav-link.active,
  .nav-pills .show>.nav-link {
    color: #fff;
    background-color: black;
    /*-webkit-box-shadow: -1px -1px 3px 3px rgba(120, 163, 67, 1);*/
    /*-moz-box-shadow: -1px -1px 3px 3px rgba(120, 163, 67, 1);*/
    /*box-shadow: -1px -1px 3px 3px rgba(120, 163, 67, 1);*/
    border: solid white 1px;
  }

  .col-md-9 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .speakercol {
    background-color: #010101;
    padding: 0px;
    /* -webkit-box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
-moz-box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
border:solid white 1px; */
  }

  img.speaker-image {
    width: 100% !important;
    /* height:400px; */
  }

  .pads {
    padding: 15px;
  }

  .speakerinfo {
    background-color: #1c1c1c;
    padding: 20px;
    border: solid white 1px;
    border-left: 0px;
  }

  .colorchange:hover {
    /*-webkit-box-shadow: -1px -1px 3px 3px rgba(120, 163, 67, 1);*/
    /*-moz-box-shadow: -1px -1px 3px 3px rgba(120, 163, 67, 1);*/
    /*box-shadow: -1px -1px 3px 3px rgba(120, 163, 67, 1);*/
  }
</style>
<section id="slider">
  <div class="container-fluid p-0 padc">
    <div class="row">
      <div class="col-md-12 p-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://online.hbs.edu/Style%20Library/api/resize.aspx?imgpath=/PublishingImages/overhead-view-of-business-strategy-meeting.jpg&w=1200&h=630')">
              <div class="container slidetxt">
                <!--<h1>Speakers</h1>-->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl in nibh eleifend lobortis. Duis nec felis leo. Mauris finibus metus vel lorem congue, eget aliquam massa ullamcorper.</p>-->
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://imageio.forbes.com/specials-images/imageserve/633a774a842d06ecd68286ff/0x0.jpg?format=jpg&width=1200')">
              <div class="container  slidetxt">
                <!--<h1>Speakers</h1>-->
                <!--<p>Aliquam lacinia mauris purus, a pharetra nisi faucibus vel. Quisque rhoncus convallis nisl, id rutrum tellus dignissim sed. Sed quis mollis lectus.</p>-->
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://assets.entrepreneur.com/content/3x2/2000/1677254550-GettyImages-1453843862.jpg')">
              <div class="container  slidetxt">
                <!--<h1>Speakers</h1>-->
                <!--<p>Maecenas interdum vel nisi vel sagittis. Integer tincidunt, tellus a dapibus mollis, nibh nulla hendrerit lacus, sed venenatis nunc ante vel quam.</p>-->
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- slider end -->
<div class="container" style="padding-top:5%;">
  <div class="row">
    <div class="col-md-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active colorchange" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
          <h3 class="speaker">Adam A. Rozencwajg <h3>
              <h6>Managing Partner</h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
          <h3 class="speaker">Aaron Mcbreairty <h3>
              <h6>Project Geologist</h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">
          <h3 class="speaker">Adrian Fleming <h3>
              <h6>CEO & Director</h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-4" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
          <h3 class="speaker">Alex Smith <h3>
              <h6>President & CEO, Director</h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-5" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
          <h3 class="speaker">Anthony Bottrill <h3>
              <h6>President & CEO, Director</h6>
        </a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-tab-1">
          <div class="company-hero-info">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 speakercol">
                  <div class="speaker-info">
                    <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" class="speaker-image entered lazyloaded" data-lazy-src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" data-ll-status="loaded">
                    <noscript>
                      <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" class="speaker-image" />
                    </noscript>
                    <div class="speaker-border"></div>
                    <h3 class="speaker pads">Abraham (Braam) Jonker</h3>
                    <p class="pads">Chief Financial Officer of Cypress Development</p>
                  </div>
                  <!--speaker-info-->
                </div>
                <!--end-col-->
                <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo">
                  <div class="speaker-bio-right" style="height: 100%;">
                    <div class="speaker-bio" id="company-bio">
                      <p class="e-company-sub-title"></p>
                      <p>Mr. Jonker is an accomplished financial leader in the mining industry with almost 30 years of experience. He recently served as CFO of Nevada Copper Corp, where he led the corporate finance functions as the company transitioned to project developer and into initial start-up of production. <br>
                        <br>Prior to his appointment as CFO, he also served as Interim CEO and Non-Executive Director of Nevada Copper. Mr. Jonker has played a pivotal role in several business recoveries and restructurings, was a key team member in management and at the board level in the strategic growth of a number of public companies and has participated, raised and overseen the raising of more than $750 million in the form of equity and debt instruments in the mining industry. <br>
                        <br>He is a registered Chartered Accountant in British Columbia, (Canada), England, Wales and South Africa. He is also a member of the Chartered Institute of Management Accountants in the United Kingdom and holds a Masters degree in South African and International Tax from the Rand Afrikaans University, South Africa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                  <!--cinfo-bg-->
                </div>
                <!--end-col-->
              </div>
              <!--end-row-->
            </div>
            <!--container-->
          </div>
        </div>
        <!-- tab2 -->
        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-tab-2">
          <div class="company-hero-info">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 speakercol">
                  <div class="speaker-info">
                    <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Aaron-Mcbreairty.jpeg" class="speaker-image" />
                    </noscript>
                    <div class="speaker-border"></div>
                    <h3 class="speaker pads">Abraham (Braam) Jonker</h3>
                    <p class="pads">Chief Financial Officer of Cypress Development</p>
                  </div>
                  <!--speaker-info-->
                </div>
                <!--end-col-->
                <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo">
                  <div class="speaker-bio-right" style="height: 100%;">
                    <div class="speaker-bio" id="company-bio">
                      <p class="e-company-sub-title"></p>
                      <p>Mr. Jonker is an accomplished financial leader in the mining industry with almost 30 years of experience. He recently served as CFO of Nevada Copper Corp, where he led the corporate finance functions as the company transitioned to project developer and into initial start-up of production. <br>
                        <br>Prior to his appointment as CFO, he also served as Interim CEO and Non-Executive Director of Nevada Copper. Mr. Jonker has played a pivotal role in several business recoveries and restructurings, was a key team member in management and at the board level in the strategic growth of a number of public companies and has participated, raised and overseen the raising of more than $750 million in the form of equity and debt instruments in the mining industry. <br>
                        <br>He is a registered Chartered Accountant in British Columbia, (Canada), England, Wales and South Africa. He is also a member of the Chartered Institute of Management Accountants in the United Kingdom and holds a Masters degree in South African and International Tax from the Rand Afrikaans University, South Africa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                  <!--cinfo-bg-->
                </div>
                <!--end-col-->
              </div>
              <!--end-row-->
            </div>
            <!--container-->
          </div>
        </div>
        <!-- tab3 -->
        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-tab-3">
          <div class="company-hero-info">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 speakercol">
                  <div class="speaker-info">
                    <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Adrian-Fleming.jpg" class="speaker-image" />
                    </noscript>
                    <div class="speaker-border"></div>
                    <h3 class="speaker pads">Abraham (Braam) Jonker</h3>
                    <p class="pads">Chief Financial Officer of Cypress Development</p>
                  </div>
                  <!--speaker-info-->
                </div>
                <!--end-col-->
                <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo">
                  <div class="speaker-bio-right" style="height: 100%;">
                    <div class="speaker-bio" id="company-bio">
                      <p class="e-company-sub-title"></p>
                      <p>Mr. Jonker is an accomplished financial leader in the mining industry with almost 30 years of experience. He recently served as CFO of Nevada Copper Corp, where he led the corporate finance functions as the company transitioned to project developer and into initial start-up of production. <br>
                        <br>Prior to his appointment as CFO, he also served as Interim CEO and Non-Executive Director of Nevada Copper. Mr. Jonker has played a pivotal role in several business recoveries and restructurings, was a key team member in management and at the board level in the strategic growth of a number of public companies and has participated, raised and overseen the raising of more than $750 million in the form of equity and debt instruments in the mining industry. <br>
                        <br>He is a registered Chartered Accountant in British Columbia, (Canada), England, Wales and South Africa. He is also a member of the Chartered Institute of Management Accountants in the United Kingdom and holds a Masters degree in South African and International Tax from the Rand Afrikaans University, South Africa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                  <!--cinfo-bg-->
                </div>
                <!--end-col-->
              </div>
              <!--end-row-->
            </div>
            <!--container-->
          </div>
        </div>
        <!-- tab4 -->
        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-tab-4">
          <div class="company-hero-info">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 speakercol">
                  <div class="speaker-info">
                    <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Alex-Smith.jpg" class="speaker-image" />
                    </noscript>
                    <div class="speaker-border"></div>
                    <h3 class="speaker pads">Abraham (Braam) Jonker</h3>
                    <p class="pads">Chief Financial Officer of Cypress Development</p>
                  </div>
                  <!--speaker-info-->
                </div>
                <!--end-col-->
                <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo">
                  <div class="speaker-bio-right" style="height: 100%;">
                    <div class="speaker-bio" id="company-bio">
                      <p class="e-company-sub-title"></p>
                      <p>Mr. Jonker is an accomplished financial leader in the mining industry with almost 30 years of experience. He recently served as CFO of Nevada Copper Corp, where he led the corporate finance functions as the company transitioned to project developer and into initial start-up of production. <br>
                        <br>Prior to his appointment as CFO, he also served as Interim CEO and Non-Executive Director of Nevada Copper. Mr. Jonker has played a pivotal role in several business recoveries and restructurings, was a key team member in management and at the board level in the strategic growth of a number of public companies and has participated, raised and overseen the raising of more than $750 million in the form of equity and debt instruments in the mining industry. <br>
                        <br>He is a registered Chartered Accountant in British Columbia, (Canada), England, Wales and South Africa. He is also a member of the Chartered Institute of Management Accountants in the United Kingdom and holds a Masters degree in South African and International Tax from the Rand Afrikaans University, South Africa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                  <!--cinfo-bg-->
                </div>
                <!--end-col-->
              </div>
              <!--end-row-->
            </div>
            <!--container-->
          </div>
        </div>
        <!-- tab3 -->
        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-tab-3">
          <div class="company-hero-info">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 speakercol">
                  <div class="speaker-info">
                    <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Adrian-Fleming.jpg" class="speaker-image" />
                    </noscript>
                    <div class="speaker-border"></div>
                    <h3 class="speaker pads">Abraham (Braam) Jonker</h3>
                    <p class="pads">Chief Financial Officer of Cypress Development</p>
                  </div>
                  <!--speaker-info-->
                </div>
                <!--end-col-->
                <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo">
                  <div class="speaker-bio-right" style="height: 100%;">
                    <div class="speaker-bio" id="company-bio">
                      <p class="e-company-sub-title"></p>
                      <p>Mr. Jonker is an accomplished financial leader in the mining industry with almost 30 years of experience. He recently served as CFO of Nevada Copper Corp, where he led the corporate finance functions as the company transitioned to project developer and into initial start-up of production. <br>
                        <br>Prior to his appointment as CFO, he also served as Interim CEO and Non-Executive Director of Nevada Copper. Mr. Jonker has played a pivotal role in several business recoveries and restructurings, was a key team member in management and at the board level in the strategic growth of a number of public companies and has participated, raised and overseen the raising of more than $750 million in the form of equity and debt instruments in the mining industry. <br>
                        <br>He is a registered Chartered Accountant in British Columbia, (Canada), England, Wales and South Africa. He is also a member of the Chartered Institute of Management Accountants in the United Kingdom and holds a Masters degree in South African and International Tax from the Rand Afrikaans University, South Africa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                  <!--cinfo-bg-->
                </div>
                <!--end-col-->
              </div>
              <!--end-row-->
            </div>
            <!--container-->
          </div>
        </div>
        <!-- tab5 -->
        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-tab-5">
          <div class="company-hero-info">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 speakercol">
                  <div class="speaker-info">
                    <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Anthony-Bottrill-P.Geo_.jpg" class="speaker-image" />
                    </noscript>
                    <div class="speaker-border"></div>
                    <h3 class="speaker pads">Abraham (Braam) Jonker</h3>
                    <p class="pads">Chief Financial Officer of Cypress Development</p>
                  </div>
                  <!--speaker-info-->
                </div>
                <!--end-col-->
                <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo">
                  <div class="speaker-bio-right" style="height: 100%;">
                    <div class="speaker-bio" id="company-bio">
                      <p class="e-company-sub-title"></p>
                      <p>Mr. Jonker is an accomplished financial leader in the mining industry with almost 30 years of experience. He recently served as CFO of Nevada Copper Corp, where he led the corporate finance functions as the company transitioned to project developer and into initial start-up of production. <br>
                        <br>Prior to his appointment as CFO, he also served as Interim CEO and Non-Executive Director of Nevada Copper. Mr. Jonker has played a pivotal role in several business recoveries and restructurings, was a key team member in management and at the board level in the strategic growth of a number of public companies and has participated, raised and overseen the raising of more than $750 million in the form of equity and debt instruments in the mining industry. <br>
                        <br>He is a registered Chartered Accountant in British Columbia, (Canada), England, Wales and South Africa. He is also a member of the Chartered Institute of Management Accountants in the United Kingdom and holds a Masters degree in South African and International Tax from the Rand Afrikaans University, South Africa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                  <!--cinfo-bg-->
                </div>
                <!--end-col-->
              </div>
              <!--end-row-->
            </div>
            <!--container-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>