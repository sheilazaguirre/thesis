<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Lessons</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lesson/add'); ?>" class="btn btn-success btn-sm">Add Lesson</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="lessonTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Class ID</th>
						<th>File</th>
						<th>Description</th>
						<th>Title</th>
						<th>Date Uploaded</th>
						<th>Date Modified</th>
						<th>Date Expiry</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($lessons as $l){ ?>
                    <tr>
						<td><?php echo $l['lessonID']; ?></td>
						<td><?php echo $l['classID']; ?></td>
						<td><a href="../uploads/lessons/<?php echo $l['lessonFile']; ?>" target="_blank" id="btnDownload" class='btn btn-success' download>
                        Download
                        </a></td>
						<td><?php echo $l['lessonDesc']; ?></td>
						<td><?php echo $l['lessonTitle']; ?></td>
						<td><?php echo $l['dateUploaded']; ?></td>
						<td><?php echo $l['dateModified']; ?></td>
						<td><?php echo $l['dateExpiry']; ?></td>
						<td><?php echo $l['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('lesson/edit/'.$l['lessonID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lesson/remove/'.$l['lessonID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<script type=text/javascript>
    $("#btnDownload").click(function (){
        // var idnum = $_SESSION['idnumber']
    //     $.ajax({
    //         type:"POST",
    //         url: "<?php echo base_url(); ?> function na gagawin mo",
    //         data: {"idnum": idnum},
    //         success: function (response) 
    //         {
    //             alert("Successfully downloaded");
    //         }
    //     })
    // }
    
    )
</script>