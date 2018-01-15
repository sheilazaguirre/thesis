<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Applicant Add</h3>
            </div>
            <?php echo form_open('applicant/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="course" class="control-label"><span class="text-danger">*</span>Course</label>
                        <div class="form-group">
                            <select name="course" class="form-control">
                                <option value="">select</option>
                                <?php
                                $course_values = array(
                                    'Bachelor of Science in Computer Science'=>'Bachelor of Science in Computer Science',
                                    'Bachelor of Elementary Education'=>'Bachelor of Elementary Education',
                                    'BSE- Major in English'=>'Bachelor of Secondary Education - Major in English',
                                    'BSE - Major in Mathematics'=>'Bachelor of Secondary Education - Major in Mathematics',
                                    'BSE - Major in Filipino'=>'Bachelor of Secondary Education - Major in Filipino',
                                    'BSBA - Major in Mathematics'=>'Bachelor of Science in Business Administration - Major in Management',
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
                        <label for="studentstat" class="control-label"><span class="text-danger">*</span>Student Status</label>
                        <div class="form-group">
                            <select name="studentstat" class="form-control">
                                <option value="">select</option>
                                <?php
                                $studentstat_values = array(
                                    'Approved'=>'Approved',
                                    'For Interview'=>'For Interview',
                                    'For Examination'=>'For Examination',
                                    'Pending'=>'Pending',
                                );

                                foreach($studentstat_values as $value => $display_text)
                                {
                                    $selected = ($value == $this->input->post('studentstat')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('studentstat');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="apfn" class="control-label"><span class="text-danger">*</span>First Name</label>
                        <div class="form-group">
                            <input type="text" name="apfn" value="<?php echo $this->input->post('apfn'); ?>" class="form-control" id="apfn" />
                            <span class="text-danger"><?php echo form_error('apfn');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="apln" class="control-label"><span class="text-danger">*</span>Last Name</label>
                        <div class="form-group">
                            <input type="text" name="apln" value="<?php echo $this->input->post('apln'); ?>" class="form-control" id="apln" />
                            <span class="text-danger"><?php echo form_error('apln');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="apmn" class="control-label"><span class="text-danger">*</span>Middle Name</label>
                        <div class="form-group">
                            <input type="text" name="apmn" value="<?php echo $this->input->post('apmn'); ?>" class="form-control" id="apmn" />
                            <span class="text-danger"><?php echo form_error('apmn');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="control-label"><span class="text-danger">*</span>Email Address</label>
                        <div class="form-group">

                            <input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
                            <span class="text-danger"><?php echo form_error('email');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="control-label"><span class="text-danger">*</span>Mobile</label>
                        <div class="form-group">
                            <input type="tel" pattern="[0-9-() ]*" placeholder="0-9 Only" name="mobile" value="<?php echo $this->input->post('mobile'); ?>" data-inputmask='"mask": "(0999)999-9999"' class="form-control" id="mobile" data-mask required />
                            <span class="text-danger"><?php echo form_error('mobile');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="birthdate" class="control-label"><span class="text-danger">*</span>Birthdate</label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" value="<?php echo $this->input->post('birthdate'); ?>" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask="">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="birthplace" class="control-label"><span class="text-danger">*</span>Birthplace</label>
                        <div class="form-group">
                            <input type="text" name="birthplace" value="<?php echo $this->input->post('birthplace'); ?>" class="form-control" id="birthplace" />
                            <span class="text-danger"><?php echo form_error('birthplace');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
                        <div class="form-group">
                            <input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
                            <span class="text-danger"><?php echo form_error('gender');?></span>
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
                        <label for="addcity" class="control-label"><span class="text-danger">*</span>City Address</label>
                        <div class="form-group">
                            <input type="text" name="addcity" value="<?php echo $this->input->post('addcity'); ?>" class="form-control" id="addcity" />
                            <span class="text-danger"><?php echo form_error('addcity');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="addprov" class="control-label"><span class="text-danger"></span>Provincial Address</label>
                        <div class="form-group">
                            <input type="text" name="addprov" value="<?php echo $this->input->post('addprov'); ?>" class="form-control" id="addprov" />
                            <span class="text-danger"><?php echo form_error('addprov');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="elemschool" class="control-label"><span class="text-danger">*</span>Elementary School</label>
                        <div class="form-group">
                            <input type="text" name="elemschool" value="<?php echo $this->input->post('elemschool'); ?>" class="form-control" id="elemschool" />
                            <span class="text-danger"><?php echo form_error('elemschool');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="secschool" class="control-label"><span class="text-danger">*</span>Secondary School</label>
                        <div class="form-group">
                            <input type="text" name="secschool" value="<?php echo $this->input->post('secschool'); ?>" class="form-control" id="secschool" />
                            <span class="text-danger"><?php echo form_error('secschool');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tertschool" class="control-label"><span class="text-danger">*</span>Tertiary School</label>
                        <div class="form-group">
                            <input type="text" name="tertschool" value="<?php echo $this->input->post('tertschool'); ?>" class="form-control" id="tertschool" />
                            <span class="text-danger"><?php echo form_error('tertschool');?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="reasonleave" class="control-label"><span class="text-danger">*</span>Reason for Leaving School</label>
                        <div class="form-group">
                            <textarea name="reasonleave" class="form-control" id="reasonleave"><?php echo $this->input->post('reasonleave'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('reasonleave');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="guardianame" class="control-label">Guardian Name</label>
                        <div class="form-group">
                            <input type="text" name="guardianame" value="<?php echo $this->input->post('guardianame'); ?>" class="form-control" id="guardianame" />
                            <span class="text-danger"><?php echo form_error('guardianame');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="relationship" class="control-label">Relationship</label>
                        <div class="form-group">
                            <input type="text" name="relationship" value="<?php echo $this->input->post('relationship'); ?>" class="form-control" id="relationship" />
                            <span class="text-danger"><?php echo form_error('relationship');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fathername" class="control-label"><span class="text-danger">*</span>Father Name</label>
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
                        <label for="mothername" class="control-label"><span class="text-danger">*</span>Mothers' Name</label>
                        <div class="form-group">
                            <input type="text" name="mothername" value="<?php echo $this->input->post('mothername'); ?>" class="form-control" id="mothername" />
                            <span class="text-danger"><?php echo form_error('mothername');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="motherocc" class="control-label"><span class="text-danger">*</span>Mother Occupation</label>
                        <div class="form-group">
                            <input type="text" name="motherocc" value="<?php echo $this->input->post('motherocc'); ?>" class="form-control" id="motherocc" />
                            <span class="text-danger"><?php echo form_error('motherocc');?></span>
                        </div>
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