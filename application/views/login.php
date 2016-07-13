<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La Consolacion College Lilo-an Online Enrollment System">
    <meta name="author" content="BSIT IV">
    <meta name="keyword" content="Online, Lcc, Enrollment, College">
    <link rel="shortcut icon" href="<?php echo base_url();?>images/logo.png">

    <title>LCC-L | Online Enrollment System</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>

<body>
	
	<div class="login-img3-body">
	<div class="col-md-6 col-md-offset-3">
		<div class="container">
		
		 <form class="login-form"
			<?php echo form_open("account");?>
			 <div class="login-wrap">
			 <p class="login-img"><i class="icon_lock_alt"></i></p>

			<div class="input-group">
			
			<span class="input-group-addon"><i class="icon_profile"></i></span>
			<?php echo form_error('username'); ?>
			<input type="text" class="form-control" name="username" id="user" placeholder="Username">
			</div>
			
			<div class="input-group">
			<span class="input-group-addon"><i class="icon_key_alt"></i></span>
			<?php echo form_error('password'); ?>
			<input type="password" class="form-control" name="password" id="pass" placeholder="Password">
			</div>
  
			<button type="submit" class="btn btn-primary btn-lg btn-block" id="submit" onClick='return checklogin();'>Submit</button>
			
			 <a href=<?php echo base_url();?>admin/information_student>Click to Register</a>
		</form>
	
	</div>
	</div>
	</div>


 </body>
 </html>
