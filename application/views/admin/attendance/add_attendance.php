<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Attendance</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            	<?php print $msg; ?>
                            	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                	<thead>
                                        <tr>
                                            <th width="291">Date</th>
                                            <th width="291">Class Name</th>
                                            <th width="120">Group Name</th>
                                            <th width="120">Total Student</th>
                                            <th width="120">Attendance</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<form method="post" action="<?php print base_url(); ?>attendance/add_attendance.html">
                                    	<tr>
                                            <td width="120">
											<input type="text" name="date" class="form-control" id="datepicker" value="<?php print date('d-m-Y'); ?>" />
                                            </td>
                                            <td width="291">
											<select name="class" id="class" class="form-control">
                                            <option>Please select a class</option>
											<?php print class_list($class_id); ?>
                                            </select>
                                            </td>
                                            <td width="120">
											<select name="group" class="form-control" id="group_list" onChange="getTotalStudent(this.value);">
                                            <option>Please select a group</option>
											<?php print group_list($group_id); ?>
                                            </select>
                                            </td>
                                            <td width="120">
											<input type="text" name="total_student" id="total_student" readonly="readonly" value="0" class="form-control" />
                                            </td>
                                            <td width="120">
                                            <input type="text" name="attendance" class="form-control" />
                                            </td>
                                            <td width="120"><input type="submit" class="btn btn-default btn btn-primary" name="add_attendance" value="+ Add"></td>
                                        </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        
        
<script>
/*function getGroup(val) {
	$.ajax({
	type: "POST",
	url: "<?php //print base_url(); ?>/ajax.html/?group_list=yes",
	data:'class='+val,
	success: function(data){
		$("#group_list").html(data);
	}
	});
}*/


function getTotalStudent(val){
	var class_id = $("#class option:selected").val();
	$.ajax({
	type: "POST",
	url: "<?php print base_url(); ?>ajax.html/?total_student=yes",
	data:{group_id: val, class_id: class_id},
	success: function(data){
		$("#total_student").val(data);
	}
	});
}

</script>
