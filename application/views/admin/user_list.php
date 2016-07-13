<body>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>USERS</h3>

          <ol class="breadcrumb">
           <a href=<?php echo base_url();?>admin/create_account><i class="menu-arrow arrow_carrot-right"></i>Create New User</a>
           <a href=<?php echo base_url();?>admin/reg_student><i class="menu-arrow arrow_carrot-right"></i>Register Student</a>
           <a href=<?php echo base_url();?>admin/reg_teacher><i class="menu-arrow arrow_carrot-right"></i>Register Teacher</a>
        </div>
      </div>


<form>
				
</br>
		<table class="table table-bordered">
			

<tr><td colspan="7"><br><center><b>LIST OF USERS<br></center></td></tr>

<tr>
<td><center><br><b>Account Type<b/></center></td>
<td><b><center><br>Username</center></b></td>
</tr>
<?php foreach ($posts->result() as $row)
{?>
<tr>
<td>
    <?php echo $row->account_type;?></td>
<td><?php echo $row->username;?></td>

</tr>


  <?php }?>  
</form>
  </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
</body>
</html>