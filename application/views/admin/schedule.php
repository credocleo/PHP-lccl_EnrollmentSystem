<body>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>CLASS SCHEDULE</h3>
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
                              <?php echo $courses_info->row()->co_courses;?><br>

                            <?php echo $courses_info->row()->co_course_description;?><br>

                            MAJOR: <?php echo $courses_info->row()->Major;?> <br>
                            </center>
                          </header>
                          
                          <div class="panel-body">
                            
                             <table class="table table-striped table-bordered">
                               <thead>
                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            First Year</td>

                                           </tr>
                                <tbody>
                                         <tr>
                                            <td> <strong> Days </strong> </td>
                                            <td> <strong> Time </strong> </td>
                                             <td> <strong> Course No. </strong> </td>
                                            <td> <strong> Descriptive Title</strong> </td>
                                            <td> <strong> Units </strong> </td>
                                            <td> <strong> Room</strong> </td>
                                            
                                        </tr>
                                        <?php foreach ($posts->result() as $row)
                                          {?>

                                        <tr>
                                             <td><?php echo $row->sched_day;?></td>
                                             <td><?php echo $row->sched_time;?></td>
                                             <td><?php echo $row->sched_subject_id;?></td>
                                             <td><?php echo $row->s_subject_description;?></td>
                                             <td><?php echo $row->sched_units;?></td>
                                             <td><?php echo $row->sched_room;?></td>       
                                        </tr>
                                          <?php }?>  

                                          <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            Second Year Year</td>

                                           </tr>

                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            Third Year</td>

                                           </tr>

                                           <tr>
                                              <td colspan=6 align="center">First Semester<br>
                                                            Fourth Year</td>

                                           </tr>

</form>
</body>
</html>