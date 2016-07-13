
<body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-file-text-o"></i>Form elements</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Student Grades
                          </header>
                          
                          <div class="panel-body">
                             <?php echo form_open('prospectus_validation/prospectus/'); ?>
            
            <?if($this->session->flashdata('flashSuccess')):?>
                    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                        <?endif?>
                
            		<div id ="student_information_header">
    </head>

<body>	

<form>
			<div class="col-md-6 col-md-offset-3">
					<table border ="0" cellpadding="">
						<tr>
							<td colspan = "2">
								<div class="form-group"><br>
									<label for="studentNo">Student ID No.</label>
									<input class="form-control" id="studentIDno" name="student_idnum" type="text" value="" size="30" aria-required="true" required="required" placeholder ="Student Id No.">
								</div>
							</td> 
						</tr>
							
						<tr>
							<td>
								<div class="form-group">
									<label for="LastName">Last Name</label>
									<input class="form-control" id="LastName" name="student_last_name" type="text" value="" size="30" aria-required="true" required="required" placeholder="Last Name">
								</div>
							</td>
							
							<td>
								<div class="form-group">
									<label for="FirstName">First Name</label>
									<input class="form-control" id="FirstName" name="student_first_name" type="text" value="" size="30" aria-required="true" required="required" placeholder="First Name">
								</div>
							</td>
							
							
							<td>
								<div class="form-group">
									<label for="MiddleName">Middle Name</label>
									<input class="form-control" id="MiddleName" name="middle_name" type="text" value="" size="30" aria-required="true" required="required" placeholder="Middle Name">
								</div>
							</td>
						</tr>
								
						<tr>
							<td colspan="3">
								<div class="form-group">
									<label for="MiddleName">Course</label>
									<input class="form-control" id="Course" name="Course" type="text" value="" size="30" aria-required="true" required="required" placeholder="Course">
								</div> 
							</td>
						</tr>
							
						<tr>	
							<td>
								<div class="form-group">
									<label for="LastName">Year Level</label>
									<input class="form-control" id="Year" name="Year" type="text" value="" size="30" aria-required="true" required="required" placeholder="Year">
								</div>
							</td>
							
							<td>
								<div class="form-group">
									<label for="FirstName">Major</label>
									<input class="form-control" id="Semester" name="Semester" type="text" value="" size="30" aria-required="true" required="required" placeholder="Semester">
								</div>
							</td>
							
							
							<td>
								<div class="form-group">
									<label for="MiddleName">Semester</label>
									<input class="form-control" id="academic_year" name="academic_year" type="text" value="" size="30" aria-required="true" required="required" placeholder="Academic Year">
								</div>
							</td>
						</tr>
							
						
					</table>
					
</br></br>
		<table class="table table-bordered">
		
     <tr>
		<th>Subject Code</th>
		<td>Course No.</td>
		<td>Course Description</td>
		<td>Units</td>
		<td>Mid Term Grade</td>
		<td>Final Grade</td>
		<td>Instructor's Name</td>
	</tr>
  
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<th></th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	
  
	
</table>
</div>
      <!--main content end-->
  </section>
  <!-- container section end -->
   <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  </body>
</html>


