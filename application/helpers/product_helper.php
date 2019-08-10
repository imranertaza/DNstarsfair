<?php

function menufacture_list($sel_id=0) {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `menufacture`";
	$q = $ci->db->query($sql);
	foreach ($q->result() as $rows) {
		if ($sel_id == $rows->men_id) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$output .= '<option value="'.$rows->men_id.'" '.$selected.' />'.  $rows->brand_name.'<br />';
	}
	print empty($output) ? "Not Set" : $output;
}


function product_cat_list($sel_id=0) {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `product_cat`";
	$q = $ci->db->query($sql);
	foreach ($q->result() as $rows) {
		if ($sel_id == $rows->cat_id) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$output .= '<option value="'.$rows->cat_id.'" '.$selected.' />'.  $rows->cat_name.'<br />';
	}
	print empty($output) ? "Not Set" : $output;
}


function colors_list($sel_id=0) {
	$output = '';
	$colors = array(
	 				'1'=>"Red", 
					'2'=>"Green", 
					'3'=>"blue", 
					'4'=>"Yellow", 
					'5'=>"Pink", 
					'6'=>"Gray", 
					'7'=>"White", 
					'8'=>"Orange", 
					'9'=>"Black", 
					'10'=>"light Blue", 
					'11'=>"Asc");
	foreach ($colors as $k=>$v) {
		if ($sel_id == $k) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$output .= '<option value="'.$k.'" '.$selected.' />'.  $v.'<br />';
	}
	print $output;
}


function quality_options($sel_id=0) {
	$output = '';
	$quality = array("1"=>"High", "2"=>"Good", "3"=>"Midium", "4"=>"Normal");
	foreach ($quality as $k=>$v) {
		if ($sel_id == $k) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$output .= '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
	}
	print empty($output) ? "Not Set" : $output;
}

function special_options($sel_id=0) {
	$output = '';
	$special = array("0"=>"False", "1"=>"True");
	foreach ($special as $k=>$v) {
		if ($sel_id == $k) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$output .= '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
	}
	print empty($output) ? "Not Set" : $output;
}


function quality_by_id($sel_id=0) {
	$output = '';
	$quality = array("1"=>"High", "2"=>"Good", "3"=>"Midium", "4"=>"Normal");
	foreach ($quality as $k=>$v) {
		if ($sel_id == $k) {
		$output .= $v;
		}
	}
	print empty($output) ? "Not Set" : $output;
}

function color_by_id($sel_id=0) {
	$output = '';
	$colors = array(
	 				'1'=>"Red", 
					'2'=>"Green", 
					'3'=>"blue", 
					'4'=>"Yellow", 
					'5'=>"Pink", 
					'6'=>"Gray", 
					'7'=>"White", 
					'8'=>"Orange", 
					'9'=>"Black", 
					'10'=>"light Blue", 
					'11'=>"Asc");
	foreach ($colors as $k=>$v) {
		if ($sel_id == $k) {
		$output .= $v;
		}
	}
	print empty($output) ? "Not Set" : $output;
}

function special_by_id($sel_id=0) {
	$output = '';
	$special = array("0"=>"False", "1"=>"True");
	foreach ($special as $k=>$v) {
		if ($sel_id == $k) {
			$output .= $v;
		}
	}
	print empty($output) ? "Not Set" : $output;
}

function get_cat_name_by_id($cat_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query =  $ci->db->query("SELECT `cat_name` FROM `product_cat` WHERE `cat_id` = '$cat_id'");
	$cat_name = @$query->row()->cat_name;
	return $cat_name ? $cat_name : 'Not Set';
}

function get_menufacture_by_id($men_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query =  $ci->db->query("SELECT `brand_name` FROM `menufacture` WHERE `men_id` = '$men_id'");
	$name = @$query->row()->brand_name;
	return $name ? $name : 'Not Set';
}

?>