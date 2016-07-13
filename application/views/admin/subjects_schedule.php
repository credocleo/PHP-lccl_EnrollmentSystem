 <body>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>PROSPECTUS FORM</h3>
					
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">


                            <center>
    
                        
                            </center>
                          </header>
                          
                          <div class="panel-body">
                         
                          
                           <?php if($this->session->flashdata('flashSuccess')){ ?>
          <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
             <?php } ?>
             <br>
                              
 <div class="panel-body">
                              <?php echo form_open('admin/newschedule'); ?>
                
                
                
                                <table border ="0" cellpadding="">
                                
                                 <tr>
                                    <td>
                                        <?php echo form_error('sched_subject_id'); ?>
                                        <div class="form-group">
                                            <label for="sched_subject_id">Course Number</label>
                                            <input class="form-control" name="sched_subject_id"  type="text" value="<?php echo set_value('sched_subject_id'); ?>" size="30" aria-required="true" required="required" placeholder="Course Number">
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <?php echo form_error('s_subject_description'); ?>
                                        <div class="form-group">
                                            <label for="s_subject_description">Description</label>
                                            <input class="form-control" name="s_subject_description"  type="text" value="<?php echo set_value('s_subject_description'); ?>" size="30" aria-required="true" required="required" placeholder="Description">
                                        </div>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>
                                        <?php echo form_error('sched_units'); ?>
                                        <div class="form-group">
                                            <label for="sched_units">Description</label>
                                            <input class="form-control" name="sched_units"  type="text" value="<?php echo set_value('sched_units'); ?>" size="30" aria-required="true" required="required" placeholder="Units">
                                        </div>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>
                                        <?php echo form_error('sched_year'); ?>
                                    <div class="form-group">
                                        <label for="sched_year">Year</label>
                                        <select class="form-control" name="sched_year" aria-required="true" required="required" >
                                                <option value="1">First</option>
                                                <option value="2">Second</option>
                                                 <option value="1">Third</option>
                                                <option value="2">Fourth</option>
                                             
                                            </select>
                                    </div>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>
                                        <?php echo form_error('sched_semester'); ?>
                                    <div class="form-group">
                                        <label for="sched_semester">Semester</label>
                                        <select class="form-control" name="sched_semester" aria-required="true" required="required" >
                                                <option value="1">First</option>
                                                <option value="2">Second</option>
                                              
                                            </select>
                                    </div>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td>
                                        <?php echo form_error('sched_day'); ?>
                                        <div class="form-group">
                                            <label for=" sched_day">Day</label>
                                            <input class="form-control" name="sched_day" type="sched_day" value="<?php echo set_value('sched_day'); ?>" size="30" aria-required="true" required="required" placeholder="Day">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php echo form_error('sched_time'); ?>
                                        <div class="form-group">
                                            <label for="sched_time">Time</label>
                                            <input class="form-control" name="sched_time" type="sched_time" value="<?php echo set_value('sched_time'); ?>" size="30" aria-required="true" required="required" placeholder="Time">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php echo form_error('sched_room'); ?>
                                        <div class="form-group">
                                            <label for="sched_room">Room</label>
                                            <input class="form-control" name="sched_room" type="sched_room" value="<?php echo set_value('sched_room'); ?>" size="30" aria-required="true" required="required" placeholder="Room">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                  <td>
                                    <div>
                                       
    
                                        
                                        
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
