
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LCC - L</a>
    </div>
  
    <div>
      <ul class="nav navbar-nav">
        <li class="active">
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
        <?php $info_student = $info->row(); ?>
           
        <fieldset class="scheduler-border">
            <legend class ="scheduler-border">Welcome  <?php echo $info_student->student_last_name;?></legend>
            Student ID NO.: <?php echo $info_student->student_id_number;?><br>
            Last Name: <?php echo $info_student->student_last_name;?><br>
            First Name: <?php echo $info_student->student_first_name;?><br>
          Middle Name: <?php echo $info_student->middle_name;?><br>
          Course: <?php echo $info_student->co_course_description;?><br>
          
        </fieldset>
          
</br></br>

  
  
</table>
</div>

