 <html>
	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/query-ul.min.css" rel="stylesheet">
		
		<div id ="student_information_header">
    </head>

<body>	
	<center>
<p>La Consolacion College - Lilo-an</br>
	Pblacion, Liloan, Cebu</br>
	</br><b>Subject Load</b></br>
</br></center>
</td>
</tr>
</br></br>



	<div class="col-md-6 col-md-offset-3">
					
	<table class="table table-bordered">
<?php echo form_open('teacher/class_schedule');
?>


	<select name="year">
	<?php for($i=2010; $i<2020;$i++)
	{

	?> <option value="<?php echo $i?>"><?php echo $i?>

	<?php } 
	?>

    </select>

  <select name="semester">
  <option value=1>First Semester</option>
  <option value=2>Second Semester</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Choose" name="class_schedule">

</form>
	
     <tr>
		<th>Subject Code</th>
		<th>Course No.</th>
		<th>Course Description</th>
		<th>Units</th>
		<th>Days</th>
		<th>Time</th>
		<th>Room</th>
	</tr>
  <?php foreach($schedules->result() as $row)
  {
  	?>
	<tr>
		<td><a href="<?php echo site_url('teacher/class_list/'.$row->os_id);?>"><?php echo $row->os_subject_id;?></a></td>
		
		<td><?php echo $row->os_year;?></td>
		<td><?php echo $row->os_semester;?></td>
		<td><?php echo $row->os_room_id;?></td>
		<td><?php echo $row->os_schedule_id;?></td>
		
	</tr>
	<?php } ?>
	
	
	
  
	
</table>
</div>

<script src="js/jquery.js.js"></script>
<script src="js/bootstrap.min.js"></script>




 </body>
 </html>
