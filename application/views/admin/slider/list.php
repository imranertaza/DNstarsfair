<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Slides</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <ul class="nav nav-tabs">
              <li class="active"><a href="<?php echo base_url(); ?>general_settings/slider.html">Image List</a></li>
              <li><a href="<?php echo base_url(); ?>general_settings/create_slide.html">Upload</a></li>
            </ul>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="20">ID</th>
                                            <th width="206">Image</th>
                                            <th width="521">Title</th>
                                            <th width="72">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										if (is_array($records)) {
										foreach($records as $rows) {
										?>
                                        
                                        <tr class="odd gradeX" id="sl_<?php print $rows->sl_id; ?>">
                                            <td><?php print $rows->sl_id; ?></td>
                                            <td><?php print $this->functions->view_image($rows->sl_id, 400, 150); ?></td>
                                            <td><?php print $rows->name; ?></td>
                                            <td class="center">
                                            <?php if ($this->functions->hasPermission('delete_slider') == true) { ?>
                                            <a onclick="delete_slider(<?php print $rows->sl_id; ?>);" class="btn btn-danger take_margin" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        
                                        <?php }}else {print '<tr><td colspan="4">'.$records.'</td></tr>'; } ?>
                                        
                                    </tbody>
                                </table>
                                <p class="paginate"><?php print $pagination; ?></p>
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
function delete_slider(sl_id){
  var yes = confirm('Do you want to delete permanently? ');
  if(yes){
  $.ajax({
		 url: '<?php print base_url(); ?>ajax.html/?delete_slider=yes',
		 type: "POST",
		 dataType: "text",
		 data: {sl_id: sl_id},
		 beforeSend: function(){
			   $('#sl_'+sl_id).css( 'background','#F00');
		 },
		 success: function(msg){
			  $('#sl_'+sl_id).fadeOut('slow');
		 }
  });
  }
}
</script>
