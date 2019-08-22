	<?php
    	$user_id = $this->session->userdata('user_id');
		//$this->load->model('functions');
		//$get_role = new functions(); 
		//$role = $this->functions->user_role_by_id($user_id, $colum='ID');
	?>
    
    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a class="active" href="<?php echo base_url(); ?>dashboard.html"><i class="fa fa-dashboard fa-fw"></i> Mainboard</a>
                        </li>
                        <?php /*if ($this->functions->hasPermission('post_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-clipboard fa-fw"></i> Post<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('post_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>posts/posts_list.html"><i class="fa fa-list fa-fw"></i> All Posts</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_post') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>posts/add_new_post.html"><i class="fa fa-plus-square fa-fw"></i> Add Post</a>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }*/ if ($this->functions->hasPermission('page_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Page<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('page_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>pages/page_list.html"><i class="fa fa-list fa-fw"></i> All Pages</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_page') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>pages/add_new_page.html"><i class="fa fa-plus-square fa-fw"></i> Add Page</a>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }

                        /*if ($this->functions->hasPermission('std_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-list-ol" aria-hidden="true"></i> Products <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('std_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/product/listi/"><i class="fa fa-list fa-fw"></i> All Products</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_std') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/product/add/"><i class="fa fa-plus-square fa-fw"></i> Add Product</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } if ($this->functions->hasPermission('std_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-list-ol" aria-hidden="true"></i> Menufacture <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('std_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>menufacture/listi/"><i class="fa fa-list fa-fw"></i> All Menufacture</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_std') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>menufacture/add/"><i class="fa fa-plus-square fa-fw"></i> Add Menufacture</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } if ($this->functions->hasPermission('std_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-list-ol" aria-hidden="true"></i> Product Catagory <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('std_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>product_cat/listi/"><i class="fa fa-list fa-fw"></i> All Product Catagory</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_std') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>product_cat/add/"><i class="fa fa-plus-square fa-fw"></i> Add Prodcut Catagory</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } */ if ($this->functions->hasPermission('std_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-fw"></i> Member <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('std_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/member/listi.html"><i class="fa fa-list fa-fw"></i> All Member</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_std') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/member/add.html"><i class="fa fa-plus-square fa-fw"></i> Add Member</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php }

                        /*if ($this->functions->hasPermission('tec_list') == true) { ?>
                         <li>
                            <a href="#"><i class="fa fa-fw"></i> stockist <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('tec_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/stockist/listi.html"><i class="fa fa-list fa-fw"></i> All Stockies</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_tec') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/stockist/add.html"><i class="fa fa-plus-square fa-fw"></i> Add Stockies</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } if ($this->functions->hasPermission('man_commitee_list') == true) { ?>
                         <li>
                            <a href="#"><i class="fa fa-fw"></i> Agent <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('man_commitee_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/agent/listi.html"><i class="fa fa-list fa-fw"></i> All Agent</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_com_member') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin_area/agent/add.html"><i class="fa fa-plus-square fa-fw"></i> Add Agent</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        
                        <?php }*/

                        if ($this->functions->hasPermission('category_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Catagory<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('category_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>category/category_list.html"><i class="fa fa-list fa-fw"></i> All Categories</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_category') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>category/add_category.html"><i class="fa fa-plus-square fa-fw"></i> Add Catagory</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } if ($this->functions->hasPermission('post_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-puzzle-piece fa-fw"></i> Blocks<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('post_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>widgets/widgets_list.html"><i class="fa fa-list fa-fw"></i> Block List</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_post') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>widgets/add_new_widget.html"><i class="fa fa-plus-square fa-fw"></i> Add Block</a>
                                </li>
                                
                                
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        
                        
                        
                        
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-puzzle-piece fa-fw"></i> Location<span class="fa arrow"></span></a>-->
<!--                            <ul class="nav nav-second-level">-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/add_division.html"><i class="fa fa-plus-square fa-fw"></i> Add Division</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/list_division.html"><i class="fa fa-list fa-fw"></i> List Division </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/add_district.html"><i class="fa fa-plus-square fa-fw"></i> Add District</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/district_list.html"><i class="fa fa-list fa-fw"></i> List District</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/add_thana.html"><i class="fa fa-plus-square fa-fw"></i> Add Thana/Upazila</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/thana_list.html"><i class="fa fa-list fa-fw"></i> List Thana/Upazila</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/add_word.html"><i class="fa fa-plus-square fa-fw"></i> Add Union/Ward</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--location/word_list.html"><i class="fa fa-list fa-fw"></i> List Union/Ward</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
                        
                        
                        
                        
                        
                        
                        
<!--                         <li>-->
<!--                            <a href="#"><i class="fa fa-money" aria-hidden="true"></i> Transection<span class="fa arrow"></span></a>-->
<!--                            <ul class="nav nav-second-level">-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--transection/load_agent_balance/"><i class="fa fa-plus-square fa-fw"></i>  Load Agent Balance</a>-->
<!--                                </li>-->
<!--                                 <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--transection/request_agent_balance/"><i class="fa fa-plus-square fa-fw"></i>   Request Agent Balance</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="--><?php //echo base_url(); ?><!--transection/request_stock_balance/"><i class="fa fa-plus-square fa-fw"></i>   Request Stockist Balance</a>-->
<!--                                </li>-->
<!--                                -->
<!--                                -->
<!--                            </ul>-->
<!--                        </li>-->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <li>
                        <?php if ($this->functions->hasPermission('post_list') == true) { ?>
                            <a href="<?php echo base_url(); ?>admin_area/tree.html"><i class="fa fa-puzzle-piece fa-fw"></i> Tree<span class="fa arrow"></span></a>
                        <?php } ?>
                        </li>
                        <?php } if ($this->functions->hasPermission('download_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-fw"></i> Notice<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('download_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>download/download_list.html"><i class="fa fa-list fa-fw"></i> Notice List</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_download') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>download/add_new_download.html"><i class="fa fa-plus-square fa-fw"></i> Add Notice</a>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-fw"></i> Pin Gnerate<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="<?php echo base_url(); ?>pin_generat/pin_generate_list.html"><i class="fa fa-list fa-fw"></i> Pin Generat List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>pin_generat/pin_generate.html"><i class="fa fa-plus-square fa-fw"></i> Pin Generat</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>







                        <?php } if ($this->functions->hasPermission('download_list') == true) { ?>
                            <li>
                                <a href="#"><i class="fa fa-fw"></i> Deposit/Withdraw<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <?php if ($this->functions->hasPermission('download_list') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>admin_ut/deposit_request/"><i class="fa fa-list fa-fw"></i> Deposit Request</a>
                                        </li>
                                    <?php } if ($this->functions->hasPermission('add_download') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>admin_ut/withdraw_request/"><i class="fa fa-plus-square fa-fw"></i> Withdraw Requet</a>
                                        </li>
                                    <?php } if ($this->functions->hasPermission('add_download') == true) { ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>admin_ut/balance_history/"><i class="fa fa-plus-square fa-fw"></i> Agent balance history</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        
                        <?php } if ($this->functions->hasPermission('download_list') == true) { ?>
                            <li>
                                <a href="#"><i class="fa fa-fw"></i> Point History<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <?php if ($this->functions->hasPermission('download_list') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>admin_ut/point_history/"><i class="fa fa-list fa-fw"></i> Point History</a>
                                        </li>
                                    <?php } /* if ($this->functions->hasPermission('add_download') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>admin_ut/withdraw_request/"><i class="fa fa-plus-square fa-fw"></i> Withdraw Requet</a>
                                        </li>
                                    <?php } */ ?>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        <?php } ?>
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('general_settings') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>general_settings.html">General Settings</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('slider') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>general_settings/slider.html">Slider</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('gallery') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>general_settings/gallery.html">Gallery</a>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php /* if ($this->functions->hasPermission('user_list') == true) { ?>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<?php if ($this->functions->hasPermission('user_list') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/users_list.html">All Users</a>
                                </li>
                                <?php } if ($this->functions->hasPermission('add_user') == true) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/add_user.html">Add User</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="#">User Role management <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                    	<?php if ($this->functions->hasPermission('user_role_list') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>role/users_role_list.html">All User Roles</a>
                                        </li>
                                        <?php } if ($this->functions->hasPermission('add_role') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>role/add_role.html">Add Roles</a>
                                        </li>
                                        <?php } if ($this->functions->hasPermission('permission_list') == true) { ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>role/access_permission.html">Permissions List</a>
                                        </li>
                                        <?php } ?>
                                     
                                    </ul>
                                    <!-- /.nav-third-level -->
                                    
                                    
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } */ ?>

                        
                        
                        
                              
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
