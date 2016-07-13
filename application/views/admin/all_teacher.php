<body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>LIST OF TEACHERS</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href=<?php echo base_url();?>admin>Home</a></li>
						<li><i class="icon_document_alt"></i>Teachers</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">


<form>
			<div class="col-md-6 col-md-offset-3">				
</br>
		<table class="table table-bordered">
			
<tr><td colspan="7"><br><center><b>TEACHERS INFORMATION<br></center></td></tr>

<tr>
<td><center><br><b>Teacher ID<b/></center></td>
<td><b><center><br>Last Name</center></b></td>
<td><b><center><br>First Name</center></b></td>
<td><b><center><br>Middle Name</center></b></td>
<td><b><center><br>Date Registered</center></b></td>
<td></td>
</tr>
<?php foreach ($posts->result() as $row)
{?>
<tr>
<td><a href=<?php echo base_url();?>admin/infoTeacher/<?php echo $row->teacher_id_num;?>>
  <?php echo $row->teacher_id_num;?></td>
<td><?php echo $row->t_last_name;?></td>
<td><?php echo $row->t_first_name;?></td>
<td><?php echo $row->t_middle_name;?></td>
<td><?php echo $row->t_date_registered;?></td>
</tr>


<?php }?>
</form>
</body>
</html>