<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">District List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                        <div class="panel-body no_padding">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="291">District List</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										foreach($list->result() as $row) {
                                    	?>
										<tr>
                                            <td width="291"><?php print $row->name; ?></td>
                                            <td width="120">
                                            <?php if ($this->functions->hasPermission('edit_std') == true) { ?>
                                            <a href="#" class="btn btn-primary take_margin" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                            <?php } ?>
                                            <?php if ($this->functions->hasPermission('delete_std') == true) { ?>
                                            <a onclick="#" class="btn btn-danger take_margin" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        
        
        
<script>
function delete_cat(cat_id){
          var yes = confirm('Do you want to delete permanently? ');
          if(yes){
          $.ajax({
                 url: '<?php print base_url(); ?>ajax.html/?delete_cat=yes',
                 type: "POST",
                 dataType: "text",
                 data: {cat_id: cat_id},
                 beforeSend: function(){
                       $('#cat_'+cat_id).css( 'background','#F00');
                 },
                 success: function(msg){
                      $('#cat_'+cat_id).fadeOut( 'slow' );
                 }
          });
          }
     }
</script>
