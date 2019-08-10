<div class="col-md-3 sidebar">
		
        <div class="head_teacher_comment">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> Cart</h4>
            <div class="login_box cart">
            
            
            
			<?php //echo form_open('store');
			if ($this->cart->total_items()<=0) { print "The cart is empty."; }else { ?>
            <form method="post" action="<?php print base_url(); ?>store/">
            <table cellpadding="1" cellspacing="1" style="width:100%" border="0">
            
            <tr>
              <th>QTY</th>
              <th>Item</th>
              <th style="text-align:right">Price</th>
              <th style="text-align:right">Pnt</th>
              <th style="text-align:right">Total</th>
            </tr>
            
            <?php $i = 1; ?>
            <?php foreach ($this->cart->contents() as $items): ?>
            
                <tr>
                  <td width="10">
				  <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
				  <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '15', 'size' => '1')); ?></td>
                  <td width="60">
                    <?php echo $items['name']; ?>
                  </td>
                  <td width="10" style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                  
                  <td width="20" style="text-align:right">
				  <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
        
                                <strong><?php //echo $option_name; ?></strong> <?php echo $option_value*$items['qty']; ?><br />
        
                            <?php endforeach; ?>
                    <?php endif; ?>
                  </td>
                  
                  <td width="20" style="text-align:right"><?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>
            
            <?php $i++; ?>
            
            <?php endforeach; ?>
            
            <tr>
              <td colspan="3"></td>
              <td align="right"><strong>Total </strong></td>
              <td align="right"><strong><?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
            </tr>
            
            </table>
            <p><?php echo form_submit('update_cart', 'Update Cart'); ?></p>
            </form>
            <form method="post" action="">
                <input type="submit" name="empty" value="Empty Cart" style="float:right;" />
            </form>
            <?php } ?>
             <br class="clear" />
            </div>
        </div>
        
        
        <?php //echo form_open('store'); ?>
        <form method="post" action="<?php print base_url(); ?>store/buy/">
    	<div class="head_teacher_comment">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> Select Customer</h4>
            <div class="login_box">
            	<div class="form-group">
                    <label>Customer ID</label>
                    
                    <input class="form-control" name="username" type="text" value="<?php print empty($username) ? '' : $username; ?>" onchange="check_spon(this.value)" required>
                    <input class="form-control" name="agent_id" type="hidden" value="<?php print $ID; ?>" required>
                    <p class="help-block" id="spon_bar">Please put your phone</p>
                </div>
             <br class="clear" />
            </div>
        </div>
        
        
        <div class="head_teacher_comment">
        	<h4><i class="fa fa-bars logo_3_color" aria-hidden="true"></i> Select Referrer</h4>
            <div class="login_box">
            	<div class="form-group">
                    <label>Sopnsor ID</label>
                    <input class="form-control" name="spon_name" type="text" value="<?php print empty($spon_id) ? '' : get_field_by_id_from_table('users', 'username', 'ID', $spon_id); ?>" onchange="check_username(this.value)" required>
                    <p class="help-block" id="progress_bar">Please put your phone</p>
                </div>
                <input type="submit" name="complete" value="Complete" />
             <br class="clear" />
            </div>
        </div>
        <p></p>
        </form>
    </div>




<script>
function check_username(uname){
	  $.ajax({
			 url: '<?php print base_url(); ?>ajax.html/?check_username=yes',
			 type: "POST",
			 dataType: "text",
			 data: {username: uname},
			 beforeSend: function(){
				   $('#progress_bar').css( 'color','#238A09');
				   $('#progress_bar').html('<img src="<?php print base_url(); ?>/assets/images/loading.gif" width="20" alt="loading"/> Progressing...');
			 },
			 success: function(message){
				  //$('#progress_bar').html(msg);
				if (message==0) {
					$('#progress_bar').html('<span style="color:red">Invalid Username</span>');
				}else {
					$('#progress_bar').html('<span style="color:green">Valid Username</span>');
				 }
			 }
	  });
}


function check_spon(uname){
	  $.ajax({
			 url: '<?php print base_url(); ?>ajax.html/?check_username=yes',
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
				}else {
					$('#spon_bar').html('<span style="color:green">Valid Username</span>');
				 }
			 }
	  });
}

</script>