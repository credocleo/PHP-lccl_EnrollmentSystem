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
                                              <td> <strong> Year </strong> </td>
                                               <td> <strong> Semester</strong> </td>
                                               <td> <strong> Room</strong> </td>
                                               <td> <strong> Schedule</strong> </td>
                                                <td> <strong> Instructor</strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>

                                       <tbody>
                                           <?php foreach ($offer_info->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->os_subject_id;?></td>
                                               <td><?php echo $row->os_year;?></td>
                                                <td><?php echo $row->os_semester;?></td>
                                                <td><?php echo $row->os_room_id;?></td>
                                                <td><?php echo $row->os_schedule_id;?></td>
                                                 <td><?php echo $row->os_instructor_account_id;?></td>
                                          </tr>
                                          
                                          <?php }?>    
                                          <tr>

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
