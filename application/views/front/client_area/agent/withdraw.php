<div class="container-fluid dash_body">
  <div class="row">
        <div class="container wraper" style="padding-bottom: 20px;">

          <?php print $sidebar_left; ?>

          <div class="col-md-9">
            <div class="right_contant dashboard_right">
              <div class="top_right_content">
                <h1>User Withdraw</h1>
                <hr />
                
                <div class="top_right_content">
                  <div class="withdraw">
                    <form id="wdrw" method="POST" action="" class="form-inline">
                      <div class="form_group_user">
                        <label for="exampleInputEmail1">Earnings - Matching</label>
                      </div>
                      <div class="form_group_user">
                        <p>Available Commission Balance = 0.00</p>
                        <p></p>
                      </div>
                      <div class="form_group_user">
                        <label for="exampleInputEmail1">Withdraw Amount</label><br />
                        <input type="text" class="form-control withdraw_amount" name="amount" value="" required="required" placeholder="Enter your amount">
                      </div>
                      <div class="form_group_user">
                        <label for="exampleInputEmail1">Withdraw Charge</label><br />
                        <input type="text" class="form-control" id="withdraw_charge" disabled="">
                      </div>
                      <div class="form_group_user">
                        <label for="exampleInputEmail1">Payable Amount</label><br />
                        <input type="text" class="form-control" id="payable_amount" disabled="">
                      </div>
                      <div class="form_group_user">
                        <label for="exampleInputEmail1">Agent ID</label><br />
                        <input type="text" class="form-control" name="agent_id" value="" required="required" placeholder="Enter your agent id">
                      </div>
                      <div class="form_group_user">
                        <label for="exampleInputPassword1">Remarks</label><br />
                        <textarea class="form-control" placeholder="Enter your remarks" name="remarks" rows="3"></textarea>
                      </div>
                      <div class="form_group_user"><br />
                      <input type="submit" class="btn btn-primary" name="withdraw" value="Withdraw">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>