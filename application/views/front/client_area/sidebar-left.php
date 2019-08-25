<div class="col-md-3 sidebar">
    	<div class="head_teacher_comment">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> <?php if (empty($check_user)) { print "Login"; }else{ print "Profile"; } ?></h4>
            <div class="login_box">
            <?php 
			if (empty($check_user)) { ?>
            <form method="post" action="<?php print base_url(); ?>member_form/login.html">
            	Username :<br /><input type="text" name="username" id="user_name" class="log" value="<?php print set_value('mobile'); ?>" /><br />
                Password :<br /><input type="password" name="password" id="password" class="log" /><br />
                <input type="submit" name="login" value="login" id="login"  class="log1" />
            </form>
            <?php } if (($check_user == true) && ($role == 6)){
				print "Username: ".$u_name."<br />";
				print "Full Name: ".$f_name."<br />";
                print "Commission: ".number_format(get_field_by_id_from_table('users', 'commission', 'ID', $ID), 2)."<br />";
                print "Balance: ".number_format(get_field_by_id_from_table('users', 'balance', 'ID', $ID), 2)."<br />";
			?>
            <div class="see_all"><a href="<?php //print base_url().$link. $ID; ?>#">View Profile <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></div>
			<?php }

			/* if (($check_user == true) && ($role == 5)){
				print "Username: ".$u_name."<br />";
				print "First Name: ".$f_name."<br />";
				print "Last Name: ".$l_name."<br />";
				print "Balance: ".number_format($balance, 2)."<br />";
				print "Commission: ".number_format(get_field_by_id_from_table('users', 'commission', 'ID', $ID), 2)."<br />";
			?>
            <div class="see_all"><a href="<?php //print base_url().$link. $ID; ?>#">View Profile <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></div>
            <?php } */
			if (($check_user == true) && ($role == 4)){
				print "Username: ".$u_name."<br />";
				print "First Name: ".$f_name."<br />";
				print "Last Name: ".$l_name."<br />";
				print "Game Balance: ".$gameBalance." BDT <br />";
				print "Balance: ".number_format($balance, 2)."<br />";
				print "Commission: ".number_format(get_field_by_id_from_table('users', 'commission', 'ID', $ID), 2)."<br />";
			?>
            <div class="see_all"><a href="<?php //print base_url().$link. $ID; ?>#">View Profile <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></div>
			<?php	} ?>
             <br class="clear" />
            </div>
        </div>
        <?php if ($check_user==1){ ?>
        <div class="notice">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> Menus</h4>
            <ul>
				<?php if (($check_user == true) && ($role == 4)) { ?>
            	<li><a href="<?php print base_url(); ?>agent/dashboard/">Dashboard</a></li>
                <li><a href="<?php print base_url(); ?>profile/">My Profile</a></li>
                <li><a href="<?php print base_url(); ?>agent/agent_pin/">Pin Generate</a></li>
                <li><a href="#">Product Inventory</a></li>
                <li><a href="#">Purchased Products</a></li>
                <li><a href="#">Product Sales History</a></li>
                <li><a href="#">Sales</a></li>
                <li><a href="#">Sales Commission History</a></li>                
                <li><a href="#">Load Balance</a></li>
                <li><a href="#">Load Balance History</a></li>
                <li><a href="#">Transaction</a></li>
                <li><a href="#">Transaction Balance History</a></li>
                <li><a href="#">Expensive History</a></li>
                
                
                
<!--                <li><a href="--><?php //print base_url(); ?><!--member_form/register/">Sign Up Member</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--store/">Store</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--agent/sales_report/">Sales Report</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--agent/withdraw_report/">Withdraw Report</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--agent/withdraw_request/">Withdraw Request</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--agent/balance_receive/">Balance Received</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--agent/balance_request/">Balance Request</a></li>-->
<!--                <li><a href="--><?php //print base_url(); ?><!--agent/account_status/">Account Status</a></li>-->
                <?php } ?>
                <?php /* if (($check_user == true) && ($role == 5)) { ?>
                <li><a href="<?php print base_url(); ?>stockist/dashboard/">Dashboard</a></li>
                <li><a href="<?php print base_url(); ?>profile/">My Profile</a></li>
                <li><a href="<?php print base_url(); ?>stockist/store/">Store</a></li>
                <li><a href="<?php print base_url(); ?>stockist/stock/">My Products</a></li>
                <li><a href="<?php print base_url(); ?>stockist/requested_products/">Requested Products</a></li>
                <li><a href="<?php print base_url(); ?>stockist/product_delevery/">Product Delevery</a></li>
                <li><a href="<?php print base_url(); ?>stockist/delivery_report/">Delivery Report</a></li>
                <li><a href="<?php print base_url(); ?>stockist/balance_receive/">Balance Received</a></li>
                <!--<li><a href="<?php print base_url(); ?>stockist/balance_log/">Balance Log</a></li>-->
                <li><a href="<?php print base_url(); ?>stockist/balance_request/">Balance Request</a></li>
                <li><a href="<?php print base_url(); ?>stockist/commission/">Commission</a></li>
                <li><a href="<?php print base_url(); ?>stockist/withdraw_report/">Withdraw Report</a></li>
                <?php } */ ?>
                <?php
                if (($check_user == true) && ($role == 6)) { ?>
            	<li><a href="<?php print base_url(); ?>member/general/dashboard/">Dashboard</a></li>
<!--            <li><a href="--><?php //print base_url(); ?><!--member/dealer_search/">Dealer Search</a></li>-->
                <li><a href="<?php print base_url(); ?>member/general/tree/">My Tree</a></li>
                <li><a href="<?php print base_url(); ?>member/profile/">Profile</a></li>
                <li><a href="<?php print base_url(); ?>member/profile/change_password/">Change Password</a></li>
                <li><a href="<?php print base_url(); ?>member/general/referrals/">Referrals</a></li>
<!--            <li><a href="--><?php //print base_url(); ?><!--member/general/earnings/">Earnings</a></li>-->
                <li><a href="<?php print base_url(); ?>member/general/withdraw/">Withdraw</a></li>
                <li><a href="<?php print base_url(); ?>member/general/withdraw_report/">Withdraw Report</a></li>
                <li><a href="<?php print base_url(); ?>member/general/matching_report/">Matching Report</a></li>
                <li><a href="<?php print base_url(); ?>member/general/transfer_money/">Transfer Money</a></li>
                <li><a href="<?php print base_url(); ?>member/general/transfer_history/">Transfer Money History</a></li>
                <li><a href="">Product Purchase History</a></li>
<!--                <li><a href="--><?php //print base_url(); ?><!--member/option_game/">Option Game</a></li>-->
                
                <li><a href="<?php print base_url(); ?>member/general/notice/">Notice</a></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
        
        <div class="important_links">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i>  Notice</h4>
        	<ul>
            <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" scrollamount="2" scrolldelay="2">
                <?php 
				if (is_array($list_notice)) {
				foreach ($list_notice as $row) { ?>
                <li><i class="fa fa-angle-right"></i> <a href="<?php print base_url(); ?>downloads/details/<?php print $row->dwn_id; ?>.html"><?php print $row->title; ?></a></li>
                <?php } }else { print $list_notice; } ?>
            </marquee>
            </ul>
            <?php if (is_array($list_notice)) { ?>
            <div class="see_all"><a href="<?php print base_url(); ?>details/page/notice.html">See All <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></div>
            <?php } ?>
            <br class="clear" />
        </div>
        <div class="notice">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> Incentives</h4>
            <ul>
                <li><i class="fa fa-star logo_3_color" aria-hidden="true"></i> Silver Star</li>
                <li><i class="fa fa-star logo_3_color" aria-hidden="true"></i> Gold Star</li>
                <li><i class="fa fa-star logo_3_color" aria-hidden="true"></i> Diamond Star</li>
            </ul>
        </div>
        
        
        <div class="important_links">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> Follow Us</h4>
        	<ul>
                <li><a href="https://www.facebook.com/groups/174963189571676/" target="_blank"><i class="fa fa-facebook fb"></i>  Facebook</a></li>
                <li><a href="#"><i class="fa fa-twitter fb"></i> Twitter</a></li>
                <li><a href="#"><i class="fa fa-linkedin fb"></i> Linked In</a></li>
                <li><a href="#"><i class="fa fa-google-plus fb"></i> Google +</a></li>
            </ul>
        </div>
        
    </div>
