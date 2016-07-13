


<form>
			<div class="col-md-6 col-md-offset-3">
				<?php $info = $info->row();?>
			
				<fieldset class="scheduler-border">
				    <legend class ="scheduler-border">User Information:</legend>
				    Teacher ID NO.: <?php echo $info->teacher_id_num;?><br>
				    Last Name: <?php echo $info->t_last_name;?><br>
				    First Name: <?php echo $info->t_first_name;?><br>
					Middle Name: <?php echo $info->t_middle_name;?><br>
					Address: <?php echo $info->t_home_address;?></br>
					Contact No.: <?php echo $info->t_home_tellno;?></br>
				</fieldset>
					
</form>
		
		
	

	
	

</div>

