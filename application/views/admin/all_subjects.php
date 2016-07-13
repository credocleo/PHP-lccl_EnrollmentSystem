<body>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>LIST OF SUBJECTS</h3>
					<ol class="breadcrumb">
						<li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/ListofferedSubjects>Offered Subjects</li>
						<li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/subjects_offered>List of subjects</a></li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           <a href=<?php echo base_url();?>admin/search_subject><i class="menu-arrow arrow_carrot-right"></i> Search Subjects</a>
                          </header>


<form>
					
</br>
		<table class="table table-bordered">
			

<tr><td colspan="7"><br><center><b>SUBJECTS MASTER LIST<br></center></td></tr>

<tr>
<td><center><br><b>Course Number<b/></center></td>
<td><b><center><br>Descriptive Title</center></b></td>
<td><b><center><br>Units</center></b></td>
<td><b><center><br>Lecture Hours</center></b></td>
<td><b><center><br>Laboratory Hours</center></b></td>
<td><b><center><br>Pre - requisite</center></b></td>
</tr>
<?php foreach ($posts->result() as $row)
{?>
<tr>
<td><a href=<?php echo base_url();?>admin/infoStudent/<?php echo $row->subject_id;?>>
    <?php echo $row->subject_id;?></td>
<td><?php echo $row->subject_description;?></td>
<td><?php echo $row->subject_units;?></td>
<td><?php echo $row->subject_lec_hours;?></td>
<td><?php echo $row->subject_lab_hours;?></td>
<td><?php echo $row->subject_pre_req;?></td>

</tr>


  <?php }?>  
</form>
</body>
</html>