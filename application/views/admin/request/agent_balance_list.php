<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agent Balance List</h1>
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
                                <th width="150"><input class="form-control" name="username"></th>
                                <th width="100"><input class="form-control" name="balance"></th>
                                <th width="100"><button type="submit" name="add_download" class="btn btn-default btn btn-primary">Update Balance</button></th>
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
                                            <td><?php print $rows->OP_game_balance; ?></td>
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
        

