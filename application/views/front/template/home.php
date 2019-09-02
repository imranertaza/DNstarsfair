<section class="slider-section">
  <div class="container-fluid slider_area">
    
    <div class="row">
      <img src="<?php print base_url(); ?>uploads/gallery/banner.jpg" width="100%">
    </div>
  </div>
</section>

<section class="content-section">
  <div class="container-fluid wraper">
  		<div class="row">
          <div class="container">
            <div class="col-md-12 text-center">
        	     <h1><?php print $title; ?></h1>
               <center><p style="border-top: 1px solid; width: 200px;color: #005180 !important; margin-top: 25px;"></p></center>
            </div>
            <div class="col-md-12  results" id="cont-padding">
              <p><?php print $description; ?></p>
            </div>
            
          </div>
      </div>
  </div>
</section>

<section class="incentives-offers-section">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12" >
                <div class="urgent_notice">  
                      <div class="col-md-12 text-center" >
                        <h1>Incentives Offers</h1> 
                        <center><p style="border-top: 1px solid; width: 200px;color: #005180 !important; margin-top: 25px;"></p></center>                       
                      </div>                      
                      <div class="col-md-12" id="cont-padding">                      
                        <section class="customer-logos slider" style="padding: 30px;">
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/1ster.JPG"></div>
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/2ster.JPG"></div>
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/3ster.JPG"></div>
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/4 star.JPG"></div>
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/5 star.JPG"></div>
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/6 star.JPG"></div>
                          <div class="slide"><img src="<?php print base_url(); ?>assets/images/7 star.JPG"></div>                          
                       </section>
                      </div>
                </div>
          </div>
      </div>
  </div>
</section>

<section class="notice-section">
  <div class="container-fluid wraper">
      <div class="row">
          <div class="col-md-12" >
                <div class="urgent_notice">  
                      <div class="col-md-12">
                        <div class="col-md-12 text-center" >
                          <h1>Notice</h1>
                          <center><p style="border-top: 1px solid; width: 200px;color: #005180 !important; margin-top: 25px;"></p></center>
                                                    
                        </div>                         
                        <div class="col-md-12  results" id="cont-padding">
                          <ul class="notice text-center">                      
                            <?php foreach($list_notice as $row) { ?>
                              <li > <a style="font-size: 16px;" href=""><?php print $row->title; ?></a></li>
                            <?php }?>                          
                          </ul>
                        </div>
                        
                    </div>
                </div>
          </div>
      </div>
  </div>
</section>
