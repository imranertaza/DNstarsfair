<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Download List</h1>
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
                                            <th width="10">ID</th>
                                            <th width="400">Title</th>
                                            <th width="200">File</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //$this->downloads->download_list(); ?>
                                        <?php //$this->portfolio_function->portfolio_list(); 
										foreach ($records as $rows)
										{
										?>
                                        <tr class="odd gradeX" id="download_<?php print $rows->dwn_id; ?>">
                                            <td><?php print $rows->dwn_id; ?></td>
                                            <td><?php print $rows->title; ?></td>
                                            <td><?php print $rows->file; ?></td>
                                            <td class="center">
                                            <?php if ($this->functions->hasPermission('edit_download') == true) { ?>
                                            <a href="<?php print base_url(); ?>download/edit_download/<?php print $rows->dwn_id; ?>.html" class="btn btn-primary take_margin" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                            <?php } ?>
                                            <?php if ($this->functions->hasPermission('delete_download') == true) { ?>
                                            <a onclick="delete_download(<?php print $rows->dwn_id; ?>);" class="btn btn-danger take_margin" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
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
function delete_download(dwn_id){
          var yes = confirm('Do you want to delete permanently? ');
          if(yes){
          $.ajax({
                 url: '<?php print base_url(); ?>ajax.html/?delete_download=yes',
                 type: "POST",
                 dataType: "text",
                 data: {dwn_id: dwn_id},
                 beforeSend: function(){
                       $('#download_'+dwn_id).css( 'background','#F00');
                 },
                 success: function(msg){
                      $('#download_'+dwn_id).fadeOut( 'slow' );
                 }
          });
          }
     }
</script>

