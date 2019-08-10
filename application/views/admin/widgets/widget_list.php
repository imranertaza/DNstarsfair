<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Block List</h1>
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
                                            <th width="291">Title</th>
                                            <th width="427">Short Description</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $this->widget->widget_list(); ?>
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
function delete_widget(w_id){
          var yes = confirm('Do you want to delete permanently? ');
          if(yes){
          $.ajax({
                 url: '<?php print base_url(); ?>ajax.html/?delete_widget=yes',
                 type: "POST",
                 dataType: "text",
                 data: {w_id: w_id},
                 beforeSend: function(){
                       $('#widget_'+w_id).css( 'background','#F00');
                 },
                 success: function(msg){
                      $('#widget_'+w_id).fadeOut( 'slow' );
                 }
          });
          }
     }
</script>

