<div class="row">
<div class="col-md-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Classlist Listing</h3>
            <div class="box-tools">
                <a href="<?php echo site_url('classlist/add'); ?>" class="btn btn-success btn-sm">Add</a> 
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped">
                <tr>
                    <th>ClassListID</th>
                    <th>ClassID</th>
                    <th>StudentID</th>
                    <th>Remarks</th>
                    <th>DateAdded</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($classlist as $c){ ?>
                <tr>
                    <td><?php echo $c['classListID']; ?></td>
                    <td><?php echo $c['classID']; ?></td>
                    <td><?php echo $c['studentID']; ?></td>
                    <td><?php echo $c['remarks']; ?></td>
                    <td><?php echo $c['dateAdded']; ?></td>
                    <td>
                        <a href="<?php echo site_url('classlist/edit/'.$c['classListID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                        <a href="<?php echo site_url('classlist/remove/'.$c['classListID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
