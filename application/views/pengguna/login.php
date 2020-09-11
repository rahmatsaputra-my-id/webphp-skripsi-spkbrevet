<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
  
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style_login.css">
  
</head>

<body>

  <body>
<div class="container">
	<section id="content">
		<form action="<?php echo base_url('aksi_login'); ?>" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
			<div>
				<input type="submit" name="Login" value="Submit" />
				<!-- <a href="#">Lost your password?</a>
				<a href="<?php echo site_url();?>register">Register</a> -->
			</div>
		</form><!-- form -->
		<div class="button">
			<!-- <a href="<?php echo base_url();?>">@SPKBrevet</a> -->
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="<?php echo base_url();?>/assets/js/login.js"></script>




</body>

</html>
