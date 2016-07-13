 <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
 
            <a class="logo" href=<?php echo base_url();?>admin>LCC-L <span class="lite">Admin</span></a>
    
            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
               
                <ul class="nav pull-right top-menu">   
                    <!-- user log-out start-->
                    <li class="dropdown">
                            <a href=<?php echo base_url();?>logout/index><i class="icon_key_alt"></i> Log Out</a>
                    </li>
                    <!-- user log-out end -->
                </ul>
                
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class=""  href=<?php echo base_url();?>admin>
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
              </ul>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>PROSPECTUS FORM</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href=<?php echo base_url();?>admin>Home</a></li>
						<li><i class="icon_document_alt"></i>Prospectus</li>
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
                                          <a href=<?php echo base_url();?>admin/prospectus_dis/<?php echo $prospectus_id;?> ><i class="menu-arrow arrow_carrot-right"></i> Add Subject</a>
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
                                                <?php  $url = "admin/add_prospectus_subjects/".$prospectus_id; 
                                                    echo form_open($url);?>


                                                <td colspan="3">
                                                  <input type="hidden" name="prospectus_id"  value="<?php echo $prospectus_id; ?>" >
                                                  <input type="hidden" name="subject_id" value="<?php echo $row->subject_id;?>" >
                                                  
                                                  <input type="hidden" name="ps_year_level" class="form-control"value="<?php echo set_value('ps_year_level'); ?>"  size="5" aria-required="true" placeholder="Year Level">
                                                 
                                                  <input type="hidden" name="ps_sem" class="form-control" value="<?php echo set_value('ps_sem'); ?>" size="5" aria-required="true" placeholder="Semester">
                              
                                                  <button type="submit" name = "submit" class="btn btn-primary" id="submit">Add this Subject</button>
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
