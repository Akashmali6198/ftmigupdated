<style>
  @media (max-width: 768px) {
    .card-medium-img.cmi-not-car {
      padding: 14px !important;
    }

    .banner {
      height: 300px !important;
    }
  }

  /* media query */
  /* banner style */
  .banner {
    position: relative;
    text-align: center;
    height: 500px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-left: 100px;
    background: url('assets/images/conference.jpg') no-repeat center center;
    background-size: cover;
  }

  .banner h1 {
    color: #fff;
    font-size: 4rem;
    font-weight: bold;
    margin: 0;
    /* position: relative; */
    text-align: center;
    z-index: 1;
  }
</style>
<section>
  <div class="container-fluid banner overlay">
    <h1>Events</h1>
  </div>
</section>
<!-- Events section start -->
<!-- events section start -->
<style>
  h2.sixip-latest-events {
    font-family: Playfair Display;
    font-style: normal;
    font-weight: 900;
    font-size: 36px;
    line-height: 50px;
    text-align: center;
    color: #fff;
    position: relative;
  }

  .col-card-es {
    padding: 10px;
  }

  .card-medium-single-event {
    padding: 20px;
    position: relative;
  }

  .card.event-card-medium.h-100 p.event-card-c-name {
    height: 30px;
    overflow: hidden;
    font-size: 12px;
    margin-bottom: 10px;
  }

  .card.event-card-medium.h-100 p.event-card-c-name {
    height: 30px;
    overflow: hidden;
    font-size: 12px;
    margin-bottom: 10px;
  }

  p.event-card-c-name:before {
    position: absolute;
    content: "";
    left: 0;
    top: 2px;
    width: 12px;
    height: 12px;
    background: #78a343;
  }

  h4.card-medium-title {
    height: 100px;
    overflow: hidden;
    margin-bottom: 30px;
  }

  h4.card-medium-title {
    font-family: Roboto;
    font-style: normal;
    font-weight: 700;
    font-size: 17px;
    line-height: 26px;
    color: #fff;
  }

  .card-medium-footers {
    width: 100%;
    display: flex;
    align-items: center;
  }

  p.event-card-c-name {
    font-family: Playfair Display;
    font-style: normal;
    font-weight: 900;
    font-size: 14px;
    line-height: 14px;
    text-transform: uppercase;
    color: #fff;
    position: relative;
    padding-left: 20px;
    min-height: 15px;
  }

  .card-medium-footers p.event-date,
  .card-medium-footers p.event-time {
    letter-spacing: .3px;
    margin-bottom: 0;
    font-size: 12px;
  }

  p.event-date {
    padding: 7px;
    background: #000;
    width: 135px;
    border: 1px solid #78a343;
    max-height: 31px;
    color: white;
    font-weight: 700;
  }

  .card-medium-footers i.far.fa-clock {
    margin-right: 4px;
    top: 3px;
  }

  .card-medium-footers p.event-time {
    padding-left: 7px;
    text-align: right;
    bottom: 3px;
    position: relative;
    color: white;
  }

  img.las.la-calendar {
    color: #78a343;
  }

  .latest-btn-holder {
    margin: 45px auto 0 auto;
    display: block;
    text-align: center;
  }

  .sixip-btn-gold {
    background: #000;
    border: 1px solid #78a343;
    border-radius: 4px;
    font-family: Roboto;
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    text-transform: uppercase;
    color: #fff;
    padding: 10px 25px;
    transition: all .3s ease;
  }
</style>
<script>
  // A $( document ).ready() block.
  $(document).ready(function() {
    console.log("ready!");

    function getConfernceId(title, date) {
      document.getElementById("conf_title").value = title;
      document.getElementById("conf_date").value = date;
    }
    $('.test').click(function(e) {
      if ($(this).data('id') == 2) {
        $('#past-event').css("display", "flex");
        $('#upcoming-event').css("display", "none");
      }
      if ($(this).data('id') == 1) {
        $('#past-event').css("display", "none");
        $('#upcoming-event').css("display", "flex");
      }
    });
    //$('#btn2').data('id', qwe);
  });
</script>
<section class="sixip-home-events-wrap" style="padding:3%;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <h2 class="sixip-latest-events">ALL Events
          <hr style="border:solid 2px #78a343;width:15%">
          <div class="row">
              <button type="button" data-id="1" class="test cmn-btn btn-sm text-uppercase font-weight-600 mt-1 m-3">OPEN SOURCED</button>
              <button type="button" data-id="2" class="test cmn-btn btn-sm text-uppercase font-weight-600 mt-1 m-3">CLOSED SOURCED</button>
          </div>
        </h2>
      </div>
      <!--end-col-->
    </div>
    <!--row-->
    <div class="row sixip-home-events" id="upcoming-event">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" rel="bookmark" title="SolGold Market Update and Live Q&#038;A" onclick="playVideo()">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" src="https://www.youtube.com/embed/bTlDMnaWRhA" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">SolGold </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">SolGold Market Update and Live Q&#038;A</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img src="" class="las la-calendar">Jul 20, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>8:00 am
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" SolGold Market Update and Live Q&#038;A","Jul 20, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
      <!--***************************************************************************************************************************************-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" title="Chesapeake Gold Market Update + Live Q&#038;A">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" id="videoFrame" src="https://www.youtube.com/embed/7nHG0yZ7hj8" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">Chesapeake Gold </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">Chesapeake Gold Market Update + Live Q&A</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img class="las la-calendar">Jul 10, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>2:00 pm
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" Chesapeake Gold Market Update + Live Q&A","Jul 10, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
      <!--***************************************************************************************************************************************-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" rel="bookmark" title="High-Interest Rates: Net-Good or a Detriment for Mining?">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" id="videoFrame" src="https://www.youtube.com/embed/1LVUGQaZg9M" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">Fireweed Metals Bunker Hill Mining , Galantas Gold </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">High-Interest Rates: Net-Good or a Detriment for Mining?</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img class="las la-calendar">Jul 06, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>10:00 am
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" High-Interest Rates: Net-Good or a Detriment for Mining?","Jul 06, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
      <!--***************************************************************************************************************************************-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" title="Economic Cooperation Strategy Briefing" data-toggle="modal" data-target="#exampleModal">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" id="videoFrame" src="https://www.youtube.com/embed/QV288nIoG24" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">Canada-Africa Chamber of Business </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">Economic Cooperation Strategy Briefing</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img src="" class="las la-calendar">Jul 05, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>6:00 pm
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" Economic Cooperation Strategy Briefing","Jul 05, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
    </div>
    <!--end-row-->
    <div class="row sixip-home-events" id="past-event" style="display:none;">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" rel="bookmark" title="SolGold Market Update and Live Q&#038;A" onclick="playVideo()">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" src="https://www.youtube.com/embed/bTlDMnaWRhA" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">SolGold </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">SolGold Market Update and Live Q&#038;A</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img src="" class="las la-calendar">Jul 20, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>8:00 am
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" SolGold Market Update and Live Q&#038;A","Jul 20, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
      <!--***************************************************************************************************************************************-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" title="Chesapeake Gold Market Update + Live Q&#038;A">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" id="videoFrame" src="https://www.youtube.com/embed/7nHG0yZ7hj8" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">Chesapeake Gold </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">Chesapeake Gold Market Update + Live Q&A</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img class="las la-calendar">Jul 10, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>2:00 pm
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" Chesapeake Gold Market Update + Live Q&A","Jul 10, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
      <!--***************************************************************************************************************************************-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" rel="bookmark" title="High-Interest Rates: Net-Good or a Detriment for Mining?">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" id="videoFrame" src="https://www.youtube.com/embed/1LVUGQaZg9M" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">Fireweed Metals Bunker Hill Mining , Galantas Gold </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">High-Interest Rates: Net-Good or a Detriment for Mining?</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img class="las la-calendar">Jul 06, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>10:00 am
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" High-Interest Rates: Net-Good or a Detriment for Mining?","Jul 06, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
      <!--***************************************************************************************************************************************-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-card-es">
        <a href="#" title="Economic Cooperation Strategy Briefing" data-toggle="modal" data-target="#exampleModal">
          <div class="card event-card-medium h-100">
            <div class="card-medium-img cmi-not-car">
              <iframe class="playlist-frame" id="videoFrame" src="https://www.youtube.com/embed/QV288nIoG24" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-medium-single-event cmse-not-car">
              <p class="event-card-c-name">
                <span class="tsingle">Canada-Africa Chamber of Business </span>
              </p>
              <div class="card-big-body">
                <h4 class="card-medium-title">Economic Cooperation Strategy Briefing</h4>
              </div>
              <!--card-body-->
              <div class="card-medium-footers">
                <p class="event-date">
                  <img src="" class="las la-calendar">Jul 05, 2023
                </p>
                <p class="event-time">
                  <i class="far fa-clock"></i>6:00 pm
                </p>
              </div>
              <!--card-footer-->
              <br>
              <button type="button" id="modalbtn" onClick="getConfernceId(" Economic Cooperation Strategy Briefing","Jul 05, 2023")" class="cmn-btn btn-sm text-uppercase font-weight-600 mt-1" data-toggle="modal" data-target="#exampleModalCenter"> View Event </button>
            </div>
            <!--single-event-->
          </div>
          <!--card-->
        </a>
      </div>
      <!--end-col-->
    </div>
    <!--end-row-->
  </div>
  <!--container-->
  <!-- 2nd event row -->
  <!--2nd event row end -->
</section>
<!-- events section end -->
<!-- 2nd events section start -->
<!-- 2nd events end -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("event-join-mail"); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Your Email address</label>
            <input type="email" id="client_email" name="client_mail" class="form-control" style="color:black;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <input type="hidden" id="conf_title" name="conf_title">
            <input type="hidden" id="conf_date" name="conf_date">
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