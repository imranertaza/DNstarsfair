<div class="container-fluid wraper">
  <div class="row">
        <div class="container" id="area_pad">

          <?php print $sidebar_left; ?>

          <div class="col-md-9">
            <div class="right_contant dashboard_right">
              <div class="top_right_content">
                <h1> Dashboard Statement </h1>
                <hr />
                  <?php if ($row->status == "Inactive") { ?>
                      <div class="alert alert-warning" role="alert">
                          Sorry! But your account is not active yet!. PLease <a href="<?php print base_url(); ?>member/general/load_money/">load balance</a> to your account and <a href="#">Active.</a>
                      </div>
                  <?php }

                  print $this->session->flashdata('msg');
                  ?>

                  <div class="dashboard_left_area">
                    <h3>Latest Referrals</h3>
                    <table class="table-bordered table-hover table">
                      <tbody>
                      
                      <tr>
                          <th>Username</th>
                          <th>Joining Date</th>
                        </tr>
                         <?php foreach ($query->result() as $ref_info){  ?>
                         <tr>
                          <td><?php echo get_username_by_id($ref_info->u_id);?></td>
                          <td><?php echo $ref_info->d_time;?></td>
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>

                  <div class="dashboard_right_area">
                    <div class="user_information">
                      <h3>User Informations</h3>
                      <table class="table-bordered table-hover table">
                        <tbody>
                          <tr>
                            <td><strong>Name</strong></td>
                            <td><?php echo $row->username;?></td>
                          </tr>
                          <tr>
                            <td><strong>Profile Picture</strong></td>
                            <td><?php print view_user_image($ID, 90, 90); ?></td>
                          </tr>
                          <tr>
                            <td><strong>Mobile Number</strong></td>
                            <td><?php echo $row->phn_no;?></td>
                          </tr>
                           <tr>
                            <td><strong>Balance</strong></td>
                            <td><?php echo $row->balance;?></td>
                          </tr>
                          <tr>
                              <td><strong>Status</strong></td>
                              <td>
                                  <?php $class =  ($row->status == "Active") ? "btn btn-success" : "btn btn-danger"; ?>
                                  <a href="<?php print base_url(); ?>member/general/change_status/" class="<?php print $class; ?>"><?php echo $row->status;?></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>

      </div>
    </div>
 </div>
