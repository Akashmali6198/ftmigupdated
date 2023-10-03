
<style>
 @media (max-width: 768px) {
.banner {
    height: 300px !important;
    padding: 4%!important;

}
.banner h1 {
    font-size: 39px!important;


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
    <h1>FTMIG Conferences</h1>
    <div class="container">
        <div class="row text-center p-4">
          <!--<a href="<?= base_url("create_conference"); ?>" class="cmn-btn text-uppercase font-weight-600 mt-4">Create Conference</a>-->
        </div>
      </div>
  </div>
  
</section>
 <!-- blog section start -->
 <section class="pt-120 pb-120 border-top-1">
      <div class="container">
        <div class="row justify-content-center mb-none-30">
          <!-- per conf start -->
          <?php foreach($conferences as $conference){?>
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-card">
               
                <div class="blog-card__thumb">
                  <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2023/02/MIX-v6.png" alt="image">
                </div>
                <div class="blog-card__content">
                  <h2 class="blog-card__title mb-3"><a href="#0"> <?php  echo $conference['title']; ?><br>&nbsp</a></h2>
                  <ul class="blog-card__meta d-flex flex-wrap mb-4">
                    <li>
                      <i class="las la-calendar"></i>
                      <input type="hidden" id="con_id" value="<?php  echo $conference['id']; ?>">
                      <a href="#0"> <?php  echo $conference['start_time']; ?> - 16/12/2022</a>
                    </li>
                  </ul>
                  <p>FTMIG is back, bigger and better than ever… Register now to attend 6ix’s largest, most anticipated conference. Be part of this free two-week virtual conference to hear from hundreds of companies and thought leaders within the metals and mining sector! </p>
                </div>
                <!-- modal button -->
                <button type="button"  id="modalbtn" onClick="getConfernceId('<?php echo $conference['id']; ?>','<?php echo $conference['title']; ?>','<?php echo $conference['start_time']; ?>')" class="cmn-btn text-uppercase font-weight-600 mt-2" data-toggle="modal" data-target="#exampleModalCenter">
                Join Conference
                </button>
                <!-- modal button -->
            </div>
          </div>
          <?php }?>
          <!-- per conf end -->
      </div>
        </div>
        
        
        
    </section>
    <!-- blog section end -->

    <!-- modal code start -->

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
      <form action="<?= base_url("confirmatioin_mail"); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Enter Your Email address</label>
          <input type="email" id="client_email" name="client_mail" class="form-control" style="color:black;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          <input type="hidden" id="conf_title" name="conf_title">
          <input type="hidden" id="conf_date" name="conf_date">
          <input type="hidden" id="conf_id" name="conf_id">
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

<script type="text/javascript">


function getConfernceId(id,title,date){
    document.getElementById("conf_id").value = id;
    document.getElementById("conf_title").value = title;
    document.getElementById("conf_date").value = date;
}



</script>

