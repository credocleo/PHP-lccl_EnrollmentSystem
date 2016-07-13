<body>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>LCC-L OFFERED SUBJECTS</h3>
          <ol class="breadcrumb">
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/listofferedSubjects>Offered Subjects</li>
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/subjects_offered>List Subjects</a></li>
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/addsubtooffer>Add Subjects</a></li>
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
                                           <tbody>
                                          <?php foreach ($posts->result() as $row)
                                             {?>
                                          <tr>
                                               <td><?php echo $row->os_subject_id;?></td>
                                               <td><?php echo $row->os_year;?></td>
                                                <td><?php echo $row->os_semester;?></td>
                                                 <td><?php echo $row->os_room_id;?></td>
                                                  <td><?php echo $row->os_schedule_id;?></td>
                                                   <td><?php echo $row->os_instructor_account_id;?></td>

                                                
                                          </tr>

                              
                                          <tr>
                                          <?php }?>  
                                          
                                       </tbody>

            
            </div>
   </div> 
  </div> 

      <!--main content end-->
  </section>
  <!-- container section end -->
  
  </body>
</html>


                                             