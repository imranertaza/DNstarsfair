<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Option Bided</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                        <div class="panel-body no_padding">
                            <div class="table-responsive">
                                <ul class="list-group">
                                    <?php
                                    $i = 1;
                                    foreach($optionTakenList as $opiton) {
                                        $optionName = get_field_by_id_from_table('options', 'option_name', 'option_id', $opiton->option_id);
                                        $this->db->select_sum('amount');
                                        $this->db->order_by("option_id", "asc");
                                        $totalAmount = $this->db->get_where('op_game_participate', array("option_id" => $opiton->option_id))->row();

                                        print '<li class="list-group-item">'.$i.') You have perticipated on <b>'.$optionName.'</b> = '.$totalAmount->amount.' BDT</li>';
                                        $i++;
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        

