<body>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           <a href=<?php echo base_url();?>admin/view_student><i class="menu-arrow arrow_carrot-left"></i>Back</a>
                          </header>

  <div class="col-md-6 col-md-offset-3">
<?=form_open('admin/search');?>
<?php $search = array('name'=>'search','id'=>'search','value'=>"",);?>
<?=form_input($search);?><input type=submit value='Search' /></p>
<?=form_close();?>

<form>
			<div class="col-md-6 col-md-offset-3">				
</br>
		<table class="table table-bordered">
			
 <tr>
<td><center><br><b>Students ID<b/></center></td>
<td><b><center><br>Last Name</center></b></td>
<td><b><center><br>First Name</center></b></td>
<td><b><center><br>Middle Name</center></b></td>
</tr>

<?php foreach ($query->result() as $row):?>
<tr>
<td><a href=<?php echo base_url();?>admin/infoStudent/<?php echo $row->student_id_number;?>>
<?= $row->student_id_number;?></td>
<td><?= $row->student_last_name;?></td>
<td><?= $row->student_first_name;?></td>
<td><?= $row->middle_name;?></td>

</tr>
<?php endforeach;?>
</table>


