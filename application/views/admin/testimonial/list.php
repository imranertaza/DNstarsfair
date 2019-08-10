<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Testimonial List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <ul class="nav nav-tabs">
              <li class="active"><a href="<?php echo base_url(); ?>testimonial/testimonial_list.html">List</a></li>
              <li><a href="<?php echo base_url(); ?>testimonial/create.html">Create</a></li>
            </ul>
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="10">ID</th>
                                            <th width="400">Student Name</th>
                                            <th width="200">Reg. No</th>
                                            <th width="200">Seassion</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            	<?php
                                if (is_array($list_testimonial))
								{
								   foreach ($list_testimonial as $rows)
								   {
									?>
                                    <tr class="odd gradeX" id="download_<?php print $rows->test_id; ?>">
                                        <td><?php print $rows->test_id; ?></td>
                                        <td><?php print $rows->name; ?></td>
                                        <td><?php print $rows->reg_no; ?></td>
                                        <td><?php print $rows->seassion; ?></td>
                                        <td class="center">
                                        <?php if ($this->functions->hasPermission('testimonial_view') == true) { ?>
                                        <a href="<?php print base_url(); ?>testimonial/view/<?php print $rows->test_id; ?>.html" class="btn btn-primary take_margin" title="View"><i class="fa fa-fw"></i></a>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                    <?php
								   }
								}else {
									print '<tr class="odd gradeX"><td colspan="4">No result Found.</td></tr>';	
								}
								?>
                                 </tbody>
                                </table>
                            </div>
                            <?php print $pagination; ?>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

        </div>