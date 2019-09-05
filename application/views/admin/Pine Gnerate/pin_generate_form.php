<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pin Generate Form</h1>
                    
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
                                    
                                    <form method="post" action="<?php echo base_url(); ?>pin_generat/pin_generat_action">
                                        <div class="col-lg-4">
                                        <label>Agent Name <?php echo form_error('user_id') ?></label>
                                        <input class="form-control" name="user_id" onchange="check_agent(this.value)"  required>
                                        <p class="help-block help_text" id="spon_bar">Please put the Agent Name here</p>
                                        </div>

                                        <input class="form-control" type="hidden" name="pin" value="12" hidden>


                                        <div class="col-lg-4">
                                        <label>Amount <?php echo form_error('amount') ?></label>
                                        <input class="form-control" name="amount" required>
                                        <p class="help-block help_text">Please put the Amount here.</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <br>
                                        <button type="submit" class="btn btn-default btn btn-primary">Generat</button>
                                        </div>
                                    
                                    
                                    </form>
                                 </div>
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
            <!-- /.row -->

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