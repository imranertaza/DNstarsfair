<div class="col-md-9">
		<div class="row">
        <div class="col-md-12">
    	<h1><?php print $title; ?></h1>
        <p><?php print $description; ?></p>
        </div>
        </div>
        
        
        <?php /*?><div class="row">
            <div class="urgent_notice">
            	<div class="col-md-12">
                <h3>Incentives Offers</h3>
                </div>
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
                <div class="col-md-4 each_offer">
                    <img src="<?php print base_url(); ?>assets/images/7int.jpg" />
                </div>
                <div class="col-md-4 each_offer">
                    <img src="<?php print base_url(); ?>assets/images/8int.jpg" />
                </div>
                <div class="col-md-4 each_offer">
                    <img src="<?php print base_url(); ?>assets/images/9int.jpg" />
                </div>
            </div>
        </div><?php */ ?>

        <h3>Last Win Options</h3>
        <hr>
        <?php foreach($winOptions as $option) { ?>
            <ul class="list-group">
                <li class="list-group-item">Option Number : <b><?php print $option->option_id; ?></b> has win at <?php print $option->date; ?></li>
            </ul>
        <?php } ?>
 	</div>