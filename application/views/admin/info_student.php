<body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>STUDENT INFORMATION</h3>
					<!--<ol class="breadcrumb">
						
					</ol>-->
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">


	
			<div class="col-md-8 col-md-offset-2">
		<?php $info = $info->row();?>

	<table border=1>
	<table border ="0" cellpadding="">
<?php if(isset($SUCCESS))echo $SUCCESS;?>

				<h3>PERSONAL INFORMATION</h3>
				
				</head>
	
				    Student ID NO.:<?php echo $info->student_id_number;?><br>
				    Course: <?php echo $info->co_course_description;?><br>
				    Last Name: <?php echo $info->student_last_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				    First Name: <?php echo $info->student_first_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Middle Name: <?php echo $info->middle_name;?><br>
					Date of Birth: <?php echo $info->date_of_birth;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Place of Birth: <?php echo $info->place_of_birth;?>&emsp;&emsp;&emsp;&ensp;&emsp;
					Contact No: <?php echo $info->contact_no;?><br> 
					Home Address: <?php echo $info->home_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;					
					Tell No: <?php echo $info->home_tellno;?><br> 
					City Address: <?php echo $info->city_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; 
					Cell No: <?php echo $info->cell_no;?><br> 
					Boarding Address: <?php echo $info->boarding_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
					Cell No: <?php echo $info->boarding_cel_no;?><br> 
					Provincial Address: <?php echo $info->provincial_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
					Cell No: <?php echo $info->provincial_tel_no;?><br> 
					E-mail Address: <?php echo $info->email_address;?><br> 
					Nationality: <?php echo $info->nationality;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
					Religion: <?php echo $info->religion;?><br> 
					Civil Status: <?php echo $info->civil_status;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Gender: <?php echo $info->gender;?><br> 
					Name of Spouse if Married: <?php echo $info->name_of_spouse_if_married;?><br> 
					Name of employer if working: <?php echo $info->name_of_employer_if_working;?><br> 
					Address: <?php echo $info->employer_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
					Cell No: <?php echo $info->employer_cel_no;?><br><br>

					
					<h3>FAMILY BACKGROUND</h3>
					Father's Name: <?php echo $info->fathers_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Occupation: <?php echo $info->fathers_occupation;?><br> 
					Educational Attainment: <?php echo $info->father_educ_attainment;?><br> 

					Mother's Name: <?php echo $info->mothers_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Occupation: <?php echo $info->mothers_occupation;?><br> 
					Educational Attainment: <?php echo $info->mother_educ_attainment;?><br> 

					Guardian's Name: <?php echo $info->guardians_name;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp; 
					Occupation: <?php echo $info->guardian_occupation;?><br> 
					Educational Attainment: <?php echo $info->guardian_educ_attainment;?><br> 
					Address: <?php echo $info->guardians_address;?>&emsp;&emsp;&emsp;&emsp;&emsp;
					Cell No.: <?php echo $info->guardians_cel_no;?><br> 

					Relationship to Guardian: <?php echo $info->guardian_relationship;?><br> 

					Grades to be sent to: <?php echo $info->grades_to_be_sent_to;?><br> 
					Address: <?php echo $info->grades_to_sent_address;?>&emsp;&emsp;&emsp;&emsp;
					Cell No.: <?php echo $info->grades_cel_no;?><br><br>

					<h3>EDUCATIONAL BACKGROUND</h3>
					Elementary: <?php echo $info->elementary;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;School Year: <?php echo $info->elementary_sy;?><br>
					Address: <?php echo $info->elementary_address;?><br> 

					High School: <?php echo $info->high_school;?>&emsp;&emsp;&ensp;School Year: <?php echo $info->high_school_sy;?><br> 
					Address: <?php echo $info->high_school_address;?><br> 

					College: <?php echo $info->college;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;School Year: <?php echo $info->college_sy;?><br> 
					Address: <?php echo $info->college_address;?><br> 









					
			

</div>
</body>
</html>