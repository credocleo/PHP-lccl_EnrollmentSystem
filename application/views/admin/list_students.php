<body>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>LIST OF STUDENTS</h3>
					<ol class="breadcrumb">
						<li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/view_student>List of students</a></li>
						<li><i class="icon_document_alt"></i>Students</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           <a href=<?php echo base_url();?>admin/search><i class="menu-arrow arrow_carrot-right"></i> Search Student</a>
                          </header>


<form>
			<div class="col-md-6 col-md-offset-3">				
</br>
		<table class="table table-bordered">
			

<tr><td colspan="7"><br><center><b>LIST OF COLLEGE STUDENTS<br></center></td></tr>

<tr>
<td><center><br><b>Students ID<b/></center></td>
<td><b><center><br>Last Name</center></b></td>
<td><b><center><br>First Name</center></b></td>
<td><b><center><br>Middle Name</center></b></td>
<td><b><center><br>Date Registered</center></b></td>
</tr>
<?php foreach ($posts->result() as $row)
{?>
<tr>
<td><a href=<?php echo base_url();?>admin/infoStudent/<?php echo $row->student_id_number;?>>
    <?php echo $row->student_id_number;?></td>
<td><?php echo $row->student_last_name;?></td>
<td><?php echo $row->student_first_name;?></td>
<td><?php echo $row->middle_name;?></td>
<td><?php echo $row->date_registered;?></td>

</tr>


  <?php }?>  
</form>
</body>
</html>