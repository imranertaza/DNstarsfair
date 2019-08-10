<?php

function total_members() {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `users` WHERE `type`='4'";
	$q = $ci->db->query($sql);
	return $q->num_rows();
}

function total_agents() {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `users` WHERE `type`='2'";
	$q = $ci->db->query($sql);
	return $q->num_rows();
}


function total_stockis() {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `users` WHERE `type`='3'";
	$q = $ci->db->query($sql);
	return $q->num_rows();
}

function total_pages() {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `pages`";
	$q = $ci->db->query($sql);
	return $q->num_rows();
}

function total_users() {
	$ci =& get_instance();
	$ci->load->database();
	
	$output = '';
	$sql = "SELECT * FROM `users` WHERE `type`='1'";
	$q = $ci->db->query($sql);
	return $q->num_rows();
}

function merried_status($ms_id) {
	if ($ms_id == 1) {
		return 'Single';
	}
	if ($ms_id == 2) {
		return 'Merried';
	}else {
		return 'Not Seleted';
	}
}


function sex_status($sex_id) {
	if ($sex_id == 1) {
		return 'Male';
	}
	if ($sex_id == 2) {
		return 'Female';
	}else {
		return 'Not Seleted';
	}
}


function get_globle($rel_id, $title) {
	$ci =& get_instance();
	$ci->load->database();
	$religion = $ci->db->query("SELECT `value` FROM `global_settings` WHERE `title` = '".$title."'");
	$name_array = $religion->row()->value;
	$name_json = json_decode($name_array);
	empty($name_json->$rel_id) ? $name = "Not Selected" : $name = $name_json->$rel_id;
	return $name;
}


function get_bank_name_by_id($bank_id) {
	$ci =& get_instance();
	$ci->load->database();
	$bank = $ci->db->query("SELECT `b_name` FROM `bank` WHERE `bnk_id` = '".$bank_id."'");
	$bank_array = $bank->row();
	$bank_name = $bank_array->b_name;
	return $bank_name;
}

function group_name_by_id($id) {
	$ci =& get_instance();
	$ci->load->database();
	$group = $ci->db->query("SELECT `group_name` FROM `class_group` WHERE `grp_id` = '$id'");
	$group_array = $group->row();
	$group_name = $group_array->group_name;
	return $group_name;
}

function class_name_by_id($id) {
	$ci =& get_instance();
	$ci->load->database();
	$class = $ci->db->query("SELECT `class_name` FROM `classes` WHERE `class_id` = '$id'");
	$class_array = $class->row();
	$class_name = $class_array->class_name;
	return $class_name;
}



function get_year_list($from, $to, $sel=0) {
	for($i=$from; $i<=$to; $i++) {
		if ($i == $sel) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$option .= '<option '.$selected.'>'.$i.'</option>';
	}
	return $option;
}


function roll_list_using_exam_id($exm_id, $sel=0) {
	$roll_list_class = mysql_query("SELECT `roll_no` FROM `exam`, `students` WHERE `exam`.`class_id` = `students`.`class_id` AND `exam`.`grp_id` = `students`.`group_id`  AND `exam`.`exm_id` = '$exm_id'");
	$option = '';
	while($row = mysql_fetch_array($roll_list_class)) {
		if ($row['roll_no'] == $sel) { $selected = 'selected="selected"'; }else { $selected = ''; }
		$option .= '<option '.$selected.'>'.$row['roll_no'].'</option>';
	}
	return $option;
}


function subject_name_by_id($sub_id) {
	$ci =& get_instance();
	$ci->load->database();
	
	$sql = "SELECT `sub_name` FROM `subject` WHERE `sub_id` = '$sub_id'";
	$q = $ci->db->query($sql);
	$row = $q->row();
	$subject_name = $row->sub_name;
	return $subject_name;
}


function in_array_r($needle, $haystack, $strict = false) {
	foreach ($haystack as $item) {
		if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
			return true;
		}
	}
	return false;
}

function get_agentname_as_list() {
	$ci =& get_instance();
	$ci->load->database();
	
	$sql = "SELECT * FROM `users`,`user_roles` WHERE `users`.`ID`=`user_roles`.`userID` AND `user_roles`.`roleID` = '4'";
	$q = $ci->db->query($sql);
	foreach($q->result() as $row) {
		$username_list .= '<option value="'.$row->username.'">';
	}
	return $username_list;
}



function get_username_as_list() {
	$ci =& get_instance();
	$ci->load->database();
	
	$sql = "SELECT `username` FROM `users`";
	$q = $ci->db->query($sql);
	foreach($q->result() as $row) {
		$username_list .= '<option value="'.$row->username.'">';
	}
	return $username_list;
}


function get_ID_by_username($username){
	$ci =& get_instance();
	$ci->load->database();
	
	$sql ="SELECT `ID` FROM `users`WHERE `username`='$username'";
	$q = $ci->db->query($sql);
	$rows = $q->row();
	if (!empty($rows->ID)) {
		$id = $rows->ID;
	}else {
		$id = '0';	
	}
	return $id;
}


function user_type_list() {
	$ci =& get_instance();
	$ci->load->database();
	$username_list = '';
	$sql =  "SELECT * FROM `roles` ORDER BY  `ID` ASC LIMIT 3, 3";
	$q = $ci->db->query($sql);
	foreach($q->result() as $row) {
		$username_list .= '<option value="'.$row->ID.'">'.$row->roleName.'</option>';
	}
	return $username_list;
}


function get_list_global_settings($title, $sel=0) {
	$ci =& get_instance();
	$ci->load->database();
	$output = '';
	$query = $ci->db->query("SELECT `value` FROM `global_settings` WHERE `title` = '$title'");
	$row = $query->row();
	$all_value = json_decode($row->value);
	foreach($all_value as $key => $value) {
		($key == $sel) ? $selected = 'selected="selected"' : $selected = '';
		 $output .= '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
	}
	return $output;
}


function get_location($per_id) {
	$ci =& get_instance();
	$ci->load->database();
	$output = '';
	$query = $ci->db->query("SELECT `lo_id`,`name` FROM `location` WHERE `per_id` = '$per_id'");
	foreach($query->result() as $row) {
		 $output .= '<option value="'.$row->lo_id.'">'.$row->name.'</option>';
	}
	return $output;
}


function get_location_type($type) {
	$ci =& get_instance();
	$ci->load->database();
	$output = '';
	$query = $ci->db->query("SELECT `lo_id`,`name` FROM `location` WHERE `type` = '$type'");
	foreach($query->result() as $row) {
		 $output .= '<option value="'.$row->lo_id.'">'.$row->name.'</option>';
	}
	return $output;
}

function bank_list() {
	$ci =& get_instance();
	$ci->load->database();
	$output = '';
	$query = $ci->db->query("SELECT * FROM `bank`");
	foreach($query->result() as $row) {
		 $output .= '<option value="'.$row->bnk_id.'">'.$row->b_name.'</option>';
	}
	return $output;
}

function get_userid_by_username($username) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `ID` FROM `users` WHERE `username` = '$username'");
	if ($query->num_rows > 0) {
		$ID = $query->row()->ID;
	}else {
		$ID = 0;
	}
	return $ID;
}

function get_balance_by_id($user_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `balance` FROM `users` WHERE `ID` = '$user_id'");
	$balance = $query->row()->balance;
	return $balance;
}

function get_commission_by_id($user_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `commission` FROM `users` WHERE `ID` = '$user_id'");
	$commission = $query->row()->commission;
	return $commission;
}

function get_point_by_id($user_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `point` FROM `users` WHERE `ID` = '$user_id'");
	$point = $query->row()->point;
	return $point;
}

function get_pr_point_by_id($user_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `pr_point` FROM `users` WHERE `ID` = '$user_id'");
	$pr_point = $query->row()->pr_point;
	return $pr_point;
}

function get_quantity_by_id($pro_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `quantity` FROM `products` WHERE `pro_id` = '$pro_id'");
	$quantity = $query->row()->quantity;
	return $quantity;
}
function get_field_by_id($col, $pro_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `".$col."` FROM `products` WHERE `pro_id` = '$pro_id'");
	$output = $query->row()->$col;
	return $output;
}

function get_field_by_id_from_table($table, $col, $col_id, $src_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `".$col."` FROM `".$table."` WHERE `".$col_id."` = '$src_id'");
	$output = $query->row()->$col;
	return $output;
}

function check_username($username) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `username` FROM `users` WHERE `username` = '$username'");
	$rows = $query->num_rows();
	return ($rows > 0) ? TRUE : FALSE;
}

function get_username_by_id($id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `username` FROM `users` WHERE `ID` = '$id'")->row();
	//var_dump($query);
	return $query->username;
}

function get_email_by_id($id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `email` FROM `users` WHERE `ID` = '$id'")->row();
	//var_dump($query);
	return $query->email;
}

function get_total_price_of_a_sale($sale_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `pro_info` FROM `sales` WHERE `sale_id` = '$sale_id'")->row();
	$product_info = json_decode($query->pro_info); 
	$keys = array_keys((array)$product_info);
	$price = 0;
	foreach($keys as $k=>$v) {
		$unit_price = get_price_by_id($v) * $product_info->$v;
		$price = $price + $unit_price;
	}
	return $price;
}

function get_price_by_id($pro_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `price` FROM `products` WHERE `pro_id` = '$pro_id'")->row();
	$price = $query->price;
	return $price; 
}


function get_total_point_of_a_sale($sale_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `pro_info` FROM `sales` WHERE `sale_id` = '$sale_id'")->row();
	$product_info = json_decode($query->pro_info); 
	$keys = array_keys((array)$product_info);
	$point = 0;
	foreach($keys as $k=>$v) {
		$unit_point = get_point_of_a_product($v) * $product_info->$v;
		$point = $point + $unit_point;
	}
	return $point;
}

function get_point_of_a_product($pro_id) {
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `point` FROM `products` WHERE `pro_id` = '$pro_id'")->row();
	$point = $query->point;
	return $point; 
}



function get_side_point_by_id($side, $id){
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT `$side` FROM `tree` WHERE `u_id` = $id")->row();
	$side_id = $query->$side;
	return get_pr_point_by_id($side_id);
}


function view_user_image($user_id, $w, $h) {		
			$pro_image = mysql_fetch_array(mysql_query("SELECT `photo` FROM `users` WHERE `ID` = '$user_id'"));
			if (!empty($pro_image['photo'])) {
				return '<div class="pre_image"><img src="'.base_url().'assets/timthumb.php?src='.base_url().'uploads/user_image/'.$pro_image['photo'].'&amp;w='.$w.'&amp;h='.$h.'&amp;zc=1" class="profile_img level" /></div>';
			}else {
				return '<div class="pre_image"><img src="'.base_url().'assets/timthumb.php?src='.base_url().'uploads/user_image/no_thumb.jpg&amp;w='.$w.'&amp;h='.$h.'&amp;zc=1" class="profile_img level" /></div>';
			}
	}
	
function view_user_image_leve2($user_id, $w, $h) {		
			$pro_image = mysql_fetch_array(mysql_query("SELECT `photo` FROM `users` WHERE `ID` = '$user_id'"));
			if (!empty($pro_image['photo'])) {
				return '<div class="pre_image"><img src="'.base_url().'assets/timthumb.php?src='.base_url().'uploads/user_image/'.$pro_image['photo'].'&amp;w='.$w.'&amp;h='.$h.'&amp;zc=1" class="profile_img leve2" /></div>';
			}else {
				return '<div class="pre_image"><img src="'.base_url().'assets/timthumb.php?src='.base_url().'uploads/user_image/no_thumb.jpg&amp;w='.$w.'&amp;h='.$h.'&amp;zc=1" class="profile_img leve2" /></div>';
			}
	}
	
function view_user_image_leve3($user_id, $w, $h) {		
			$pro_image = mysql_fetch_array(mysql_query("SELECT `photo` FROM `users` WHERE `ID` = '$user_id'"));
			if (!empty($pro_image['photo'])) {
				return '<div class="pre_image"><img src="'.base_url().'assets/timthumb.php?src='.base_url().'uploads/user_image/'.$pro_image['photo'].'&amp;w='.$w.'&amp;h='.$h.'&amp;zc=1" class="profile_img leve3" /></div>';
			}else {
				return '<div class="pre_image"><img src="'.base_url().'assets/timthumb.php?src='.base_url().'uploads/user_image/no_thumb.jpg&amp;w='.$w.'&amp;h='.$h.'&amp;zc=1" class="profile_img leve3" /></div>';
			}
	}
	
	
	
function get_total_left_right_point($id){
	$ci =& get_instance();
	$ci->load->database();
	
	
}