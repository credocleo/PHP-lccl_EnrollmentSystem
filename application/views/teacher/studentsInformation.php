
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LCC - L</a>
    </div>
	
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href=<?php echo base_url();?>student/studentsInformation>HOME</a></li>
       <li><a href=<?php echo base_url();?>student/home>PROFILE</a></li>
		<li><a href=<?php echo base_url();?>student/class_subject_enrolled>CLASS SCHEDULE</a></li>
        <li><a href=<?php echo base_url();?>student/studentGrade>GRADES</a></li>
        <li><a href=<?php echo base_url();?>student/student_grades>STUDY LOAD</a></li>
        <li><a href=<?php echo base_url();?>student/registration>REGISTRATION</a></li>
		
     </ul>
     </div> 

	  
	  <div>
			<ul class="nav navbar-nav navbar-right">
      			<li><a href="/logout">Log out</a></li>
      </ul>

    </div>
 
</nav>

<form>
			<div class="col-md-6 col-md-offset-3">
				<?php $info = $info->row();?>
			
				<fieldset class="scheduler-border">
				    <legend class ="scheduler-border">User Information:</legend>
				    Student ID NO.: <?php echo $info->student_id_number;?><br>
				    Last Name: <?php echo $info->student_last_name;?><br>
				    First Name: <?php echo $info->student_first_name;?><br>
					Middle Name: <?php echo $info->middle_name;?><br>
					Course: <?php echo $info->co_course_description;?><br>
					
				</fieldset>
					
</br></br>
		
		
	

	
	
  
	
</table>
</div>

