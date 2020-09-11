<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SignUp</title>
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style_login.css">
  
</head>

<body>

  <body>
<div class="container">
	<section id="content">
		<form action="<?php echo base_url('aksi_register'); ?>" method="post">
			<h1>Register Form</h1>
			<div>
				<input type="text" placeholder="E-mail" required="" name="email" />
			</div>
			<div>
				<input type="text" placeholder="Username" required="" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
			<div>
				<input type="password" placeholder="Ulangi Password" required="" name="repassword" />
			</div>
			<div>
				<input type="submit" name="Register" value="Submit" />
				<!-- <a href="#">Lost your password?</a>
				<a href="<?php echo base_url();?>login">Login</a> -->
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
