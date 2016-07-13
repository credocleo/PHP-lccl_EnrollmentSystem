 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>PROSPECTUS FORM</h3>
					<!--<ol class="breadcrumb">-->
					
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">


                            <center>
    
                            <?php echo $prospectus_info->row()->prospectus_course;?><br>

                            S. Y. <?php echo $prospectus_info->row()->prospectus_sy;?><br>

                            MAJOR: <?php echo $prospectus_info->row()->major_in;?> <br>

                            <?php echo $prospectus_info->row()->per_cmo;?>
                            </center>
                          </header>
                          
                          <div class="panel-body">
                         
                          
                           <?php if($this->session->flashdata('flashSuccess')){ ?>
          <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
             <?php } ?>
             <br>
                               <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Year<br>
                                                            First Semester</td>

                                           </tr>

                                           <tr>

                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>

                                       <tbody>
                                           <?php foreach ($firstyear_first_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>    
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=1>

                                                    <input type="hidden" name="ps_sem"  value=1>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Year<br>
                                                            Second Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($firstyear_second_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=1>

                                                    <input type="hidden" name="ps_sem"  value=2>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">Second Year<br>
                                                            First Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($secondyear_first_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=2>

                                                    <input type="hidden" name="ps_sem"  value=1>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">Second Year<br>
                                                            Second Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($secondyear_second_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=2>

                                                    <input type="hidden" name="ps_sem"  value=2>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">Third Year<br>
                                                            First Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($thirdyear_first_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=3>

                                                    <input type="hidden" name="ps_sem"  value=1>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">Third Year<br>
                                                            Second Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($thirdyear_second_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=3>

                                                    <input type="hidden" name="ps_sem"  value=2>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           
                                           <tr>
                                              <td colspan=6 align="center">Fourth Year<br>
                                                            First Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($fourthyear_first_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=4>

                                                    <input type="hidden" name="ps_sem"  value=1>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">Fourth Year<br>
                                                            Second Semester</td>

                                           </tr>
                                           <tr>
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($fourthyear_second_sem->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                          </tr>
                                          
                                          <?php }?>   
                                          <tr>

                                                <td colspan="3">
                                                  <?php echo form_open('admin/get_available_subjects_in_prospectus/'); ?>
        
                                                    <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>">


                                                    <input type="hidden" name="ps_year_level"  value=4>

                                                    <input type="hidden" name="ps_sem"  value=2>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                    </table>

                                    


                                    



            </div>
   </div> 
  </div> 

      <!--main content end-->
  </section>
  <!-- container section end -->
  
  </body>
</html>
