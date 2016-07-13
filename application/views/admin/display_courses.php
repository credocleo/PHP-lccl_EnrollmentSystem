
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Courses Offered</h3>
					<ol class="breadcrumb">
	          <li><a href=<?php echo base_url();?>admin/new_courses><i class="icon_document_alt"></i>Add Course</a>
           
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
