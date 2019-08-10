<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Catagory List</h1>
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
                                            <th width="135">ID</th>
                                            <th width="291">Catagory Name</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php print $this->category_mod->category_list(); ?>
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
function delete_pro_cat(pro_cat_id){
          var yes = confirm('Do you want to delete permanently? ');
          if(yes){
          $.ajax({
                 url: '<?php print base_url(); ?>ajax.html/?delete_pro_cat=yes',
                 type: "POST",
                 dataType: "text",
                 data: {pro_cat_id: pro_cat_id},
                 beforeSend: function(){
                       $('#cat_'+pro_cat_id).css( 'background','#F00');
                 },
                 success: function(msg){
                      $('#cat_'+pro_cat_id).fadeOut( 'slow' );
                 }
          });
          }
     }
</script>
