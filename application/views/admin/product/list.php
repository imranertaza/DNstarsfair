<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product List</h1>
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
                                            <th width="291">Name</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<form method="post" action="<?php print base_url(); ?>admin_area/product/listi/">
                                    	<tr>
                                            <td width="120">
											<input type="text" name="name" class="form-control" />
                                            </td>
                                            <td width="120"><input type="submit" class="btn btn-default btn btn-primary" name="add_attendance" value="Search"></td>
                                        </tr>
                                        </form>
                                    </tbody>
                                </table>
                            
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="20">ID</th>
                                            <th width="100">Image</th>
                                            <th width="249">Product Name</th>
                                            <th width="390">Short Description</th>
                                            <th width="182">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //$this->teacher_function->teacher_list(); 
										if ($records) {
										foreach($records as $rows) {
										?>
                                        
                                        <tr class="odd gradeX" id="tec_<?php print $rows->pro_id; ?>">
                                            <td><?php print $rows->pro_id; ?></td>
                                            <td><?php print $this->product_function->view_product_image($rows->pro_id, 90, 90); ?></td>
                                            <td><?php print $rows->name; ?></td>
                                            <td><?php print substr(strip_tags($rows->description), 0, 150); ?></td>
                                            <td class="center">
                                            <a href="<?php print base_url(); ?>admin_area/product/view/<?php print $rows->pro_id; ?>.html" class="btn btn-primary take_margin" title="View"><i class="fa fa-fw"></i></a>
                                            
                                            
                                            <?php if ($this->functions->hasPermission('edit_tec') == true) { ?>
                                            <a href="<?php print base_url(); ?>admin_area/product/edit/<?php print $rows->pro_id; ?>.html" class="btn btn-primary take_margin" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                            <?php }?>
                                            
                                            
                                            <?php if ($this->functions->hasPermission('delete_tec') == true) { ?>
                                            <a onclick="delete_iteam(<?php print $rows->pro_id; ?>);" class="btn btn-danger take_margin" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        <?php }}else { ?>
                                        <tr class="odd gradeX"><td colspan="5">No Product Found</td></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <p class="paginate"><?php print $pagination; ?></p>
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
function delete_iteam(pro_id){
          var yes = confirm('Do you want to delete permanently? ');
          if(yes){
          $.ajax({
                 url: '<?php print base_url(); ?>ajax.html/?delete_iteam=yes',
                 type: "POST",
                 dataType: "text",
                 data: {pro_id: pro_id},
                 beforeSend: function(){
                       $('#tec_'+pro_id).css( 'background','#F00');
                 },
                 success: function(msg){
                      $('#tec_'+pro_id).fadeOut( 'slow' );
                 }
          });
          }
     }
</script>

