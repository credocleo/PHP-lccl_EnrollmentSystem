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
    
                            <?php echo $offered_subjects->row()->subject_id;?><br>

                            Description<?php echo $offered_subjects->row()->subject_description;?><br>

                    
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
                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Descriptive Title</strong> </td>
                                               <td> <strong> Units </strong> </td>
                                               <td> <strong> Lecture Hours </strong> </td>
                                               <td> <strong> Laboratory Hours </strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>
                                       <tbody>
                                         <?php foreach ($subjects->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->subject_id;?></td>
                                               <td><?php echo $row->subject_description;?></td>
                                                <td><?php echo $row->subject_units;?></td>
                                                <td><?php echo $row->subject_lec_hours;?></td>
                                                <td><?php echo $row->subject_lab_hours;?></td>
                                                <?php  $url = "admin/view_prospectus/".$prospectus_id; 
                                                    echo form_open($url);?>


                                                <td colspan="3">
                                                  <input type="hidden" name="offered_subject_id"  value="<?php echo $offered_subject_id; ?>" >
                                                  <input type="hidden" name="subject_id" value="<?php echo $row->subject_id;?>" >
                                                  <input type="hidden" name="room_id" value="<?php echo $row->room_id;?>" >
                                                  <input type="hidden" name="schedule_id" value="<?php echo $row->schedule_id;?>" >
                                                  <input type="hidden" name="instructor_account_id" value="<?php echo $row->instructor_account_id;?>" >
                                                  
                                                  <input type="hidden" name="year" class="form-control"value="<?php echo set_value('year'); ?>"  size="5" aria-required="true" placeholder="Year Level">
                                                 
                                                  <input type="hidden" name="semester" class="form-control" value="<?php echo set_value('semester'); ?>" size="5" aria-required="true" placeholder="Semester">
                              
                                                  <button type="submit" name = "submit" class="btn btn-primary" id="submit">Offer subject</button>
                                                  </form>
                                               </td>
                              
                                          </tr>
                                          <?php }?>  
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
