 <html>
	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/query-ul.min.css" rel="stylesheet">
		
		<div id ="student_information_header">
    </head>

<body>	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LCC - L</a>
    </div>
	
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href=<?php echo base_url();?>student/studentsInformation>HOME</a></li>
		<li><a href=<?php echo base_url();?>student/class_subject_enrolled>CLASS SCHEDULE</a></li>
        <li><a href=<?php echo base_url();?>student/studentGrade>GRADES</a></li>
        <li><a href=<?php echo base_url();?>student/studyload>STUDY LOAD</a></li>
        
		
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


<table class="table table-striped table-bordered">
                                <tbody>
                                	<p>OFFERED SUBJECTS</P>
                                   <tr>

                                              <td> <strong> Course Number </strong> </td>
                                             
                                               <td> <strong> Room</strong> </td>
                                               <td> <strong> Schedule</strong> </td>
                                           

                                             
                                          </tr>

                                              
                                       </thead>

                                       <tbody>
                                           <?php foreach ($offer_info->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->os_subject_id;?></td>
                                               
                                                <td><?php echo $row->os_room_id;?></td>
                                               <td>
                                             <a href=<?php echo base_url();?>>View Schedule</a></i>
                                            </td>
                                                
                                              
                                          

                                          
                                          
                                          <?php }?>    
                                          </tr>




 </body>
 </html>
