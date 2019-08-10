<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Product</h1>
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
                                <?php
								if ($report) {
									print $report;
								?>
                                <!--<meta http-equiv="refresh" content="10;URL=<?php print base_url(); ?>admin_area/product/add/" />-->
                                <?php } ?>
                                </div>
                                <form method="post" action="" enctype="multipart/form-data">
                                <div class="col-lg-12">
                                	<div class="col-lg-6">
                                        <label>Product Name</label><sup>*</sup>
                                        <?php echo form_error('name', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="name">
                                        <p class="help-block help_text">Product's full name</p>
                                        
                                        
                                        <label>Product Price</label><sup>*</sup>
                                        <?php echo form_error('price', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="price">
                                        <p class="help-block help_text">Product's full name</p>
                                        
                                        
                                        <label>Model</label><sup>*</sup>
                                        <?php echo form_error('model', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="model">
                                        <p class="help-block help_text">Product's model</p>
                                        <label>Menufacture</label><sup>*</sup>
                                        <?php echo form_error('men_id', '<p class="error">', '</p>'); ?>
                                        <select name="men_id" class="form-control">
                                        	<option value="0">Select One</option>
                                        	<?php print menufacture_list(); ?>
                                        </select>
                                        <p class="help-block help_text">Product's Menufacture</p>
                                        <label>Catagories</label><sup>*</sup>
                                        <?php echo form_error('pro_cat_id', '<p class="error">', '</p>'); ?>
                                        <select name="pro_cat_id" class="form-control">
                                        	<option value="0">Select One</option>
                                        	<?php print product_cat_list(); ?>
                                        </select>
                                        <p class="help-block help_text">Product's Catagories</p>
                                        <label>Filter</label>
                                        <?php echo form_error('filter', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="filter">
                                        <p class="help-block help_text">Product's filter</p>
                                        <label>Color</label>
                                        <?php echo form_error('color', '<p class="error">', '</p>'); ?>
                                        <select name="color" class="form-control">
                                        	<option value="0">Select One</option>
                                        	<?php print colors_list(); ?>
                                        </select>
                                        <p class="help-block help_text">Product's color</p>
                                        <label>Size</label>
                                        <?php echo form_error('size', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="size">
                                        <p class="help-block help_text">Product's size</p>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <label>Photo</label>
                                        <?php echo form_error('main_img', '<p class="error">', '</p>'); ?>
                                        <input type="file" name="main_img" />
                                        <p class="help-block help_text">Photo of the Product</p>
                                        <label>Point</label><sup>*</sup>
                                        <?php echo form_error('point', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="point">
                                        <p class="help-block help_text">Product's point</p>
                                        <label>Quality</label>
                                        <?php echo form_error('quality', '<p class="error">', '</p>'); ?>
                                        <select name="quality" class="form-control">
                                        	<?php print quality_options(); ?>
                                        </select>
                                        <p class="help-block help_text">Product's quantity</p>
                                        <label>Quantity</label>
                                        <?php echo form_error('quantity', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="quantity">
                                        <p class="help-block help_text">Product's quality</p>
                                        <label>Discount</label>
                                        <?php echo form_error('discount', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="discount">
                                        <p class="help-block help_text">Product's discount</p>
                                        <label>Special</label>
                                        <?php echo form_error('special', '<p class="error">', '</p>'); ?>
                                        <select class="form-control" name="special">
                                        	<?php print special_options(); ?>
                                        </select>
                                        <p class="help-block help_text">Product's special</p>
                                    </div>
                                  
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            
                            	
                                <div class="col-lg-12">
                                    <label>Description</label>
                                    <?php echo form_error('description', '<p class="error">', '</p>'); ?>
                                        <textarea name="description" id="ckeditor" class="ckeditor"></textarea>
                                        <p class="help-block help_text">Some details about the Product</p>
                                    <button type="submit" name="add_pro" class="btn btn-default btn btn-primary">Add Product</button>
                                </div>
                                </form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
        </div>