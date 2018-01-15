<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['userID']); ?>
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
									$selected = ($usertype['userTypeID'] == $user['userTypeID']) ? ' selected="selected"' : "";

									echo '<option value="'.$usertype['userTypeID'].'" '.$selected.'>'.$usertype['userType'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userTypeID');?></span>
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
									$selected = ($value == $user['status']) ? ' selected="selected"' : "";

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
							<span class="text-danger"><?php echo form_error('gender');?></span>
                            <input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $user['gender']); ?>" class="form-control" id="gender" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userIDNo" class="control-label"><span class="text-danger">*</span>ID Number</label>
						<div class="form-group">
							<input type="text" name="userIDNo" value="<?php echo ($this->input->post('userIDNo') ? $this->input->post('userIDNo') : $user['userIDNo']); ?>" class="form-control" id="userIDNo" />
							<span class="text-danger"><?php echo form_error('userIDNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userLN" class="control-label"><span class="text-danger">*</span>Last Name</label>
						<div class="form-group">
							<input type="text" name="userLN" value="<?php echo ($this->input->post('userLN') ? $this->input->post('userLN') : $user['userLN']); ?>" class="form-control" id="userLN" />
							<span class="text-danger"><?php echo form_error('userLN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userFN" class="control-label"><span class="text-danger">*</span>First Name</label>
						<div class="form-group">
							<input type="text" name="userFN" value="<?php echo ($this->input->post('userFN') ? $this->input->post('userFN') : $user['userFN']); ?>" class="form-control" id="userFN" />
							<span class="text-danger"><?php echo form_error('userFN');?></span>
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="userMN" class="control-label"><span class="text-danger">*</span>Middle Name</label>
                        <div class="form-group">
                            <input type="text" name="userMN" value="<?php echo ($this->input->post('userMN') ? $this->input->post('userMN') : $user['userMN']); ?>" class="form-control" id="userMN" />
                            <span class="text-danger"><?php echo form_error('userMN');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="userEmail" class="control-label"><span class="text-danger">*</span>Email Address</label>
						<div class="form-group">
							<input type="text" name="userEmail" value="<?php echo ($this->input->post('userEmail') ? $this->input->post('userEmail') : $user['userEmail']); ?>" class="form-control" id="userEmail" />
							<span class="text-danger"><?php echo form_error('userEmail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userMobile" class="control-label"><span class="text-danger">*</span>Mobile</label>
						<div class="form-group">
                            <input type="tel" pattern="[0-9-() ]*" placeholder="0-9 Only" name="userMobile" value="<?php echo ($this->input->post('userMobile') ? $this->input->post('userMobile') : $user['userMobile']); ?>" data-inputmask='"mask": "(0999)999-9999"' class="form-control" id="userMobile" data-mask required/>
							<span class="text-danger"><?php echo form_error('userMobile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthdate" class="control-label"><span class="text-danger">*</span>Birthdate</label>
						<div class="form-group">
							<input type="date" name="birthdate" value="<?php echo ($this->input->post('birthdate') ? $this->input->post('birthdate') : $user['birthdate']); ?>" class="date form-control" id="birthdate" />
							<span class="text-danger"><?php echo form_error('birthdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="civstat" class="control-label"><span class="text-danger">*</span>Civil Status</label>
						<div class="form-group">
							<input type="text" name="civstat" value="<?php echo ($this->input->post('civstat') ? $this->input->post('civstat') : $user['civstat']); ?>" class="form-control" id="civstat" />
							<span class="text-danger"><?php echo form_error('civstat');?></span>
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="status" class="control-label"><span class="text-danger">*</span>Nationality</label>
                        <div class="form-group">
                            <select name="nationality" class="form-control">
                                <option value="">select</option>
                                <?php
                                $nationality_values = array(
                                    'Filipino'=>'Filipino',
                                    'Chinese'=>'Chinese',
                                );

                                foreach($nationality_values as $value => $display_text)
                                {
                                    $selected = ($value == $user['nationality']) ? ' selected="selected"' : "";

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
							<input type="text" name="religion" value="<?php echo ($this->input->post('religion') ? $this->input->post('religion') : $user['religion']); ?>" class="form-control" id="religion" />
							<span class="text-danger"><?php echo form_error('religion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="elemschool" class="control-label"><span class="text-danger">*</span>Elementary</label>
						<div class="form-group">
							<input type="text" name="elemschool" value="<?php echo ($this->input->post('elemschool') ? $this->input->post('elemschool') : $user['elemschool']); ?>" class="form-control" id="elemschool" />
							<span class="text-danger"><?php echo form_error('elemschool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="secschool" class="control-label"><span class="text-danger">*</span>Secondary</label>
						<div class="form-group">
							<input type="text" name="secschool" value="<?php echo ($this->input->post('secschool') ? $this->input->post('secschool') : $user['secschool']); ?>" class="form-control" id="secschool" />
							<span class="text-danger"><?php echo form_error('secschool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tertchool" class="control-label"><span class="text-danger">*</span>Tertiary</label>
						<div class="form-group">
							<input type="text" name="tertchool" value="<?php echo ($this->input->post('tertschool') ? $this->input->post('tertschool') : $user['tertschool']); ?>" class="form-control" id="tertchool" />
							<span class="text-danger"><?php echo form_error('tertchool');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="guardian" class="control-label">Guardian's Name</label>
						<div class="form-group">
							<input type="text" name="guardian" value="<?php echo ($this->input->post('guardian') ? $this->input->post('guardian') : $user['guardian']); ?>" class="form-control" id="guardian" />
							<span class="text-danger"><?php echo form_error('guardian');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="relation" class="control-label">Relationship</label>
						<div class="form-group">
							<input type="text" name="relation" value="<?php echo ($this->input->post('relation') ? $this->input->post('relation') : $user['relation']); ?>" class="form-control" id="relation" />
							<span class="text-danger"><?php echo form_error('relation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fathername" class="control-label"><span class="text-danger">*</span>Father's Name</label>
						<div class="form-group">
							<input type="text" name="fathername" value="<?php echo ($this->input->post('fathername') ? $this->input->post('fathername') : $user['fathername']); ?>" class="form-control" id="fathername" />
							<span class="text-danger"><?php echo form_error('fathername');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fatherocc" class="control-label"><span class="text-danger">*</span>Father's Occupation</label>
						<div class="form-group">
							<input type="text" name="fatherocc" value="<?php echo ($this->input->post('fatherocc') ? $this->input->post('fatherocc') : $user['fatherocc']); ?>" class="form-control" id="fatherocc" />
							<span class="text-danger"><?php echo form_error('fatherocc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mothername" class="control-label"><span class="text-danger">*</span>Mother's Name</label>
						<div class="form-group">
							<input type="text" name="mothername" value="<?php echo ($this->input->post('mothername') ? $this->input->post('mothername') : $user['mothername']); ?>" class="form-control" id="mothername" />
							<span class="text-danger"><?php echo form_error('mothername');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="motherocc" class="control-label"><span class="text-danger">*</span>Mother's Occupation</label>
						<div class="form-group">
							<input type="text" name="motherocc" value="<?php echo ($this->input->post('motherocc') ? $this->input->post('motherocc') : $user['motherocc']); ?>" class="form-control" id="motherocc" />
							<span class="text-danger"><?php echo form_error('motherocc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthplace" class="control-label"><span class="text-danger">*</span>Birth place</label>
						<div class="form-group">
							<textarea name="birthplace" class="form-control" id="birthplace"><?php echo ($this->input->post('birthplace') ? $this->input->post('birthplace') : $user['birthplace']); ?></textarea>
							<span class="text-danger"><?php echo form_error('birthplace');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="addcity" class="control-label"><span class="text-danger">*</span>City Address</label>
						<div class="form-group">
							<textarea name="addcity" class="form-control" id="addcity"><?php echo ($this->input->post('addcity') ? $this->input->post('addcity') : $user['addcity']); ?></textarea>
							<span class="text-danger"><?php echo form_error('addcity');?></span>
						</div>
					</div>
                    <div class="col-md-6">
                        <label for="addprov" class="control-label"><span class="text-danger"></span>Provincial Address</label>
                        <div class="form-group">
                            <textarea name="addprov" class="form-control" id="addprov"><?php echo ($this->input->post('addprov') ? $this->input->post('addprov') : $user['addprov']); ?></textarea>
                            <span class="text-danger"><?php echo form_error('addcity');?></span>
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