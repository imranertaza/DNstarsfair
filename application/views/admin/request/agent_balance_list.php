<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agent Balance List</h1>
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body no_padding">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th width="150">Username</th>
                                <th width="100">Balance</th>
                                <th width="100">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form method="post" action="<?php print base_url(); ?>admin_ut/balance_history/balance_update_action/">
                            <tr>
                                <th width="150">
                                    
                                    <input class="form-control" name="username" id="myInput" onchange="check_agent(this.value)"  required>
                                        <p class="help-block help_text" id="spon_bar">Please put the Agent Name here</p>
                                </th>
                                <th width="100"><input class="form-control" name="balance" required></th>
                                <th width="100"><button type="submit" name="add_download" class="btn btn-default btn btn-primary">Load Balance</button></th>
                            </tr>
                            </form>
                            </tbody>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                        <div class="panel-body no_padding">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="150">Username</th>
                                            <th width="100">Balance</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //$this->downloads->download_list(); ?>
                                        <?php //$this->portfolio_function->portfolio_list(); 
										foreach ($records as $rows)
										{
										?>
                                        <tr class="odd gradeX">
                                            <td><?php print $rows->username ?></td>
                                            <td><?php print $rows->balance; ?></td>
                                            <td><?php print $rows->status; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <p class="paginate"><?php //print $pagination; ?></p>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>


<script type="text/javascript">
    function check_agent(uname){
      $.ajax({
             url: '<?php print base_url(); ?>ajax.html/?check_agent=yes',
             type: "POST",
             dataType: "text",
             data: {username: uname},
             beforeSend: function(){
                   $('#spon_bar').css( 'color','#238A09');
                   $('#spon_bar').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
             },
             success: function(message){
                  //$('#progress_bar').html(msg);
                if (message==0) {
                    $('#spon_bar').html('<span style="color:red">Invalid Username</span>');
                    document.getElementById('myInput').value = ''
                }else {
                    $('#spon_bar').html('<span style="color:green">Valid Username</span>');
                 }
             }
      });
}

</script>
        

