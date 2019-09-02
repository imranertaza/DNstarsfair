
<?php
$page_details = $this->db->query("SELECT * FROM `pages` WHERE `slug` = '$page_title' AND `page_type` = 'page'")->row();


if (empty($page_details->temp)) { ?>
	<section class="content-section">
		<div class="container-fluid wraper" >			
			<div class="row">
				<div class="container" >
					<?php print $sidebar_left; ?>
					<div class="col-md-8">
			            <h1><?php print $page_details->page_title; ?></h1>
			            <p><?php print $page_details->page_description; ?></p>
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

