<div class="col-md-9">
		<div class="row">
        <div class="col-md-12">
    	<h1><?php print $title; ?></h1>
        <p><?php print $description; ?></p>
        </div>
        </div>
</div>
</div></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
        </div>
    </div>
</div>
<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 wraper" >
                <div class="urgent_notice">
                    
                    
                    <div class="col-md-12 text-center" >
                    <h1>Incentives Offers</h1>
                    </div>
                    
                    <div class="col-md-12 text-center">
                    <p><b><?php print $notice_title; ?></b></p>
                    <p><?php print strip_tags($notice_description); ?></p>
                    <p><a href="<?php print $dwn_path.$notice_file; ?>">Download</a></p>
                    <div class="col-md-4 each_offer">
                        <img src="<?php print base_url(); ?>assets/images/1int.jpg" />
                    </div>
                    <div class="col-md-4 each_offer">
                        <img src="<?php print base_url(); ?>assets/images/2int.jpg" />
                    </div>
                    <div class="col-md-4 each_offer">
                        <img src="<?php print base_url(); ?>assets/images/3int.jpg" />
                    </div>
                    <div class="col-md-4 each_offer">
                        <img src="<?php print base_url(); ?>assets/images/4int.jpg" />
                    </div>
                    <div class="col-md-4 each_offer">
                        <img src="<?php print base_url(); ?>assets/images/5int.jpg" />
                    </div>
                    <div class="col-md-4 each_offer">
                        <img src="<?php print base_url(); ?>assets/images/6int.jpg" />
                    </div>
                    

                </div>


                </div>
        </div>
    </div>
</div>
</section>
