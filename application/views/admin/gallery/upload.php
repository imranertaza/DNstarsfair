<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Picture Into Gallery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <ul class="nav nav-tabs">
              <li><a href="<?php echo base_url(); ?>general_settings/gallery.html">Image List</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>general_settings/upload_image_gallery.html">Upload</a></li>
            </ul>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            	<?php print $report; ?>
                            	<form method="post" action="<?php print base_url(); ?>general_settings/upload_image_gallery.html" enctype="multipart/form-data">
                                        <div class="form-group col-lg-6">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="sl_name">
                                            <p class="help-block">Please put the title of picute</p>
                                            <input type="hidden" name="type" value="gallery">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Image</label>
                                            <input type="file" name="main_img" class="form-control" />
                                            <p class="help-block">Please select a picture</p>                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <button type="submit" name="create_gallery" class="btn btn-default btn btn-primary">Create</button>
                                        </div>
									</form>
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