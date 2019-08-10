<?php

if (isset($_GET['delete_page'])) {
	$page_id = $_POST['page_id'];
	//$post_img = mysql_fetch_array(mysql_query("SELECT `f_image` FROM `pages` WHERE `page_id` = '$page_id'"));
	$post_img = $this->db->query("SELECT `f_image` FROM `pages` WHERE `page_id` = '$page_id'")->row();
    //print $this->db->last_query();
    $get_image = $post_img->f_image;
    if (!empty($get_image)) {
        $unlink = unlink('uploads/post_image/' . $get_image);
    }

	$delete = $this->db->query("DELETE FROM `pages` WHERE `page_id` = '$page_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_widget'])) {
	$w_id = $_POST['w_id'];
	//$post_img = mysql_fetch_array(mysql_query("SELECT `image` FROM `widget` WHERE `w_id` = '$w_id'"));
	$post_img = $this->db->query("SELECT `image` FROM `widget` WHERE `w_id` = '$w_id'")->row();
	$get_image = $post_img['image'];
	
	$unlink = unlink('uploads/widget_image/'.$get_image);
	
	$delete = $this->db->query("DELETE FROM `widget` WHERE `w_id` = '$w_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_download'])) {
	$dwn_id = $_POST['dwn_id'];
	//$file = mysql_fetch_array(mysql_query("SELECT `file` FROM `downloads` WHERE `dwn_id` = '$dwn_id'"));
	$file = $this->db->query("SELECT `file` FROM `downloads` WHERE `dwn_id` = '$dwn_id'")->row();
	$get_file = $file['file'];
	
	$unlink = unlink('uploads/downloads/'.$get_file);
	
	$delete = $this->db->query("DELETE FROM `downloads` WHERE `dwn_id` = '$dwn_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_cat'])) {
	$cat_id = $_POST['cat_id'];
	$delete = $this->db->query("DELETE FROM `category` WHERE `cat_id` = '$cat_id'");
	if ($delete) {
		return true;
	}
}

if (isset($_GET['delete_menu'])) {
	$mnu_id = $_POST['mnu_id'];
	$delete = $this->db->query("DELETE FROM `menufacture` WHERE `men_id` = '$mnu_id'");
	if ($delete) {
		return true;
	}
}

if (isset($_GET['delete_class'])) {
	$class_id = $_POST['class_id'];
	$delete = $this->db->query("DELETE FROM `classes` WHERE `class_id` = '$class_id'");
	if ($delete) {
		return true;
	}
}



if (isset($_GET['delete_group'])) {
	$grp_id = $_POST['grp_id'];
	$delete = $this->db->query("DELETE FROM `class_group` WHERE `grp_id` = '$grp_id'");
	if ($delete) {
		return true;
	}
}






if (isset($_GET['delete_pro_cat'])) {
	$pro_cat_id = $_POST['pro_cat_id'];
	$delete = $this->db->query("DELETE FROM `product_cat` WHERE `cat_id` = '$pro_cat_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_student'])) {
	$std_id = $_POST['std_id'];
	//$post_img = mysql_fetch_array(mysql_query("SELECT `main_image` FROM `students` WHERE `std_id` = '$std_id'"));
	$post_img = $this->db->query("SELECT `main_image` FROM `students` WHERE `std_id` = '$std_id'")->row();
	$get_image = $post_img['main_image'];
	
	$unlink = unlink('uploads/std_image/'.$get_image);

	$delete = $this->db->query("DELETE FROM `students` WHERE `std_id` = '$std_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_iteam'])) {
	$pro_id = $_POST['pro_id'];
	//$post_img = mysql_fetch_array(mysql_query("SELECT `main_image` FROM `products` WHERE `pro_id` = '$pro_id'"));
	$post_img = $this->db->query("SELECT `main_image` FROM `products` WHERE `pro_id` = '$pro_id'")->row();
	$get_image = $post_img['main_image'];
	
	$unlink = unlink('uploads/pro_image/'.$get_image);

	$delete = $this->db->query("DELETE FROM `products` WHERE `pro_id` = '$pro_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_member'])) {
	$tec_id = $_POST['tec_id'];
	//$post_img = mysql_fetch_array(mysql_query("SELECT `main_image` FROM `commitee` WHERE `tec_id` = '$tec_id'"));
	$post_img = $this->db->query("SELECT `main_image` FROM `commitee` WHERE `tec_id` = '$tec_id'")->row();
	$get_image = $post_img['main_image'];
	
	$unlink = unlink('uploads/tec_image/'.$get_image);

	$delete = $this->db->query("DELETE FROM `commitee` WHERE `tec_id` = '$tec_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_order'])) {
	$order_id = $_POST['order_id'];

	$delete = $this->db->query("DELETE FROM `order` WHERE `order_id` = '$order_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['group_list'])) {
	$class = $_POST['class'];
	
	$groups = $this->db->query("SELECT * FROM `class_group` WHERE `class_id` = '$class'");
	if (mysql_num_rows($groups) > 0) { 
		$group_list = '<option>Select a group</option>';
		while($rows = mysql_fetch_array($groups)) {
		$group_list .= '<option value="'.$rows['grp_id'].'">'.$rows['group_name'].'</option>';
		}
	}else {
		$group_list .= '<option>Sorry no group available.</option>';
	}
	print $group_list;
}



if (isset($_GET['total_student'])) {
	$class_id = $_POST['class_id'];
	$group_id = $_POST['group_id'];
	
	//$total = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS `rows` FROM `students` WHERE `class_id` = '$class_id' AND `group_id` = '$group_id'"));
	$total = $this->db->query("SELECT COUNT(*) AS `rows` FROM `students` WHERE `class_id` = '$class_id' AND `group_id` = '$group_id'")->row();
	$total_student = $total['rows'];
	print $total_student;
}


if (isset($_GET['delete_attendance'])) {
	$att_id = $_POST['att_id'];
	
	//$delete = mysql_fetch_array(mysql_query("DELETE FROM `attendance` WHERE `att_id` = '$att_id'"));
	$delete = $this->db->query("DELETE FROM `attendance` WHERE `att_id` = '$att_id'")->row();
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_slider'])) {
	$sl_id = $_POST['sl_id'];

	
	$image = mysql_fetch_array(mysql_query("SELECT `image` FROM `slider_gallery` WHERE `sl_id` = '$sl_id'"));
	$image = $this->db->query("SELECT `image` FROM `slider_gallery` WHERE `sl_id` = '$sl_id'")->row();
	$get_image = $image['image'];
	
	$unlink = unlink('uploads/gallery/'.$get_image);
	
	$delete = $this->db->query("DELETE FROM `slider_gallery` WHERE `sl_id` = '$sl_id'");
	if ($delete) {
		return true;
	}
}



if (isset($_GET['delete_exam'])) {
	$exm_id = $_POST['exm_id'];
	$delete = $this->db->query("DELETE FROM `exam` WHERE `exm_id` = '$exm_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['delete_subject'])) {
	$sub_id = $_POST['sub_id'];
	$delete = $this->db->query("DELETE FROM `subject` WHERE `sub_id` = '$sub_id'");
	if ($delete) {
		return true;
	}
}


if (isset($_GET['techsubject_list'])) {
	$class = $_POST['class_id'];
	$group = $_POST['group_id'];
	
	$tec_subject = $this->db->query("SELECT * FROM `subject` WHERE `type` = '4 Subject' AND `class_id` = '$class' AND `grp_id` = '$group'");
	if (mysql_num_rows($tec_subject) > 0) { 
		$subject_list = '<option>Select 4subject</option>';
		while($rows = mysql_fetch_array($tec_subject)) {
		$subject_list .= '<option value="'.$rows['sub_id'].'">'.$rows['name'].'</option>';
		}
	}else {
		$subject_list .= '<option>Sorry no subject available.</option>';
	}
	print $subject_list;
}




if (isset($_GET['get_tech_subject'])) {
	$roll_no = $_POST['roll_no'];
	
	//$tech_subject = mysql_fetch_array(mysql_query("SELECT * FROM `students`, `subject` WHERE `students`.`tecsubject` = `subject`.`sub_id` AND `students`.`roll_no` = '$roll_no'"));
	$tech_subject = $this->db->query("SELECT * FROM `students`, `subject` WHERE `students`.`tecsubject` = `subject`.`sub_id` AND `students`.`roll_no` = '$roll_no'")->row();
	$techsub = $tech_subject['sub_name'];
	print $techsub;
}


if (isset($_GET['delete_res'])) {
	$ci =& get_instance();
	$ci->load->database();
	$res_id = $_POST['res_id'];
	$sql = "DELETE FROM `result` WHERE `res_id` = '$res_id'";
	$delete = $ci->db->query($sql);
	if($delete) {
		return true;
	}
}

if (isset($_GET['check_username'])) {
	$ci =& get_instance();
	$ci->load->database();
	
	$uname = $_POST['username'];
	$query = $this->db->query("SELECT `username` FROM `users` WHERE `username`='$uname'");
	$rowcount = $query->num_rows();
	if ($rowcount==0){
		print false;	
	}else {
	 	print true;
	}
}


if (isset($_GET['check_valid_username'])) {
	$ci =& get_instance();
	$ci->load->database();
	
	$uname = $_POST['username'];
	$query = $this->db->query("SELECT `username` FROM `users` WHERE `username`='$uname'");
	$rowcount = $query->num_rows();
	if ($rowcount==1){
		print '<span style="color:red">Invalid</span>';	
	}else {
	 	print '<span style="color:green">Valid Username</span>';
	}
}


if (isset($_GET['check_hand'])) {
	$ci =& get_instance();
	$ci->load->database();
	
	$uname = $_POST['username'];
	$query = $this->db->query("SELECT `ID` FROM `users` WHERE `username` = '$uname'");
	foreach ($query->result() as $row)
	{
	   $ID = $row->ID;
	}
	$q = $this->db->query("SELECT `l_t`,`r_t` FROM `tree` WHERE `u_id` = '$ID'");
	foreach ($q->result() as $row)
	{
	   $l_t = $row->l_t;
	   $r_t = $row->r_t;
	}
	$disable_l = empty($l_t) ? '' : 'disabled="disabled"';
	$disable_r = empty($r_t) ? '' : 'disabled="disabled"';
	print '<option selected="selected" value="0">Choose Hand</option>
			<option value="1" '.$disable_l.'>Left</option>
           	<option value="2" '.$disable_r.'>Right</option>';
	
}



if (isset($_GET['check_district'])) {
	$ci =& get_instance();
	$ci->load->database();
	$per_id = $_POST['division_id'];
	$output = '<option value="0">Select District...</option>';
	$query = $ci->db->query("SELECT `lo_id`,`name` FROM `location` WHERE `per_id` = '$per_id'");
	foreach($query->result() as $row) {
		 $output .= '<option value="'.$row->lo_id.'">'.$row->name.'</option>';
	}
	print $output;
}


if (isset($_GET['check_thana'])) {
	$ci =& get_instance();
	$ci->load->database();
	$per_id = $_POST['district_id'];
	$output = '<option value="0">Select Thana/upazilla...</option>';
	$query = $ci->db->query("SELECT `lo_id`,`name` FROM `location` WHERE `per_id` = '$per_id'");
	foreach($query->result() as $row) {
		 $output .= '<option value="'.$row->lo_id.'">'.$row->name.'</option>';
	}
	print $output;
}

if (isset($_GET['check_ward'])) {
	$ci =& get_instance();
	$ci->load->database();
	$per_id = $_POST['thana_id'];
	$output = '<option value="0">Select Union/ward...</option>';
	$query = $ci->db->query("SELECT `lo_id`,`name` FROM `location` WHERE `per_id` = '$per_id'");
	foreach($query->result() as $row) {
		 $output .= '<option value="'.$row->lo_id.'">'.$row->name.'</option>';
	}
	print $output;
}