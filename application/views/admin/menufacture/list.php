<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Menufacture List</h1>
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
                                            <th width="291">Menufacture Name</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php print $this->menufacture_mod->category_list(); ?>
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
function delete_mnu(mnu_id){
          var yes = confirm('Do you want to delete permanently? ');
          if(yes){
          $.ajax({
                 url: '<?php print base_url(); ?>ajax.html/?delete_menu=yes',
                 type: "POST",
                 dataType: "text",
                 data: {mnu_id: mnu_id},
                 beforeSend: function(){
                       $('#cat_'+mnu_id).css( 'background','#F00');
                 },
                 success: function(msg){
                      $('#cat_'+mnu_id).fadeOut( 'slow' );
                 }
          });
          }
     }
</script>
