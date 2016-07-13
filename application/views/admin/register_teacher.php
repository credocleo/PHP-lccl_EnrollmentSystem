 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> TEACHER FORM</h3>
					<ol class="breadcrumb">
						  <a href=<?php echo base_url();?>admin/reg_teacher><i class="menu-arrow arrow_carrot-right"></i>Teacher Form</a>
                           <a href=<?php echo base_url();?>admin/view_teacher><i class="menu-arrow arrow_carrot-right"></i>Teacher List</a>
                          
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Register Teacher
                          </header>
                          <div class="panel-body">
                              <?php echo form_open('admin/info_teacher'); ?>
                
               <?php if($this->session->flashdata('flashSuccess')){ ?>
                    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                       <?php } ?>
    
                        <table border ="0" cellpadding="">
                            
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="t_date_registered">Date: </label><?php echo form_error('t_date_registered'); ?>
                                        <input type="date" class="form-control" name="t_date_registered" value="<?php echo set_value('t_date_registered');?>">
                                    </div>
                                </td>
                            </tr>
                        
                            <tr>
                                <td>
                                <?php echo form_error('teacher_id_num'); ?>
                                    <div class="form-group">
                                        <label for="teacher_id_num">ID Number</label>
                                        <input class="form-control" name="teacher_id_num" type="text" value="<?php echo set_value('techer_id_num'); ?>" size="30" aria-required="true" required="required" placeholder="Teacher ID">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                <?php echo form_error('t_last_name'); ?>
                                    <div class="form-group">
                                        <label for="t_last_name">Last Name</label>
                                        <input class="form-control" name="t_last_name" type="text" value="<?php echo set_value('t_last_name'); ?>" size="30" aria-required="true" required="required" placeholder="Last Name">
                                    </div>
                                </td>

                                <td>
                                <?php echo form_error('t_first_name'); ?>
                                    <div class="form-group">
                                        <label for="t_first_name">First Name</label>
                                        <input class="form-control" name="t_first_name" type="text" value="<?php echo set_value('t_first_name'); ?>" size="30" aria-required="true" required="required" placeholder="First Name">
                                    </div>
                                </td>
                            
                                <td>
                                <?php echo form_error('t_middle_name'); ?>
                                    <div class="form-group">
                                        <label for="t_middle_name">Middle Name</label>
                                        <input class="form-control" name="t_middle_name" type="text" value="<?php echo set_value('t_middle_name'); ?>" size="30" aria-required="true" required="required" placeholder="Middle Name">
                                    </div> 
                                </td>
                            </tr>
                                
                            <tr>
                                <td>
                                <?php echo form_error('t_date_of_birth'); ?>
                                    <div class="form-group">
                                        <label for="t_date_of_birth">Date of Birth</label>
                                        <input type="date" class="form-control" name="t_date_of_birth" value="<?php echo set_value('t_date_of_birth'); ?>">
                                    </div>
                                </td> 
                            
                                <td colspan="2">
                                <?php echo form_error('t_place_of_birth'); ?>
                                    <div class="form-group">
                                        <label for="t_place_of_birth">Place of Birth</label>
                                        <input class="form-control" name="t_place_of_birth" type="text" value="<?php echo set_value('t_place_of_birth'); ?>" size="30" aria-required="true" required="required" placeholder="Place of Birth">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr> 
                                <td colspan="2">
                                <?php echo form_error('t_home_address'); ?>
                                    <div class="form-group">
                                        <label for="t_home_address">Home Adress</label>
                                        <input class="form-control" name="t_home_address" type="text" value="<?php echo set_value('t_home_address'); ?>" size="30" aria-required="true" required="required" placeholder="Home Address">
                                    </div>
                                </td>
                            
                                <td>
                                <?php echo form_error('t_home_tellno'); ?>
                                    <div class="form-group">
                                        <label for="t_home_tellno">Tell./Cell</label>
                                        <input class="form-control" name="t_home_tellno" type="text" value="<?php echo set_value('t_home_tellno'); ?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                <?php echo form_error('t_city_address'); ?>
                                    <div class="form-group">
                                        <label for="t_city_address">City Address</label>
                                        <input class="form-control" name="t_city_address" type="text" value="<?php echo set_value('t_city_address'); ?>" size="30" aria-required="true" required="required" placeholder="City Address">
                                    </div> 
                                </td>
                            
                                <td>
                                <?php echo form_error('cell_no'); ?>
                                    <div class="form-group">
                                        <label for="t_cell_no">Tell./Cell</label>
                                        <input class="form-control" id="t_cell_no" name="t_cell_no" type="text" value="<?php echo set_value('t_cell_no'); ?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                <?php echo form_error('t_boarding_address'); ?>
                                    <div class="form-group">
                                        <label for="t_boarding_address">Boarding Address</label>
                                        <input class="form-control" name="t_boarding_address" type="text" value="<?php echo set_value('t_boarding_address'); ?>" size="30" aria-required="true" required="required" placeholder="Boarding Address">
                                    </div> 
                                </td>
                            
                                <td>
                                <?php echo form_error('t_boarding_cel_no'); ?>
                                    <div class="form-group">
                                        <label for="t_boarding_cel_no">Tell./Cell</label>
                                        <input class="form-control" name="t_boarding_cel_no" type="text" value="<?php echo set_value('t_boarding_cel_no'); ?>" size="30" aria-required="true" required="required" placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                <?php echo form_error('t_provincial_address'); ?>
                                    <div class="form-group">
                                        <label for="t_provincial_address">Provincial Address</label>
                                        <input class="form-control" name="t_provincial_address" type="text" value="<?php echo set_value('t_provincial_address'); ?>" size="30" aria-required="true" required="required" placeholder="Provincial Address">
                                    </div> 
                                </td>
                            
                                <td>
                                <?php echo form_error('t_provincial_tel_no'); ?>
                                    <div class="form-group">
                                        <label for="t_provincial_tel_no">Tell./Cell</label>
                                        <input class="form-control" name="t_provincial_tel_no" type="text" value="<?php echo set_value('t_provincial_tel_no'); ?>" size="30" aria-required="true" required="required"  placeholder="Tell./Cell">
                                    </div>
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="1">
                                <?php echo form_error('t_nationality'); ?>
                                    <div class="form-group">
                                        <label for="t_nationality">Nationality</label>
                                        <input class="form-control" name="t_nationality" type="text" value="<?php echo set_value('t_nationality'); ?>" size="30" aria-required="true" required="required" placeholder="Nationality">
                                    </div>
                                </td>
                            
                                <td>
                                <?php echo form_error('t_religion'); ?>
                                    <div class="form-group">
                                        <label for="t_religion">Religion</label>
                                        <input class="form-control" name="t_religion" type="text" value="<?php echo set_value('t_religion'); ?>" size="30" aria-required="true" required="required" placeholder="Religion">
                                    </div>
                                </td>
                                
                                
                                <td>
                                <?php echo form_error('t_civil_status'); ?>
                                    <div class="form-group">
                                        <label for="t_civil_status">Civil Status</label>
                                        <select class="form-control"  name="t_civil_status" aria-required="true" required="required" >
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>    
                                <td colspan="1">
                                <?php echo form_error('t_gender'); ?>
                                    <div class="form-group">
                                    <label for="t_gender">Gender:</label><br>
                                    
                                        <input type="radio" value="Male" name="t_gender">Male
                                        <input type="radio" value="Female" name="t_gender">Female
                                    </div> 
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                <?php echo form_error('t_email_address'); ?>
                                    <div class="form-group">
                                        <label for="t_email_address">Email Address:</label>
                                        <input class="form-control" name="t_email_address" type="email" value="<?php echo set_value('t_email_address'); ?>" size="30" aria-required="true" required="required"  placeholder="Email Address">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                                </td>
                            
                                <td>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </td>
                            </tr>
                                
                        </table>
            <?php echo form_close();?>
            </div>
      <!--main content end-->
  </section>
  <!-- container section end -->
  
  </body>
</html>
