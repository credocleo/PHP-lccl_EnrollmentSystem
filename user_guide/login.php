 <html>
 <head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
		<link href="images/logo.png" type="image/png" rel="shortcut icon">
		<title>La Consolacion College - Liloan</title>
 </head>

<body>
	
	<div class="login_user">
	<div class="col-md-6 col-md-offset-3">
		<div id="container">
		
	
		<?php echo form_open("account");?>
			<div id="wrapper">
			<div class="form-group">
			
			<?php echo form_error('username'); ?>
			<label for="InputUsername">Username</label>
			<input type="text" class="form-control" name="username" id="user" placeholder="Username">
			</div>
			
			<div class="form-group">
			<?php echo form_error('password'); ?>
			<label for="InputPassword1">Password</label>
			<input type="password" class="form-control" name="password" id="pass" placeholder="Password">
			</div>
  
			<button type="submit" class="btn btn-danger" id="submit" onClick='return checklogin();'>Submit</button>
			<button type="reset" class="btn btn-danger" id="cancel">Cancel</button>
		</form>
	
	</div>
	</div>
	</div>

			<script src="js/jquery.js.js"></script>
			<script src="js/bootstrap.min.js"></script>



 </body>
 </html>
