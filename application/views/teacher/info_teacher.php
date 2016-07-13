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
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>TEACHER INFORMATION</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href=<?php echo base_url();?>admin>Home</a></li>
						<li><i class="icon_document_alt"></i>View</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">


	
			<div class="col-md-6 col-md-offset-3">
		<?php $info = $info->row();?>

	<table border=1>
	<table border ="0" cellpadding="">
<?php if(isset($SUCCESS))echo $SUCCESS;?>

				<h3>PERSONAL INFORMATION</h3>
				
				</head>
	
				    Student ID NO.: <?php echo $info->teacher_id_num;?><br>
				    Last Name: <?php echo $info->t_last_name;?><br>
				    First Name: <?php echo $info->t_first_name;?><br>
					Middle Name: <?php echo $info->t_middle_name;?><br>
					Date of Birth: <?php echo $info->t_date_of_birth;?><br> 
					Place of Birth: <?php echo $info->t_place_of_birth;?><br> 
					Home Address: <?php echo $info->t_home_address;?><br> 					
					Tell No: <?php echo $info->t_home_tellno;?><br> 
					City Address: <?php echo $info->t_city_address;?><br> 
					Cell No: <?php echo $info->t_cell_no;?><br> 
					Boarding Address: <?php echo $info->t_boarding_address;?><br> 
					Cell No: <?php echo $info->t_boarding_cel_no;?><br> 
					Provincial Address: <?php echo $info->t_provincial_address;?><br> 
					Cell No: <?php echo $info->t_provincial_tel_no;?><br> 
					E-mail Address: <?php echo $info->t_email_address;?><br> 
					Nationality: <?php echo $info->t_nationality;?><br> 
					Religion: <?php echo $info->t_religion;?><br> 
					Civil Status: <?php echo $info->t_civil_status;?><br> 
					Gender: <?php echo $info->t_gender;?><br> 
				
</div>
</body>
</html>