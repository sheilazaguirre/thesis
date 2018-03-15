<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Faculty</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userTypeID" class="control-label"><span class="text-danger">*</span>User type</label>
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
                    <!--<div class="col-md-6">
                        <label for="course" class="control-label"><span class="text-danger"></span>Course</label>
                        <div class="form-group">
                            <select name="course" class="form-control">
                                <option value="">select</option>
                                <?//php
                                // $course_values = array(
                                //     'Bachelor of Science in Computer Science'=>'Bachelor of Science in Computer Science',
                                //     'Bachelor of Elementary Education'=>'Bachelor of Elementary Education',
                                //     'BSE- Major in English'=>'Bachelor of Secondary Education - Major in English',
                                //     'BSE - Major in Mathematics'=>'Bachelor of Secondary Education - Major in Mathematics',
                                //     'BSE - Major in Filipino'=>'Bachelor of Secondary Education - Major in Filipino',
                                //     'BSBA - Major in Mathematics'=>'Bachelor of Science in Business Administration - Major in Management',
                                // );
                                // foreach($course_values as $value => $display_text)
                                // {
                                //     $selected = ($value == $this->input->post('course')) ? ' selected="selected"' : "";

                                //     echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                // }
                                ?>
                            </select>
                            <span class="text-danger"><//?php echo form_error('course');?></span>
                        </div>
                    </div>-->

					<div class="col-md-6">
						<label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
                        <div class="form-group">
                            <input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
                            <span class="text-danger"><?php echo form_error('gender');?></span>
                        </div>
					</div>
					<div class="col-md-6">
						<label for="userIDNo" class="control-label"><span class="text-danger">*</span>ID Number</label>
						<div class="form-group">
							<input type="text" name="userIDNo" value="<?php echo $this->input->post('userIDNo'); ?>" class="form-control" id="userIDNo" />
							<span class="text-danger"><?php echo form_error('userIDNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userLN" class="control-label"><span class="text-danger">*</span>Last Name</label>
						<div class="form-group">
							<input type="text" name="userLN" value="<?php echo $this->input->post('userLN'); ?>" class="form-control" id="userLN" />
							<span class="text-danger"><?php echo form_error('userLN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userFN" class="control-label"><span class="text-danger">*</span>First Name</label>
						<div class="form-group">
							<input type="text" name="userFN" value="<?php echo $this->input->post('userFN'); ?>" class="form-control" id="userFN" />
							<span class="text-danger"><?php echo form_error('userFN');?></span>
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="userMN" class="control-label"><span class="text-danger">*</span>Middle Name</label>
                        <div class="form-group">
                            <input type="text" name="userMN" value="<?php echo $this->input->post('userMN'); ?>" class="form-control" id="userMN" />
                            <span class="text-danger"><?php echo form_error('userMN');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="userEmail" class="control-label"><span class="text-danger">*</span>Email Address</label>
						<div class="form-group">
							<input type="email" name="userEmail" value="<?php echo $this->input->post('userEmail'); ?>" class="form-control" id="userEmail" />
							<span class="text-danger"><?php echo form_error('userEmail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userMobile" class="control-label"><span class="text-danger">*</span>Mobile</label>
						<div class="form-group">
							<input type="tel" pattern="[0-9-() ]*" placeholder="0-9 Only" name="userMobile" value="<?php echo $this->input->post('userMobile'); ?>" data-inputmask='"mask": "(0999)999-9999"' class="form-control" id="userMobile" data-mask required/>
							<span class="text-danger"><?php echo form_error('userMobile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthdate" class="control-label"><span class="text-danger">*</span>Birth date</label>
						<div class="form-group">
							<input type="date" name="birthdate" value="<?php echo $this->input->post('birthdate'); ?>" class="date form-control" id="birthdate" />
							<span class="text-danger"><?php echo form_error('birthdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="civstat" class="control-label"><span class="text-danger">*</span>Civil Status</label>
						<div class="form-group">
							<input type="text" name="civstat" value="<?php echo $this->input->post('civstat'); ?>" class="form-control" id="civstat" />
							<span class="text-danger"><?php echo form_error('civstat');?></span>
						</div>
					</div>
                    <div class="col-md-6">
                            <label for="nationality" class="control-label"><span class="text-danger">*</span>Nationality</label>
                            <div class="form-group">
                                <select name="nationality" class="form-control">
                                    <option value="">select</option>
                                    <?php
                                    $nationality_values= array(
                                        'Filipino'=>'Filipino',
                                        'Chinese'=>'Chinese',
                                    );

                                    foreach($nationality_values as $value => $display_text)
                                    {
                                        $selected = ($value == $this->input->post('nationality')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                    }
                                    ?>
                                </select>
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
						<label for="elemschool" class="control-label"><span class="text-danger">*</span>Elementary</label>
						<div class="form-group">
							<input type="text" name="elemschool" value="<?php echo $this->input->post('elemschool'); ?>" class="form-control" id="elemschool" />
							<span class="text-danger"><?php echo form_error('elemschool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="secschool" class="control-label"><span class="text-danger">*</span>Secondary</label>
						<div class="form-group">
							<input type="text" name="secschool" value="<?php echo $this->input->post('secschool'); ?>" class="form-control" id="secschool" />
							<span class="text-danger"><?php echo form_error('secschool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tertchool" class="control-label"><span class="text-danger">*</span>Tertiary</label>
						<div class="form-group">
							<input type="text" name="tertchool" value="<?php echo $this->input->post('tertchool'); ?>" class="form-control" id="tertchool" />
							<span class="text-danger"><?php echo form_error('tertchool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="guardian" class="control-label">Guardian's Name</label>
						<div class="form-group">
							<input type="text" name="guardian" value="<?php echo $this->input->post('guardian'); ?>" class="form-control" id="guardian" />
							<span class="text-danger"><?php echo form_error('guardian');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="relation" class="control-label">Relationship</label>
						<div class="form-group">
							<input type="text" name="relation" value="<?php echo $this->input->post('relation'); ?>" class="form-control" id="relation" />
							<span class="text-danger"><?php echo form_error('relation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fathername" class="control-label"><span class="text-danger">*</span>Father's Name</label>
						<div class="form-group">
							<input type="text" name="fathername" value="<?php echo $this->input->post('fathername'); ?>" class="form-control" id="fathername" />
							<span class="text-danger"><?php echo form_error('fathername');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fatherocc" class="control-label"><span class="text-danger">*</span>Father's Occupation</label>
						<div class="form-group">
							<input type="text" name="fatherocc" value="<?php echo $this->input->post('fatherocc'); ?>" class="form-control" id="fatherocc" />
							<span class="text-danger"><?php echo form_error('fatherocc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mothername" class="control-label"><span class="text-danger">*</span>Mother's Name</label>
						<div class="form-group">
							<input type="text" name="mothername" value="<?php echo $this->input->post('mothername'); ?>" class="form-control" id="mothername" />
							<span class="text-danger"><?php echo form_error('mothername');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="motherocc" class="control-label"><span class="text-danger">*</span>Mother's Occupation</label>
						<div class="form-group">
							<input type="text" name="motherocc" value="<?php echo $this->input->post('motherocc'); ?>" class="form-control" id="motherocc" />
							<span class="text-danger"><?php echo form_error('motherocc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthplace" class="control-label"><span class="text-danger">*</span>Birth place</label>
						<div class="form-group">
							<textarea name="birthplace" class="form-control" id="birthplace"><?php echo $this->input->post('birthplace'); ?></textarea>
							<span class="text-danger"><?php echo form_error('birthplace');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="addcity" class="control-label"><span class="text-danger">*</span>City Address</label>
						<div class="form-group">
							<textarea name="addcity" class="form-control" id="addcity"><?php echo $this->input->post('addcity'); ?></textarea>
							<span class="text-danger"><?php echo form_error('addcity');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="addprov" class="control-label">Provincial Address</label>
						<div class="form-group">
							<textarea name="addprov" class="form-control" id="addprov"><?php echo $this->input->post('addprov'); ?></textarea>
							<span class="text-danger"><?php echo form_error('addprov');?></span>
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