
<?php
$page_details = $this->db->query("SELECT * FROM `pages` WHERE `slug` = '$page_title' AND `page_type` = 'page'")->row();


if (empty($page_details->temp)) { ?>
	<section class="content-section">
		<div class="container-fluid wraper" >			
			<div class="row">
				<div class="container" id="area_pad">
					<?php print $sidebar_left; ?>
					<div class="col-md-9">
						<div class="header">
			            	<h1><b><?php print $page_details->page_title; ?></b></h1>
			            	<p class="border"></p>
			            </div>
			        	<div class="content">
			            	<p><?php print $page_details->page_description; ?></p>
			        	</div>
			    	</div>
			    </div>
		    </div>
		</div>
	</section>
<?php
}else {
	include("template/".$page_details->temp);	
}
?>

