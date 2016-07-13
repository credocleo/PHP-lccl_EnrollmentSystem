<body>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>LCC-L OFFERED SUBJECTS</h3>
          <ol class="breadcrumb">
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/ListofferedSubjects>Offered Subjects</li>
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/subjects_offered>List of subjects</a></li>
          </ol>
        </div>
      </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           <center>
    
                            <?php echo $course_info->row()->co_courses;?><br>

                            <?php echo $course_info->row()->co_course_description;?><br>

                            </center>
                          </header>
                          
                            <?php if($this->session->flashdata('flashSuccess')){ ?>
          <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
             <?php } ?>
             <br>

             <table class="table table-striped table-bordered">
                                  <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            First Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                                              <td><b><center><br>Year</center></b></td>
                                              <td><b><center><br>Semester</center></b></td>
                                              <td><b><center><br>Room</center></b></td>
                                              <td><b><center><br>Time</center></b></td>
                                              <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                        <tbody>
                                            <?php foreach ($first_sem_firstyear->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td> <select class="form-control" name="year" aria-required="true" required="required" >
                                                <option value="1">First Year</option>
                                                <option value="2">Second Year</option>
                                                <option value="3">Third Year</option>
                                                <option value="4">Fourth Year</option>
                                            </select></td>
                                               <td>  <select class="form-control" name="semester" aria-required="true" required="required" >
                                                <option value="1">First Semester</option>
                                                <option value="2">Second Semester</option>

                                                 <td><input class="form-control" name="room"  type="text" value="<?php echo set_value('room'); ?>"  placeholder="Room">
                                                  </td>

                                                 <td>  <input class="form-control" name="time"  type="text" value="<?php echo set_value('time'); ?>"  placeholder="Time">
                                                  </td>

                                                 <td>  <input class="form-control" name="instructor"  type="text" value="<?php echo set_value('instructor'); ?>" size="30"  placeholder="Instructor ID">
                                                  </td>

                                                <td><button type="submit" name = "submit" class="btn btn-primary" id="submit">Save</button></td>

                        
                                          </tr>
                                          
                                          <?php }?>    
                                          <tr>

                                                <td colspan="3">
                                                  <td colspan="3">
                                                  <?php echo form_open('admin/get_subjects_to_offer'); ?>
              
                                              <input type="hidden" name="course_id"  value="<?php echo $course_id; ?>">
                                              <input type="hidden" name="subject_id" value="<?php echo $row->subject_id;?>" >
                                              <input type="hidden" name="os_year" class="form-control"value="<?php echo set_value('os_year'); ?>"  size="5" aria-required="true" placeholder="Year Level">
                                               <input type="hidden" name="os_semester" class="form-control"value="<?php echo set_value('os_semester'); ?>"  size="5" aria-required="true" placeholder="Semester">
                                                <input type="hidden" name="os_room_id" class="form-control"value="<?php echo set_value('os_room_id'); ?>"  size="5" aria-required="true" placeholder="Room">
                                                 <input type="hidden" name="os_schedule_id" class="form-control"value="<?php echo set_value('os_schedule_id'); ?>"  size="5" aria-required="true" placeholder="Time">
                                                  <input type="hidden" name="os_istructor_account_id" class="form-control"value="<?php echo set_value('os_istructor_account_id'); ?>"  size="5" aria-required="true" placeholder="Instructor">


                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>


                                        <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            Second Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                        <tbody>
                                            <?php foreach ($first_sem_secondyear->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                          </tr>
                                          
                                          <?php }?>    
                                          <tr>

                                                <td colspan="3">
                                                  <td colspan="3">
                                                  <?php echo form_open('admin/get_subjects_to_offer'); ?>
        
                                                    <input type="hidden" name="course_id"  value="<?php echo $course_id; ?>">
                                                     <input type="hidden" name="subject_id" value="<?php echo $row->subject_id;?>" >
                                                    <input type="hidden" name="os_semester"  value=1>
                                                    <input type="hidden" name="os_year"  value=2>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>

                                        <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            Third Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                                              <td><b><center><br>Year</center></b></td>
                                              <td><b><center><br>Semester</center></b></td>
                                              <td><b><center><br>Room</center></b></td>
                                              <td><b><center><br>Time</center></b></td>
                                              <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>                                              
                                       </thead>


                                        <tbody>
                                            <?php foreach ($first_sem_thirdyear->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                          </tr>
                                          
                                          <?php }?>    
                                          <tr>

                                                <td colspan="3">
                                                  <td colspan="3">
                                                  <?php echo form_open('admin/get_subjects_to_offer'); ?>
        
                                                    <input type="hidden" name="course_id"  value="<?php echo $course_id; ?>">
                                                     <input type="hidden" name="subject_id" value="<?php echo $row->subject_id;?>" >
                                                    <input type="hidden" name="os_semester"  value=1>
                                                    <input type="hidden" name="os_year"  value=3>

                                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add Subject</button>
                                                  </form>
                                                </td>
                                               </td>
                              
                                          </tr>
                                       </tbody>



                                         <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            Fourth Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                        <thead>
                                           <tr>
                                              <td colspan=6 align="center">Second Semester<br>
                                                            First Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                       <thead>
                                           <tr>
                                              <td colspan=6 align="center">Second Semester<br>
                                                            Second Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                       <thead>
                                           <tr>
                                              <td colspan=6 align="center">Second Semester<br>
                                                            Third Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                       <thead>
                                           <tr>
                                              <td colspan=6 align="center">Second Semester<br>
                                                            Fourth Year</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>

                                         <thead>
                                           <tr>
                                              <td colspan=6 align="center">Summer</td>

                                           </tr>

                                           <tr>

                                             <td><center><br><b>Course Number<b/></center></td>
                        <td><b><center><br>Year</center></b></td>
                        <td><b><center><br>Semester</center></b></td>
                        <td><b><center><br>Room</center></b></td>
                        <td><b><center><br>Time</center></b></td>
                        <td><b><center><br>Instructor</center></b></td>

                                             
                                          </tr>

                                              
                                       </thead>






</table>

</body>
</html>