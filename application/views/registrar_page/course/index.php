<div class="row">
<div class="col-md-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Courses Listing</h3>
            <div class="box-tools">
                <a href="<?php echo site_url('reg_course/add'); ?>" class="btn btn-success btn-sm">Add</a> 
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped">
                <tr>
                    <th>CourseID</th>
                    <th>CourseCode</th>
                    <th>CourseName</th>
                    <th>Remarks</th>
                    <th>DateAdded</th>
                    <th>DateModified</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($courses as $c){ ?>
                <tr>
                    <td><?php echo $c['courseID']; ?></td>
                    <td><?php echo $c['courseCode']; ?></td>
                    <td><?php echo $c['courseName']; ?></td>
                    <td><?php echo $c['remarks']; ?></td>
                    <td><?php echo $c['dateAdded']; ?></td>
                    <td><?php echo $c['dateModified']; ?></td>
                    <td>
                        <a href="<?php echo site_url('reg_course/edit/'.$c['courseID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                        <a href="<?php echo site_url('reg_course/remove/'.$c['courseID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <div class="pull-right">
                <?php echo $this->pagination->create_links(); ?>                    
            </div>                
        </div>
    </div>
</div>
</div>
