<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<?php

if (!empty($page_title)) {
	$page_details = $this->db->query("SELECT * FROM `pages` WHERE `slug` = '$page_title'")->row();
	$page_title = $page_details->page_title;
	$page_description = $page_details->short_des;
}

if (!empty($cat_id)) {
	//$page_details = mysql_fetch_array(mysql_query("SELECT * FROM `category` WHERE `cat_id` = '$cat_id'"));
	$page_details = $this->db->query("SELECT * FROM `category` WHERE `cat_id` = '$cat_id'")->row();
	$page_title = $page_details['cat_name'];
	$page_description = $page_details['cat_name'];
}

?>

<!--<title><?php //if (!empty($page_title)) { print $page_title . ' | '; } print $this->global_settings->get_each_setting_value($key = 'site_title'); ?></title>-->

<title><?php 
if (!empty($page_title)) { print $page_title . ' | '; } 
if(!empty($web_page_title)){ print $web_page_title." | "; } 
print $this->global_settings->get_each_setting_value($key = 'site_title'); ?></title>

<meta name="description" content="<?php if (empty($page_description)) { print 'Dnationsoft CMS'; }else { print $page_description; } ?>" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
<link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/slick/slick.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-1.11.0.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/jquery.cycle.all.js" type="text/javascript"></script>

<!-- For slider -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bjqs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tree.css" />
<script src="<?php echo base_url(); ?>assets/js/bjqs-1.3.js" type="text/javascript"></script>
<!-- end of slider -->
</head>


<!--start the header--->

<body>

<!-- <div class="main_body">-->
<div class="main_body">
<div class="container">
    <div class="row">
        	<div class="row">
                <div class="col-md-3">
                    <strong style="margin-top:5px;"><a href="<?php echo base_url(); ?>">Stars Fair BD</a></strong>
                </div>
                <div class="col-md-1 col-md-offset-8 text-right">
                    <a href="<?php print base_url().$log_url; ?>"><?php print $log_title; ?></a>
                </div>
            </div>
    </div>
</div>
</div>
 <!--finish of the header-->

<div class="container-fluid">
    <div class="header row">
        <img src="<?php print base_url(); ?>assets/images/banner.jpg" width="100%" />
    </div>
</div>

<div class="menul">
<div class="container">    
      <div class="row">
      <div class="col-md-12">
		<div class="row">
      	<div class="menu">
        	<ul>
            	<li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php print base_url(); ?>details/page/notice/">Notice</a></li>
                <li><a href="<?php print base_url(); ?>gallery/">Event Gallery</a></li>
                <li><a href="<?php print base_url(); ?>details/page/about-us/">About Us</a></li>
                <li><a href="<?php print base_url(); ?>details/page/contact-us/">Contact Us</a></li>
                <?php if ($log_title === "Login") { ?>
                <li><a href="<?php print base_url(); ?>member_form/register/">Register</a></li>
                <?php } ?>
                <li><a href="<?php print base_url().$log_url; ?>"><?php print $log_title; ?></a></li>
                <br clear="all" />
            </ul>
        </div><!--end of menu-->
		</div>
      </div>
      </div>
</div> 
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 scroll">
			<marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" scrollamount="1" scrolldelay="10" truespeed="1">
                <?php 
				if (is_array($list_notice)) {
				foreach ($list_notice as $row) { ?>
                <i class="fa fa-check-circle" aria-hidden="true"></i> <a href="<?php print base_url(); ?>downloads/details/<?php print $row->dwn_id; ?>.html"><?php print $row->title; ?></a> | 
                <?php } }else { print $list_notice; } ?>
            </marquee>
        </div>
	</div>
</div>

<div class="container slider_area">
  <?php //include('slider.php');
  print $slider; ?>
</div>


<div class="container wraper">
	<div class="row">
