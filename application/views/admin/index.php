<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La Consolacion College Lilo-an Online Enrollment System">
    <meta name="author" content="BSIT IV">
    <meta name="keyword" content="Online, Lcc, Enrollment, College">
    <link rel="shortcut icon" href="<?php echo base_url();?>images/logo.png">

    <title>LCC-L | Online Enrollment System</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
 
            <a class="logo" href=<?php echo base_url();?>admin>LCC-L <span class="lite">Admin</span></a>
    
          

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

                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                         
                          <span>Administration</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                           <li><a class="" href=<?php echo base_url();?>admin/courses>Courses</a></li>
                          <li><a class="" href=<?php echo base_url();?>admin/prospectus_dis>Prospectus</a></li>
                          <li><a class="" href=<?php echo base_url();?>admin/add_user>Users</a></li>  

                          

                            <li class="sub-menu">
                              <a href="javascript:;" class="">
                                     <span>Schedule</span>
                                  <span class="menu-arrow arrow_carrot-right"></span>
                              </a>
                              <ul class="sub">
                                  <li><a class="" href=<?php echo base_url();?>admin/time_schedule>Add Schedule</a></li>
                                  <li><a class="" href=<?php echo base_url();?>admin/schedule_subjects>Display Schedule</a></li>

                              </ul>
                            </li>   


                         
                      </ul>
                    </li>
                    

				    

                     <li class="sub-menu">
                      <a href="javascript:;" class="">
                          
                          <span>Offered Subjects</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href=<?php echo base_url();?>admin/offered_subjects_course>View Subjects</a></li>
                      </ul>
                    </li>

                     


                        
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-home"></i>Home</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href=<?php echo base_url();?>admin>Home</a></li>
						<li><i class="icon_document_alt"></i>Subjects Offered</li>						  	
					</ol>
				</div>
			</div>
              		
            
              
      <!--main content end-->
				
				

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
   
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
	  <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>	
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>	
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });




  </script>

  </body>
</html>
