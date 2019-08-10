<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mainboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php print total_members(); ?></div>
                                    <div>Members</div>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->functions->hasPermission('tec_list') == true) { ?>
                        <a href="<?php echo base_url(); ?>admin_area/teacher/teacher_list.html">
                            <div class="panel-footer">
                                <span class="pull-left">Member List</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php print total_stockis(); ?></div>
                                    <div>Stockis</div>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->functions->hasPermission('std_list') == true) { ?>
                        <a href="<?php echo base_url(); ?>admin_area/student/student_list.html">
                            <div class="panel-footer">
                                <span class="pull-left">Stockis List</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php print total_agents(); ?></div>
                                    <div>Agents</div>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->functions->hasPermission('download_list') == true) { ?>
                        <a href="<?php echo base_url(); ?>download/download_list.html">
                            <div class="panel-footer">
                                <span class="pull-left">Agents List</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-files-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php print total_pages(); ?></div>
                                    <div>Pages</div>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->functions->hasPermission('page_list') == true) { ?>
                        <a href="<?php echo base_url(); ?>pages/page_list.html">
                            <div class="panel-footer">
                                <span class="pull-left">Pages List</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
<!--                <div class="col-lg-3 col-md-6">-->
<!--                    <div class="panel panel-red">-->
<!--                        <div class="panel-heading">-->
<!--                            <div class="row">-->
<!--                                <div class="col-xs-3">-->
<!--                                    <i class="fa fa-tasks fa-5x"></i>-->
<!--                                </div>-->
<!--                                <div class="col-xs-9 text-right">-->
<!--                                    <div>-->
<!--                                    --><?php //if ($this->functions->hasPermission('tc_list') == true) { ?>
<!--                                    <a style="color:#fff !important;" href="--><?php //echo base_url(); ?><!--tc/tc_list.html">TC</a>-->
<!--                                    --><?php //} ?><!--</div>-->
<!--                                    <div>--><?php //if ($this->functions->hasPermission('tc_list') == true) { ?>
<!--                                    <a style="color:#fff !important;" href="--><?php //echo base_url(); ?><!--tc/create.html">Create TC</a>-->
<!--                                    --><?php //} ?><!--</div>-->
<!--                                    <div>--><?php //if ($this->functions->hasPermission('testimonial_list') == true) { ?>
<!--                                    <a style="color:#fff !important;" href="--><?php //echo base_url(); ?><!--testimonial/testimonial_list.html">Testimonial</a>-->
<!--                                    --><?php //} ?><!--</div>-->
<!--                                    <div>--><?php //if ($this->functions->hasPermission('testimonial_list') == true) { ?>
<!--                                    <a style="color:#fff !important;" href="--><?php //echo base_url(); ?><!--testimonial/create.html">Create Testimonial</a>-->
<!--                                    --><?php //} ?><!--</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><?php //if ($this->functions->hasPermission('general_settings') == true) { ?>
<!--                        <a href="--><?php //echo base_url(); ?><!--general_settings.html">-->
<!--                            <div class="panel-footer">-->
<!--                                <span class="pull-left">General Settings</span>-->
<!--                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        --><?php //} ?>
<!--                    </div>-->
<!--                </div>-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php print total_users(); ?></div>
                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->functions->hasPermission('user_list') == true) { ?>
                        <a href="<?php echo base_url(); ?>user/users_list.html">
                            <div class="panel-footer">
                                <span class="pull-left">Users List</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        
        
    