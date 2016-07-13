 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Schedule</h3>
					<ol class="breadcrumb">
	          <li><a href=<?php echo base_url();?>admin/time_schedule><i class="icon_document_alt"></i>Add Schedule</a>
               <a href=<?php echo base_url();?>admin/courses><i class="icon_document_alt"></i>Show Schedule</a>
        
           
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Courses
                          </header>
                          
                          <div class="panel-body">
                             <table class="table table-striped table-bordered">
                                <tbody>
                                         <tr>
                                            
                                            <td> <strong> Course </strong> </td>
                                            <td> <strong> Description </strong> </td>
                                            
                                        </tr>

                                             <?php foreach ($posts->result() as $row)
                                             {?>
                                        <tr>
                                             
                                             <td><?php echo $row->co_courses;?></td>
                                              <td><?php echo $row->co_course_description;?></td>
                          

                                             <td>
                                                    <a href=<?php echo base_url();?>admin/listofferedSubjects/<?php echo $row->co_course_id;?>><i class="menu-arrow arrow_carrot-right"></i> View Schedule</a>
                                
                                             </td>
                                        </tr>
                                        <?php }?>  
                                     <tbody>
                                  </table>		
            </div>
   </div> 
  </div> 

      <!--main content end-->
  </section>
  <!-- container section end -->
  
  </body>
</html>
