<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Timeslots</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('timeslot/add'); ?>" class="btn btn-success btn-sm">Add Timeslot</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="timeslotTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Day Of Week</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($timeslots as $t){ ?>
                    <tr>
						<td><?php echo $t['timeSlotID']; ?></td>
						<td><?php echo $t['dayOfWeek']; ?></td>
						<td><?php echo $t['startTime']; ?></td>
						<td><?php echo $t['endTime']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('timeslot/edit/'.$t['timeSlotID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('timeslot/remove/'.$t['timeSlotID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
