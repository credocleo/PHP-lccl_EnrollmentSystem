 
<!DOCTYPE html>
<html lang="en">

	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/jquery-ui.min.css" rel="stylesheet">
    </head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LCC - L</a>
    </div>
	
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href=<?php echo base_url();?>teacher/teacher_profile>Home</a></li>
        
		    <li><a href=<?php echo base_url();?>teacher/students_grades>Grade</a></li>
			<li><a href=<?php echo base_url();?>teacher/class_schedule>Class Schedule</a></li>
      </ul>
	  
	  <div>
			<ul id="settings">
			<li><a href=<?php echo base_url();?>logout/index><p align="right">Log Out &nbsp;  </p></a></li>
			</ul>

    </div>
  </div>
</nav>


 
    

</body>
</html>
