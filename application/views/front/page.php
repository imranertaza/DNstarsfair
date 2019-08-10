<?php
$page_details = $this->db->query("SELECT * FROM `pages` WHERE `slug` = '$page_title' AND `page_type` = 'page'")->row();

print $sidebar_left;
if (empty($page_details->temp)) {
?>
	<div class="col-md-8">
            <h1><?php print $page_details->page_title; ?></h1>
            <p><?php print $page_details->page_description; ?></p>
    </div>
<?php
}else {
	include("template/".$page_details->temp);	
}
?>