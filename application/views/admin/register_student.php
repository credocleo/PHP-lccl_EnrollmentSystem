 <body>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> REGISTER STUDENT</h3>
                    <ol class="breadcrumb">

                           <a href=<?php echo base_url();?>admin/reg_student><i class="menu-arrow arrow_carrot-right"></i>Students Form</a>
                           <a href=<?php echo base_url();?>admin/view_student><i class="menu-arrow arrow_carrot-right"></i>Students List</a>
                          
                        </div>
                       
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Register Student
                          </header>

                          <div class="panel-body">
                             
                                  <?php echo form_open('admin/information_student'); ?>
                 <?php if($this->session->flashdata('flashSuccess')){ ?>
                    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                       <?php } ?>


             <table border ="0" cellpadding="">
             <tr>
                    <td>
                        <div class="form-group">
                            <label for="date_registered">Date: </label><?php echo form_error('date_registered'); ?>
                            <input type="date" class="form-control" name="date_registered" value="<?php echo set_value('date_registered');?>">
                        </div>
                    </td>
                </tr>
                
            
            
                            <tr>
                                <td>
                                    <?php echo form_error('co_course_description'); ?>
                                    <div class="form-group">
                                        <label for="co_course_description">Course</label>
                                        <select class="form-control"  name="co_course_description" type="text" value="<?php echo set_value('co_course_description');?>" aria-required="true" required="required" placeholder="Course"> >
                                                 <option value="">----------</option>
                                                <option value="BEED">Bachelor of Elementary Education</option>
                                                <option value="BSED">Bachelor of Secondary Education</option>
                                                <option value="BSIT">Bachelor of Science in Information Technology</option>
                                        </select>
                                    </div> 
                                </td>
                            </tr>

                             <tr>
                    

                            <tr>
                                <td colspan = "2">
                                <?php echo form_error('student_id_number'); ?>
                                    <div class="form-group">
                                        <label for="student_id_number">Student ID No.</label> 
                                        <input class="form-control" id="student_id_number" name="student_id_number" type="text" value="<?php echo set_value('student_id_number'); ?>" size="30" aria-required="true" required="required" placeholder ="Student ID Number">
                                    </div>
                                </td>                               
                            </tr>

                            <tr> 
                                <td> <h3>PERSONAL INFORMATION</h3> </td>
                            </tr>
							
                            <tr>
                                <td>
                                <?php echo form_error('student_last_name'); ?>
                                    <div class="form-group">
                                        <label for="student_last_name">Last Name</label>
                                        <input class="form-control" id="student_last_name" name="student_last_name" type="text" value="<?php echo set_value('student_last_name');?>" size="30" aria-required="true" required="required" placeholder="Last Name">
                                    </div>
                                </td>

                                <td>
                                <?php echo form_error('student_first_name'); ?>
                                    <div class="form-group">
                                        <label for="student_first_name">First Name</label>
                                        <input class="form-control" name="student_first_name" type="text" value="<?php echo set_value('student_first_name');?>" size="30" aria-required="true" required="required" placeholder="First Name">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label><?php echo form_error('middle_name'); ?>
                                        <input class="form-control"  name="middle_name" type="text" value="<?php echo set_value('middle_name');?>" size="30" aria-required="true" required="required" placeholder="Middle Name">
                                    </div> 
                                </td>
                            </tr>
                                
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="birth_date">Date of Birth</label><?php echo form_error('date_of_birth'); ?>
                                        <input type="date" class="form-control" name="date_of_birth" value="<?php echo set_value('date_of_birth');?>">
                                    </div>
                                </td> 
                            
                                <td>
                                    <div class="form-group">
                                        <label for="place_of_birth">Place of Birth</label><?php echo form_error('place_of_birth'); ?>
                                        <input class="form-control"  name="place_of_birth" type="text" value="<?php echo set_value('place_of_birth');?>" size="30" aria-required="true" required="required" placeholder="Place of Birth">
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="form-group">
                                        <label for="contact_no">Contact No.</label><?php echo form_error('contact_no'); ?>
                                        <input class="form-control" name="contact_no" type="text" value="<?php echo set_value('contact_no');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr> 
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="home_address">Home Adress</label><?php echo form_error('home_address'); ?>
                                        <input class="form-control"  name="home_address" type="text" value="<?php echo set_value('home_address');?>" size="30" aria-required="true" required="required" placeholder="Home Address">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="home_tellno">Tell./Cell</label><?php echo form_error('home_tellno'); ?>
                                        <input class="form-control"  name="home_tellno" type="text" value="<?php echo set_value('home_tellno');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="city_address">City Address</label><?php echo form_error('city_address'); ?>
                                        <input class="form-control"  name="city_address" type="text" value="<?php echo set_value('city_address');?>" size="30" aria-required="true" required="required" placeholder="City Address">
                                    </div> 
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="cell_no">Tell./Cell</label><?php echo form_error('cell_no'); ?>
                                        <input class="form-control" name="cell_no" type="text" value="<?php echo set_value('cell_no');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="boarding_address">Boarding Address</label><?php echo form_error('boarding_address'); ?>
                                        <input class="form-control" name="boarding_address" type="text" value="<?php echo set_value('boarding_address');?>" size="30" aria-required="true" required="required" placeholder="Boarding Address">
                                    </div> 
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="boarding_cel_no">Tell./Cell</label><?php echo form_error('boarding_cel_no'); ?>
                                        <input class="form-control"  name="boarding_cel_no" type="text" value="<?php echo set_value('boarding_cel_no');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="provincial_address">Provincial Address</label><?php echo form_error('provincial_address'); ?>
                                        <input class="form-control"  name="provincial_address" type="text" value="<?php echo set_value('provincial_address');?>" size="30" aria-required="true" required="required" placeholder="Provincial Address">
                                    </div> 
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="provincial_tel_no">Tell./Cell</label><?php echo form_error('provincial_tel_no'); ?>
                                        <input class="form-control"  name="provincial_tel_no" type="text" value="<?php echo set_value('provincial_tel_no');?>" size="30" aria-required="true" required="required"  placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="email_address">Email Address</label><?php echo form_error('email_address'); ?>
                                        <input class="form-control"  name="email_address" type="email" value="<?php echo set_value('email_address');?>" size="30" aria-required="true" required="required" placeholder="Email Add">
                                    </div> 
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label><?php echo form_error('nationality'); ?>
                                        <input class="form-control"  name="nationality" type="text" value="<?php echo set_value('nationality');?>" size="30" aria-required="true" required="required" placeholder="Nationality">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="religion">Religion</label><?php echo form_error('religion'); ?>
                                        <input class="form-control"  name="religion" type="text" value="<?php echo set_value('religion');?>" size="30" aria-required="true" required="required" placeholder="Religion">
                                    </div>
                                </td>
                             </tr>
                                
                              <tr>
                                <td>
                                    <div class="form-group">
                                    	<?php echo form_error('civil_status'); ?>
                                        <label for="civil_status">Civil Status</label>
                                         <select name="civil_status">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>
                                </td>
                        
                            
                               
                                <td colspan="1">
                                <?php echo form_error('gender'); ?>
                                    <div class="form-group">
                                        <label for="gender">Gender:</label>
                                        <input type="radio" value="Male" name="gender">Male
                                        <input type="radio" value="Female" name="gender">Female
                                    </div> 
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="name_of_spouse_if_married">Name of Spouse(if Married)</label><?php echo form_error('name_of_spouse_if_married'); ?>
                                        <input class="form-control"  name="name_of_spouse_if_married" type="text" value="<?php echo set_value('name_of_spouse_if_married');?>" size="30" aria-required="true" required="required" placeholder="Name of Spouse (if Married)">
                                    </div>
                                </td>
                            </tr>
                            

                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="name_of_employer_if_working">Name of Employer, if working </label><?php echo form_error('name_of_employer_if_working'); ?>
                                        <input class="form-control" name="name_of_employer_if_working" type="text" value="<?php echo set_value('name_of_employer_if_working');?>" size="30" aria-required="true" required="required" placeholder="Name of Employer, if working">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="employer_address">Address</label><?php echo form_error('employer_address'); ?>
                                        <input class="form-control" name="employer_address" type="text" value="<?php echo set_value('employer_address');?>" size="30" aria-required="true" required="required" placeholder="Address">
                                    </div>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="employer_cel_no">Tell./Cell</label><?php echo form_error('employer_cel_no'); ?>
                                        <input class="form-control"  name="employer_cel_no" type="text" value="<?php echo set_value('employer_cel_no');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <h3>FAMILY BACKGROUND</h3>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="fathers_name">Father`s Name</label><?php echo form_error('fathers_name'); ?>
                                        <input class="form-control"  name="fathers_name" type="text" value="<?php echo set_value('fathers_name');?>" size="30" aria-required="true" required="required" placeholder="Father's Name">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="fathers_occupation">Occupation</label><?php echo form_error('fathers_occupation'); ?>
                                        <input class="form-control"  name="fathers_occupation" type="text" value="<?php echo set_value('fathers_occupation');?>" size="30" aria-required="true" required="required" placeholder="Occupation">
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="father_educ_attainment">Educational Attainment</label><?php echo form_error('father_educ_attainment'); ?>
                                        <input class="form-control" name="father_educ_attainment" type="text" value="<?php echo set_value('father_educ_attainment');?>" size="30" aria-required="true" required="required" placeholder="Educational Attainment">
                                    </div>
                                <td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="mothers_name">Mother`s Name</label><?php echo form_error('mothers_name'); ?>
                                        <input class="form-control" name="mothers_name" type="text" value="<?php echo set_value('mothers_name');?>" size="30" aria-required="true" required="required" placeholder="Mother's Name">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="mothers_occupation">Occupation</label><?php echo form_error('mothers_occupation'); ?>
                                        <input class="form-control" name="mothers_occupation" type="text" value="<?php echo set_value('mothers_occupation');?>" size="30" aria-required="true" required="required" placeholder="Occupation">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="mother_educ_attainment">Educational Attainment</label><?php echo form_error('mother_educ_attainment'); ?>
                                        <input class="form-control"  name="mother_educ_attainment" type="text" value="<?php echo set_value('mother_educ_attainment');?>" size="30" aria-required="true" required="required" placeholder="Educational Attainment">
                                    </div>
                                <td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="guardians_name">Guardian`s Name</label><?php echo form_error('guardians_name'); ?>
                                        <input class="form-control" name="guardians_name" type="text" value="<?php echo set_value('guardians_name');?>" size="30" aria-required="true" required="required" placeholder="Guardian's Name">
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="form-group">
                                        <label for="guardian_occupation">Occupation</label><?php echo form_error('guardian_occupation'); ?>
                                        <input class="form-control"  name="guardian_occupation" type="text" value="<?php echo set_value('guardian_occupation');?>" size="30" aria-required="true" required="required" placeholder="Occupation">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="guardians_address">Address</label><?php echo form_error('guardians_address'); ?>
                                        <input class="form-control" name="guardians_address" type="text" value="<?php echo set_value('guardians_address');?>" size="30" aria-required="true" required="required" placeholder="Address">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="guardians_cel_no">Tell./Cell</label><?php echo form_error('guardians_cel_no'); ?>
                                        <input class="form-control" name="guardians_cel_no" type="text" value="<?php echo set_value('guardians_cel_no');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="guardian_educ_attainment">Educational Attainment</label><?php echo form_error('guardian_educ_attainment'); ?>
                                        <input class="form-control" name="guardian_educ_attainment" type="text" value="<?php echo set_value('guardian_educ_attainment');?>" size="30" aria-required="true" required="required" placeholder="Educational Attainment">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="guardian_relationship">Relationship to Guardian</label><?php echo form_error('guardian_relationship'); ?>
                                        <input class="form-control" name="guardian_relationship" type="text" value="<?php echo set_value('guardian_relationship');?>" size="30" aria-required="true" required="required" placeholder="Relationship to Guardian">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="grades_to_be_sent_to">Grades to be Sent To</label><?php echo form_error('grades_to_be_sent_to'); ?>
                                        <input class="form-control" name="grades_to_be_sent_to" type="text" value="<?php echo set_value('grades_to_be_sent_to');?>" size="30" aria-required="true" required="required" placeholder="Grades to be Sent To">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="grades_to_sent_address">Address</label><?php echo form_error('grades_to_sent_address'); ?>
                                        <input class="form-control"  name="grades_to_sent_address" type="text" value="<?php echo set_value('grades_to_sent_address');?>" size="30" aria-required="true" required="required" placeholder="Address">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="grades_cel_no">Tell./Cell</label><?php echo form_error('grades_cel_no'); ?>
                                        <input class="form-control" name="grades_cel_no" type="text" value="<?php echo set_value('grades_cel_no');?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                    <h3>EDUCATIONAL BACKGROUND </h3>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="elementary">Elementary</label><?php echo form_error('elementary'); ?>
                                        <input class="form-control" name="elementary" type="text" value="<?php echo set_value('elementary')?>" size="30" aria-required="true" required="required" placeholder="Elementary">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="elementary_sy">School Year</label><?php echo form_error('elementary_sy'); ?>
                                        <input class="form-control"  name="elementary_sy" type="text" value="<?php echo set_value('elementary_sy');?>" size="30" aria-required="true" required="required" placeholder="School Year">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="elementary_address">Address</label><?php echo form_error('elementary_address'); ?>
                                        <input class="form-control" name="elementary_address" type="text" value="<?php echo set_value('elementary_address');?>" size="30" aria-required="true" required="required" placeholder="School Address">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="high_school">High School</label><?php echo form_error('high_school'); ?>
                                        <input class="form-control" name="high_school" type="text" value="<?php echo set_value('high_school');?>" size="30" aria-required="true" required="required" placeholder="High School">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="high_school_sy">School Year</label><?php echo form_error('high_school_sy'); ?>
                                        <input class="form-control" name="high_school_sy" type="text" value="<?php echo set_value('high_school_sy');?>" size="30" aria-required="true" required="required" placeholder="School Year">
                                    </div>
                                </td>
                            <tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="high_school_address">Address</label><?php echo form_error('high_school_address'); ?>
                                        <input class="form-control"  name="high_school_address" type="text" value="<?php echo set_value('high_school_address');?>" size="30" aria-required="true" required="required" placeholder="School Address">
                                    </div>
                                </td>
                            </tr>
                            
							<tr>
								<td>
									<h5>IF TRANSFEREE</h5>
								<td>
							<tr>
							
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="college">School Last Attended: College</label><?php echo form_error('college'); ?>
                                        <input class="form-control" name="college" type="text" value="<?php echo set_value('college');?>" size="30" aria-required="true" required="required" placeholder="College">
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">
                                        <label for="college_sy">School Year</label><?php echo form_error('college_sy'); ?>
                                        <input class="form-control"  name="college_sy" type="text" value="<?php echo set_value('college_sy');?>" size="30" aria-required="true" required="required" placeholder="School Year">
                                    </div>
                                </td>
                            <tr>
                            
                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="college_address">Address</label><?php echo form_error('college_address'); ?>
                                        <input class="form-control" name="college_address" type="text" value="<?php echo set_value('college_address');?>" size="30" aria-required="true" required="required" placeholder="College Address">
                                    </div>
                                </td>
                            </tr>
                            
                                                
                            <tr>
                                <td>
                                    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                                </td>
                                
                                <td colspan="2">
                                    <button type="reset" class="btn btn-primary" value="reset">Clear</button>
                                </td>
                            </tr>
                        </table>
                    <?php echo form_close();?>
                </div>
      <!--main content end-->
  </section>
  <!-- container section end -->       
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  

  </body>
</html>
