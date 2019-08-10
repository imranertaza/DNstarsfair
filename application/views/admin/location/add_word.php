<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Word</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            
                            	<form method="post" action="">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ward Name</label>
                                            <?php echo form_error('ward_name', '<p class="error">', '</p>'); ?>
                                            <input class="form-control" name="ward_name">
                                            <p class="help-block">Name of the ward</p>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label>Name of the Division</label>
                                            <?php echo form_error('division', '<p class="error">', '</p>'); ?>
                                        	<select class="form-control" name="division" onchange="get_district(this.value);">
                                            	<option value="0">Select Division.</option>
                                            	<?php print get_location(0); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        	<label>Name of the District</label>
                                        	<?php echo form_error('district', '<p class="error">', '</p>'); ?>
                                        	<select class="form-control" name="district" id="district" onchange="get_thana(this.value);">
                                            	<option value="0">Select District.</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<?php echo form_error('perent', '<p class="error">', '</p>'); ?>
                                        	<label>Name of the Thana/Upazila</label>
                                        	<select class="form-control" name="perent" id="thana">
                                            	<option value="0">Select Thana/Upazila.</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default btn btn-primary" name="add_ward">Add</button>
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
        

<script>
function get_district(division_id) {
	$.ajax({
			 url: '<?php print base_url(); ?>ajax.html/?check_district=yes',
			 type: "POST",
			 dataType: "text",
			 data: {division_id: division_id},
			 beforeSend: function(){
				   $('#district').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
			 },
			 success: function(msg){
				  $('#district').html(msg);
			 }
	  });
}


function get_thana(district_id) {
	$.ajax({
			 url: '<?php print base_url(); ?>ajax.html/?check_thana=yes',
			 type: "POST",
			 dataType: "text",
			 data: {district_id: district_id},
			 beforeSend: function(){
				   $('#thana').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
			 },
			 success: function(msg){
				  $('#thana').html(msg);
			 }
	  });
}
</script>