

<style>
/* meadia query */
@media (max-width: 768px) {
  #slider .carousel-item {
    height: 40vh!important;
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
        transform: translate(0,-50%);
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0,0,0,.6);
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
.padc{
    padding-top:90px!important;
}

.slidetxt
{
    padding-left:10%;
}
.speaker{
    color:#78a343;
}
.nav-pills .nav-link {
  margin-bottom: 30px;
  padding:20px;
  border:solid 2px gray;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color:black;
    /*-webkit-box-shadow: -1px -1px 3px 3px rgba(120,163,67,1);*/
    /*-moz-box-shadow: -1px -1px 3px 3px rgba(120,163,67,1);*/
    /*box-shadow: -1px -1px 3px 3px rgba(120,163,67,1);*/
border:solid white 1px;
}
.col-md-9 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
  margin-bottom: 50px;
}

.speakercol{
    background-color:#010101;
    padding:0px;
    /* -webkit-box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
-moz-box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
border:solid white 1px; */
}
img.speaker-image {
    width: 100%!important;
    height:200px;
    background-color:white;
}
.pads{
    padding:15px;
}

.speakerinfo{
    background-color:#1c1c1c;
    padding:20px;
    border:solid white 1px;
border-left:0px;
}
.colorchange:hover{
  /*-webkit-box-shadow: -1px -1px 3px 3px rgba(120,163,67,1);*/
    /*-moz-box-shadow: -1px -1px 3px 3px rgba(120,163,67,1);*/
    /*box-shadow: -1px -1px 3px 3px rgba(120,163,67,1);*/
}

/* .scrollable-text {
  height:300px; /* or any other desired height */
  /* overflow-y: scroll;
} */
.scrollable-text::-webkit-scrollbar {
  width:0px;

} */
    </style>

<section id="slider">
    <div class="container-fluid p-0 padc">
      <div class="row">
        <div class="col-md-12 p-0">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" style="background-image: url('https://wallpapercave.com/dwp2x/wp7226772.png')">
                <div class="container slidetxt">
                  <!--<h1>Companies</h1>-->
                  <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl in nibh eleifend lobortis. Duis nec felis leo. Mauris finibus metus vel lorem congue, eget aliquam massa ullamcorper.</p>-->
                </div>
              </div>
              <div class="carousel-item" style="background-image: url('https://www.jobstreet.com.ph/career-resources/wp-content/uploads/sites/3/2022/08/Best-Companies-in-the-Philippines-This-2022.jpg')">
                <div class="container  slidetxt">
                  <!--<h1>Companies</h1>-->
                  <!--<p>Aliquam lacinia mauris purus, a pharetra nisi faucibus vel. Quisque rhoncus convallis nisl, id rutrum tellus dignissim sed. Sed quis mollis lectus.</p>-->
                </div>
              </div>
              <div class="carousel-item" style="background-image: url('https://indiacsr.in/wp-content/uploads/2021/07/companies-in-india-750x563.jpg')">
                <div class="container  slidetxt">
                  <!--<h1>Companies</h1>-->
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

        <h3 class="speaker">Fission<h3>
            <h6>URANIUM CORP</h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
            <h3 class="speaker">WestHaven<h3>
            <h6>GOLD CORP </h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">

        <h3 class="speaker">Vizsla<h3>
            <h6>SILVER CORP</h6>
        </a>
    
        <a class="nav-link colorchange" id="v-pills-tab-4" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
            
        <h3 class="speaker">Appia<h3>
            <h6>RARE EARTHS & URANIUM</h6>
        </a>

        <a class="nav-link colorchange" id="v-pills-tab-5" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
            
        <h3 class="speaker">Romios<h3>
            <h6>GOLD RESOURCES INC</h6>
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

                                                <img src="assets/images/fission2.png" class="speaker-image entered lazyloaded" data-lazy-src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" data-ll-status="loaded"><noscript><img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">Fission</h3>

                    <p class="pads">URANIUM CORP</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                       Fission Uranium is developing the high-grade, near-surface Triple R uranium deposit – part of the multiple award-winning PLS project.<br><br>

Located in the renowned Athabasca Basin uranium district, PLS hosts the longest mineralized trend in the district and the Triple R is the only existing major, high-grade, deposit in the region found at shallow depth.<br><br>

With an experienced team run by CEO and uranium expert, Ross McElroy, Fission has completed a Feasibility Study that shows the potential for the Triple R to be among the lowest operating cost uranium mines in the world. <br><br>The Company is ideally positioned to continue developing PLS through the environmental assessment and licensing phase.</p></div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>
        </div>

    <!-- tab2 -->
        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-tab-2">
          
        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="assets/images/weasthaven.png" class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">WestHaven</h3>

                    <p class="pads">GOLD CORP</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                       Westhaven is a gold-focused exploration company advancing the high-grade discovery on the Shovelnose project in Canada’s newest gold district, the Spences Bridge Gold Belt. Westhaven controls  37,000 hectares (370 square kilometres) with four 100% owned gold properties spread along this underexplored belt. 
                       <br><br>The Shovelnose property is situated off a major highway, in close proximity to power, rail, large producing mines, and within commuting distance from the city of Merritt, which translates into low cost exploration. Westhaven is committed to the highest standards of environmental and social responsibility with a focus on generating positive outcomes and returns to all stakeholders.
                       </div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>
        
        </div>

        <!-- tab3 -->
        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-tab-3">
         
        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="assets/images/vizsla.png" class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">Vizsla</h3>

                    <p class="pads">SILVER CORP</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                       With a team of experienced natural resource professionals, Vizsla Silver Corp. is focused on advancing its flagship, 100%-owned Panuco silver-gold project located in Sinaloa, Mexico. 
                       <br><br>To date, Vizsla has completed over 250,000 metres of drilling at Panuco supporting an estimated in-situ mineral resource of 104.8 Moz AgEq and an in-situ inferred resource of 114.1 Moz AgEq (the effective date for the Updated Mineral Resource estimate is January 12, 2023). 
                       <br><br>For 2023, Vizsla Silver has budgeted 90,000 metres of resource/discovery-based drilling., designed to upgrade, and expand the mineral resource base as well as test other high grade priority targets across the large, vastly underexplored Panuco district</div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>

          </div>

          <!-- tab4 -->
        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-tab-4">
         
        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="assets/images/appia.png"  class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">Appia</h3>

                    <p class="pads">RARE EARTHS & URANIUM CORP</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                       Exploring and developing uranium and rare earth deposits in Canada's Athabasca Basin area of northern Saskatchewan and the historic mining camp of Elliot Lake, Ontario.
                      <br><br>Appia is currently focusing on continued exploration for high-grade critical rare earth elements and uranium in surface showings on its Alces Lake property, as well as discovering high-grade uranium deposits in the prolific Athabasca Basin area on the Loranger, Eastside and North Wollaston properties.  
                      <br><br>The company currently holds the surface rights to exploration for about 63,980 hecAthabasca Basin Propertiestares (158,098 acres) in Saskatchewan.
                    </div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>


        </div>
           <!-- tab5 -->
         <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-tab-5">
          
         <div class="company-hero-info">
 
 <div class="container">
 
    <div class="row">
 
           <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 
 
                    <div class="speaker-info">
 
                                                 <img src="assets/images/romios.png" class="speaker-image"/></noscript>
                        <div class="speaker-border"></div>
 
                     
                     <h3 class="speaker pads">Romios
</h3>
 
                     <p class="pads">GOLD RESOURCES INC</p> 
 
                     </div><!--speaker-info-->  
                       
             </div><!--end-col-->				
   
            <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
                <div class="speaker-bio-right" style="height: 100%;"> 
     
              
                        <div class="speaker-bio" id="company-bio">
                        <p class="e-company-sub-title scrollable-text"> 
                        Romios Gold Resources Inc. is a progressive Canadian mineral exploration company established in 1995 and engaged in precious- and base-metal exploration, focused primarily on gold, copper and silver. It has a 100% interest in the Lundmark-Akow Lake Au-Cu property and 4 additional claim blocks in northwestern Ontario and extensive claim holdings covering several significant porphyry copper-gold prospects in the “Golden Triangle” of British Columbia. 
                        <br><br>Additional interests include two former producers, the La Corne molybdenum mine property (Quebec), a former high-grade gold producer - the Scossa mine property (Nevada), and the Kinkaid Nevada claims covering numerous Au-Ag-Cu workings.
                        
                        <br><br>The Company also retains an ongoing interest in several properties including a 20% carried interest in five of Honey Badger Mining’s claim blocks in the Thunder Bay silver district of northwestern Ontario; a 2% NSR on McEwen Mining’s Hislop gold property in Ontario; and a 2% NSR on the Newmont Lake Au-Cu-Ag property in BC now owned by Enduro Metals Corp.
                        </div>	 
 
              </div><!--cinfo-bg-->  
            </div><!--end-col-->
 
    </div><!--end-row-->	
 
  </div><!--container-->    
 
 </div>

</div>

      </div>
    </div>
  </div>
</div>







