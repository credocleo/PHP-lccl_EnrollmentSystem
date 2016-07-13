 <body>
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


	
			<div class="col-md-7 col-md-offset-2">
		<?php $info = $info->row();?>

	<table border=1>
	<table border ="0" cellpadding="">
<?php if(isset($SUCCESS))echo $SUCCESS;?>

				<h3>PERSONAL INFORMATION</h3>
				
				</head>
	
				  Techer ID NO.: <?php echo $info->teacher_id_num;?><br>
				  Last Name: <?php echo $info->t_last_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
				  First Name: <?php echo $info->t_first_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Middle Name: <?php echo $info->t_middle_name;?><br>
					Date of Birth: <?php echo $info->t_date_of_birth;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Place of Birth: <?php echo $info->t_place_of_birth;?><br> 
					Home Address: <?php echo $info->t_home_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;				
					Tell No: <?php echo $info->t_home_tellno;?><br> 
					City Address: <?php echo $info->t_city_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Cell No: <?php echo $info->t_cell_no;?><br> 
					Boarding Address: <?php echo $info->t_boarding_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Cell No: <?php echo $info->t_boarding_cel_no;?><br> 
					Provincial Address: <?php echo $info->t_provincial_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Cell No: <?php echo $info->t_provincial_tel_no;?><br> 
					Nationality: <?php echo $info->t_nationality;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
					Religion: <?php echo $info->t_religion;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Civil Status: <?php echo $info->t_civil_status;?><br> 
					Gender: <?php echo $info->t_gender;?><br>
          E-mail Address: <?php echo $info->t_email_address;?>
				
</div>
</body>
</html>