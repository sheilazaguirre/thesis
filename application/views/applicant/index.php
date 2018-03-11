<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Applicant Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('applicant/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <a href="<?php echo site_url('reports/applicant'); ?>" class="btn btn-warning btn-sm" target="_blank">Generate Report</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="tbapp" class="table table-striped datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Applicant Name</th>
                        <th>Course</th>
                        <th>Applicant Status</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Civil Status</th>
                        <th>Nationality</th>
                        <th>Date Submitted</th>
                        <th>Date Modified</th>
                        <th>Actions</th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php foreach($applicant as $a){ ?>
                        <tr>
                            <td><?php echo $a['apid']; ?></td>
                            <td><?php echo $a['apfn']; ?> <?php echo $a['apmn']; ?> <?php echo $a['apln']; ?></td>
                            <td><?php echo $a['courseCode']; ?></td>
                            <td><?php echo $a['studentstat']; ?></td>
                            <td><?php echo $a['age']; ?></td>
                            <td><?php echo $a['gender']; ?></td>
                            <td><?php echo $a['civstat']; ?></td>
                            <td><?php echo $a['nationality']; ?></td>
                            <td><?php echo $a['datesubmitted']; ?></td>
                            <td><?php echo $a['datemodified']; ?></td>
                            <td>
                                <a href="<?php echo site_url('applicant/edit/'.$a['apid']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil" ></span> Edit</a>
                                <a href="<?php echo site_url('applicant/adduser/'.$a['apid']); ?>" class="btn btn-info btn-xs" onclick="confirm('Accept the Applicant?')"><span class="fa fa-envelope" ></span> Approve</a>
                                <?php echo form_close(); ?>
                                <a href="<?php echo site_url('applicant/remove/'.$a['apid']); ?>" class="btn btn-danger btn-xs" onclick="confirm('Remove the Applicant?')"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>

                </table>
                                
            </div>
        </div>
    </div>
</div>
