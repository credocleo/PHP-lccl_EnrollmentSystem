 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> USER FORM</h3>
					<ol class="breadcrumb">
						
           <a href=<?php echo base_url();?>admin/create_account><i class="menu-arrow arrow_carrot-right"></i>Create New User</a>
           <a href=<?php echo base_url();?>admin/reg_student><i class="menu-arrow arrow_carrot-right"></i>Register Student</a>
           <a href=<?php echo base_url();?>admin/reg_teacher><i class="menu-arrow arrow_carrot-right"></i>Register Teacher</a>
    
						
				
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             User
                          </header>
                          <div class="panel-body">
                              <?php echo form_open('admin/new_account'); ?>
                
                <?php if($this->session->flashdata('flashSuccess')){ ?>
                    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                       <?php } ?>
                
                                <table border ="0" cellpadding="">
                                
                                <tr>
                                    <td>
                                        <?php echo form_error('account_type'); ?>
                                    <div class="form-group">
                                        <label for="account_type">Account Type</label>
                                        <select class="form-control" name="account_type" aria-required="true" required="required" >
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Student">Student</option>
                                            </select>
                                    </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <?php echo form_error('username'); ?>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input class="form-control" name="username"  type="text" value="<?php echo set_value('username'); ?>" size="30" aria-required="true" required="required" placeholder="Username">
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <?php echo form_error('password'); ?>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" name="password" type="password" value="<?php echo set_value('password'); ?>" size="30" aria-required="true" required="required" placeholder="Password">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php echo form_error('confirm_password'); ?>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input class="form-control" name="confirm_password" type="password" value="<?php echo set_value('confirm_password'); ?>" size="30" aria-required="true" required="required" placeholder="Confirm Password">
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
