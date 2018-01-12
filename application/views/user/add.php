<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userTypeID" class="control-label"><span class="text-danger">*</span>Usertype</label>
						<div class="form-group">
							<select name="userTypeID" class="form-control">
								<option value="">select usertype</option>
								<?php 
								foreach($all_usertype as $usertype)
								{
									$selected = ($usertype['userTypeID'] == $this->input->post('userTypeID')) ? ' selected="selected"' : "";

									echo '<option value="'.$usertype['userTypeID'].'" '.$selected.'>'.$usertype['userType'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userTypeID');?></span>
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="course" class="control-label"><span class="text-danger">*</span>Course</label>
                        <div class="form-group">
                            <select name="course" class="form-control">
                                <option value="">select</option>
                                <?php
                                $course_values = array(
                                    'BCA'=>'Bachelor of Computer Science',
                                    'BEE'=>'Bachelor of Elementary Education',
                                    'BSE'=>'Bachelor of Secondary Education',
                                );

                                foreach($course_values as $value => $display_text)
                                {
                                    $selected = ($value == $this->input->post('course')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('course');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="">select</option>
								<?php 
								$status_values = array(
									'Active'=>'Active',
									'Archived'=>'Archived',
								);

								foreach($status_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
						<div class="form-group">
							<select name="gender" class="form-control">
								<option value="">select</option>
								<?php 
								$gender_values = array(
									'Male'=>'Male',
									'Female'=>'Female',
								);

								foreach($gender_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('gender')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('gender');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userPassword" class="control-label"><span class="text-danger">*</span>UserPassword</label>
						<div class="form-group">
							<input type="password" name="userPassword" value="<?php echo $this->input->post('userPassword'); ?>" class="form-control" id="userPassword" />
							<span class="text-danger"><?php echo form_error('userPassword');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userIDNo" class="control-label"><span class="text-danger">*</span>UserIDNo</label>
						<div class="form-group">
							<input type="text" name="userIDNo" value="<?php echo $this->input->post('userIDNo'); ?>" class="form-control" id="userIDNo" />
							<span class="text-danger"><?php echo form_error('userIDNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userLN" class="control-label"><span class="text-danger">*</span>UserLN</label>
						<div class="form-group">
							<input type="text" name="userLN" value="<?php echo $this->input->post('userLN'); ?>" class="form-control" id="userLN" />
							<span class="text-danger"><?php echo form_error('userLN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userFN" class="control-label"><span class="text-danger">*</span>UserFN</label>
						<div class="form-group">
							<input type="text" name="userFN" value="<?php echo $this->input->post('userFN'); ?>" class="form-control" id="userFN" />
							<span class="text-danger"><?php echo form_error('userFN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userEmail" class="control-label"><span class="text-danger">*</span>UserEmail</label>
						<div class="form-group">
							<input type="text" name="userEmail" value="<?php echo $this->input->post('userEmail'); ?>" class="form-control" id="userEmail" />
							<span class="text-danger"><?php echo form_error('userEmail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userMobile" class="control-label"><span class="text-danger">*</span>UserMobile</label>
						<div class="form-group">
							<input type="text" name="userMobile" value="<?php echo $this->input->post('userMobile'); ?>" class="form-control" id="userMobile" />
							<span class="text-danger"><?php echo form_error('userMobile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthdate" class="control-label"><span class="text-danger">*</span>Birthdate</label>
						<div class="form-group">
							<input type="date" name="birthdate" value="<?php echo $this->input->post('birthdate'); ?>" class="date form-control" id="birthdate" />
							<span class="text-danger"><?php echo form_error('birthdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="age" class="control-label"><span class="text-danger">*</span>Age</label>
						<div class="form-group">
							<input type="text" name="age" value="<?php echo $this->input->post('age'); ?>" class="form-control" id="age" />
							<span class="text-danger"><?php echo form_error('age');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="civstat" class="control-label"><span class="text-danger">*</span>Civstat</label>
						<div class="form-group">
							<input type="text" name="civstat" value="<?php echo $this->input->post('civstat'); ?>" class="form-control" id="civstat" />
							<span class="text-danger"><?php echo form_error('civstat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nationality" class="control-label"><span class="text-danger">*</span>Nationality</label>
						<div class="form-group">
							<input type="text" name="nationality" value="<?php echo $this->input->post('nationality'); ?>" class="form-control" id="nationality" />
							<span class="text-danger"><?php echo form_error('nationality');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="religion" class="control-label"><span class="text-danger">*</span>Religion</label>
						<div class="form-group">
							<input type="text" name="religion" value="<?php echo $this->input->post('religion'); ?>" class="form-control" id="religion" />
							<span class="text-danger"><?php echo form_error('religion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="elemschool" class="control-label"><span class="text-danger">*</span>Elemschool</label>
						<div class="form-group">
							<input type="text" name="elemschool" value="<?php echo $this->input->post('elemschool'); ?>" class="form-control" id="elemschool" />
							<span class="text-danger"><?php echo form_error('elemschool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="secschool" class="control-label"><span class="text-danger">*</span>Secschool</label>
						<div class="form-group">
							<input type="text" name="secschool" value="<?php echo $this->input->post('secschool'); ?>" class="form-control" id="secschool" />
							<span class="text-danger"><?php echo form_error('secschool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tertchool" class="control-label"><span class="text-danger">*</span>Tertchool</label>
						<div class="form-group">
							<input type="text" name="tertchool" value="<?php echo $this->input->post('tertchool'); ?>" class="form-control" id="tertchool" />
							<span class="text-danger"><?php echo form_error('tertchool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="guardian" class="control-label">Guardian</label>
						<div class="form-group">
							<input type="text" name="guardian" value="<?php echo $this->input->post('guardian'); ?>" class="form-control" id="guardian" />
							<span class="text-danger"><?php echo form_error('guardian');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="relation" class="control-label">Relation</label>
						<div class="form-group">
							<input type="text" name="relation" value="<?php echo $this->input->post('relation'); ?>" class="form-control" id="relation" />
							<span class="text-danger"><?php echo form_error('relation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fathername" class="control-label"><span class="text-danger">*</span>Fathername</label>
						<div class="form-group">
							<input type="text" name="fathername" value="<?php echo $this->input->post('fathername'); ?>" class="form-control" id="fathername" />
							<span class="text-danger"><?php echo form_error('fathername');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fatherocc" class="control-label"><span class="text-danger">*</span>Fatherocc</label>
						<div class="form-group">
							<input type="text" name="fatherocc" value="<?php echo $this->input->post('fatherocc'); ?>" class="form-control" id="fatherocc" />
							<span class="text-danger"><?php echo form_error('fatherocc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mothername" class="control-label"><span class="text-danger">*</span>Mothername</label>
						<div class="form-group">
							<input type="text" name="mothername" value="<?php echo $this->input->post('mothername'); ?>" class="form-control" id="mothername" />
							<span class="text-danger"><?php echo form_error('mothername');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="motherocc" class="control-label"><span class="text-danger">*</span>Motherocc</label>
						<div class="form-group">
							<input type="text" name="motherocc" value="<?php echo $this->input->post('motherocc'); ?>" class="form-control" id="motherocc" />
							<span class="text-danger"><?php echo form_error('motherocc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthplace" class="control-label"><span class="text-danger">*</span>Birthplace</label>
						<div class="form-group">
							<textarea name="birthplace" class="form-control" id="birthplace"><?php echo $this->input->post('birthplace'); ?></textarea>
							<span class="text-danger"><?php echo form_error('birthplace');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="addcity" class="control-label"><span class="text-danger">*</span>Addcity</label>
						<div class="form-group">
							<textarea name="addcity" class="form-control" id="addcity"><?php echo $this->input->post('addcity'); ?></textarea>
							<span class="text-danger"><?php echo form_error('addcity');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="addprovince" class="control-label">Addprovince</label>
						<div class="form-group">
							<textarea name="addprovince" class="form-control" id="addprovince"><?php echo $this->input->post('addprovince'); ?></textarea>
							<span class="text-danger"><?php echo form_error('addprovince');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>