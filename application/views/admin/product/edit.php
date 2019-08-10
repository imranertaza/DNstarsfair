<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit New Product</h1>
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
                                <meta http-equiv="refresh" content="1;URL=<?php print base_url(); ?>admin_area/product/edit/<?php print $pro_id; ?>/" />
                                <?php } ?>
                                </div>
                                <form method="post" action="<?php print base_url(); ?>admin_area/product/edit/<?php print $pro_id; ?>" enctype="multipart/form-data">
                                <div class="col-lg-12">
                                	<div class="col-lg-6">
                                        <label>Product Name</label><sup>*</sup>
                                        <?php echo form_error('name', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="name" value="<?php print $row['name']; ?>"/>
                                        <p class="help-block help_text">Product's full name</p>
                                        
                                        
                                        <label>Product Price</label><sup>*</sup>
                                        <?php echo form_error('price', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="price" value="<?php print $row['price']; ?>">
                                        <p class="help-block help_text">Product's full name</p>
                                        
                                        
                                        <label>Model</label><sup>*</sup>
                                        <?php echo form_error('model', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="model" value="<?php print $row['model']; ?>">
                                        <p class="help-block help_text">Product's model</p>
                                        <label>Menufacture</label><sup>*</sup>
                                        <?php echo form_error('men_id', '<p class="error">', '</p>'); ?>
                                        <select name="men_id" class="form-control">
                                        	<option value="0">Select One...</option>
                                        	<?php print menufacture_list($row['men_id']); ?>
                                        </select>
                                        <p class="help-block help_text">Product's Menufacture</p>
                                        <label>Catagories</label><sup>*</sup>
                                        <?php echo form_error('pro_cat_id', '<p class="error">', '</p>'); ?>
                                        <select name="pro_cat_id" class="form-control" >
                                        	<option value="0">Select One</option>
                                        	<?php print product_cat_list($row['cat_id']); ?>
                                        </select>
                                        <p class="help-block help_text">Product's Catagories</p>
                                        <label>Filter</label>
                                        <?php echo form_error('filter', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="filter" value="<?php print $row['filter_id']; ?>">
                                        <p class="help-block help_text">Product's filter</p>
                                        <label>Color</label>
                                        <?php echo form_error('color', '<p class="error">', '</p>'); ?>
                                        <select name="color" class="form-control" >
                                        	<option value="0">Select One</option>
                                        	<?php print colors_list($row['colors']); ?>
                                        </select>
                                        <p class="help-block help_text">Product's color</p>
                                        <label>Size</label>
                                        <?php echo form_error('size', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="size" value="<?php print $row['size']; ?>">
                                        <p class="help-block help_text">Product's size</p>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <label>Photo</label>
                                        <?php print $pro_image; ?><br /> 
                                        <?php echo form_error('main_img', '<p class="error">', '</p>'); ?>
                                        <input type="file" name="main_img" />
                                        <p class="help-block help_text">Photo of the Product</p>
                                        <label>Point</label><sup>*</sup>
                                        <?php echo form_error('point', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="point" value="<?php print $row['point']; ?>">
                                        <p class="help-block help_text">Product's point</p>
                                        <label>Quality</label>
                                        <?php echo form_error('quality', '<p class="error">', '</p>'); ?>
                                        <select name="quality" class="form-control">
                                        	<?php print quality_options($row['quality']); ?>
                                        </select>
                                        <p class="help-block help_text">Product's quantity</p>
                                        <label>Quantity</label>
                                        <?php echo form_error('quantity', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="quantity" value="<?php print $row['quantity']; ?>">
                                        <p class="help-block help_text">Product's quality</p>
                                        <label>Discount</label>
                                        <?php echo form_error('discount', '<p class="error">', '</p>'); ?>
                                        <input class="form-control" name="discount" value="<?php print $row['discount']; ?>">
                                        <p class="help-block help_text">Product's discount</p>
                                        <label>Special</label>
                                        <?php echo form_error('special', '<p class="error">', '</p>'); ?>
                                        <select class="form-control" name="special" value="<?php print $row['special']; ?>">
                                        	<?php print special_options($row['special']); ?>
                                        </select>
                                        <p class="help-block help_text">Product's special</p>
                                    </div>
                                  
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            
                            	
                                <div class="col-lg-12">
                                    <label>Description</label>
                                    <?php echo form_error('description', '<p class="error">', '</p>'); ?>
                                        <textarea name="description" id="ckeditor" class="ckeditor"><?php print $row['description']; ?></textarea>
                                        <p class="help-block help_text">Some details about the Product</p>
                                    <button type="submit" name="edit_pro" class="btn btn-default btn btn-primary">Update Product</button>
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