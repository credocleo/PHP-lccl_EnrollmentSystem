 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>PROPECTUS DETAILS</h3>
					<ol class="breadcrumb">
	          <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/prospectus_display>Add Prospectus</a></i>
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/subject>Add Subjects</a></i>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Prospectus
                          </header>
                          
                          <div class="panel-body">
                             <table class="table table-striped table-bordered">
                                <tbody>
                                         <tr>
                                            <td> <strong> Number </strong> </td>
                                            <td> <strong> Course </strong> </td>
                                             <td> <strong> Per C.M.O No. </strong> </td>
                                            <td> <strong> Major </strong> </td>
                                            <td colspan="2"> <strong> Year </strong> </td>
                                        </tr>

                                             <?php foreach ($posts->result() as $row)
                                             {?>
                                        <tr>
                                             <td><?php echo $row->prospectus;?></td>
                                             <td><?php echo $row->prospectus_course;?></td>
                                              <td><?php echo $row->per_cmo;?></td>
                                              <td><?php echo $row->major_in;?></td>
                                              <td><?php echo $row->prospectus_sy;?></td>  

                                             <td>
                                                    <a href=<?php echo base_url();?>admin/view_prospectus/<?php echo $row->prospectus;?>><i class="menu-arrow arrow_carrot-right"></i> View Details</a>
                                
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
