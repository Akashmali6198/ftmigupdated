<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How It Works Section</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom CSS for the How It Works section */
    .hs-scrolling-debate {
      background-color: #f5f5f5;
      padding: 60px 0;
    }

    .hs-scroll-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .hs-scroll-title span {
      display: block;
      font-size: 18px;
      color: #f9c800;
    }

    .hs-scroll-title h1 {
      font-size: 32px;
      font-weight: bold;
      line-height: 1.3;
    }

    .tabs {
      display: flex;
    }

    .tab-header {
      width: 25%;
      background-color: #fff;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .tab-header div {
      padding: 20px;
      text-align: center;
    }

    .tab-header .active {
      background-color: #f9c800;
      color: #fff;
    }

    .tab-content {
      flex: 1;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
    }

    .tab-content img {
      max-width: 100%;
    }

    .tab-content div:not(.active) {
      display: none;
    }
  </style>
</head>
<body>

  <!-- How It Works Section -->
  <section class="hs-scrolling-debate" id="hsd-desk">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"> 
          <div class="tabs">
            <div class="tab-header">
              <div class="active" onclick="showTab(1)">
                <h3>1. Discover</h3>
              </div>
              <div onclick="showTab(2)">
                <h3>2. Attend</h3>
              </div>
              <div onclick="showTab(3)">
                <h3>3. Host</h3>
              </div>
              <div onclick="showTab(4)">
                <h3>4. Invest</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="tab-content">
            <div class="active">
              <img class="hssi-img hssi-discover" src="https://149474761.v2.pressablecdn.com/wp-content/themes/six-usm/assets/img/home-sixip/discover.png">
            </div>
            <div>
              <img class="hssi-img hssi-attend" src="https://149474761.v2.pressablecdn.com/wp-content/themes/six-usm/assets/img/home-sixip/attend.png">
            </div>
            <div>
              <img class="hssi-img hssi-host" src="https://149474761.v2.pressablecdn.com/wp-content/themes/six-usm/assets/img/home-sixip/host.png">
            </div>
            <div>
              <img class="hssi-img hssi-invest" src="https://149474761.v2.pressablecdn.com/wp-content/themes/six-usm/assets/img/home-sixip/invest.png">
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Add jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom JavaScript for handling tab switching -->
  <script>
    function showTab(tabNumber) {
      $(".tab-header div").removeClass("active");
      $(".tab-content div").removeClass("active");
      $(".tab-header div:nth-child(" + tabNumber + ")").addClass("active");
      $(".tab-content div:nth-child(" + tabNumber + ")").addClass("active");
    }
  </script>

</body>
</html>
