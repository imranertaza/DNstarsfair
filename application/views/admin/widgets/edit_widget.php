<?php
$selete_page = $this->db->get_where('widget', array('w_id' => $w_id));
$row = $selete_page->row_array();
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Block</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            	
                                <div class="col-lg-12">
                                <?php print $report = $this->widget->edit_widget($w_id);
								if ($report) {
								?>
                                <meta http-equiv="refresh" content="2;URL=<?php print base_url(); ?>widgets/edit_widget/<?php print $w_id; ?>.html" />
                                <?php } ?>
                                </div>
                                <div class="col-lg-12">
                                    <form method="post" action="" enctype="multipart/form-data">
                                	<div class="col-lg-8">
                                        <label>Post Title</label>
                                        <input class="form-control" name="title" value="<?php print $row['title']; ?>">
                                        <p class="help-block help_text">Please keep the title here</p>
                                        <label>Description</label>
                                        <textarea name="description" id="ckeditor" class="ckeditor"><?php print $row['description']; ?></textarea>
                                        <p class="help-block help_text">The description you want to show into the page</p>
                                        <button type="submit" name="edit_widget" class="btn btn-default btn btn-primary">Update Widget</button>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                    	<?php print $this->widget->view_post_image($w_id, 150, 150); ?>
                                        <label>Featured Image</label>
                                        <input type="file" name="f_img" />
                                        <p class="help-block help_text">Please set the main image of your product</p><br />
                                        <label>Block Code</label>
                                        <textarea class="form-control" name="b_code" rows="3"><?php print $row['b_code']; ?></textarea>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
        </div>