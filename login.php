<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="author" content="Nelson">
	<meta name="keyword" content="html, css, javascript, php, mysqli">
	<meta name="description" content="movies, music, forum">
	<link rel="stylesheet" type="text/css" href="css/register111.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	
<?php 
	if (isset($_GET['succ'])) 
	{
?>
	<h4><?php echo ($_GET['succ']); ?></h4>
<?php
	}elseif (isset($_GET['err']))
	{
?>
		<h4><?php echo ($_GET['err']); ?></h4>
<?php	
	}
 ?>
	<div class="container"><!--opening Container div-->
		
		<div class="form"><!--opening form div-->
			<div class="heading">
				<h4> <a href="">NeyUpdates<i class="fa fa-cart-plus"></i></a></h4>
				<h1>SignIn Form</h1>
			</div>
			<form action="login_process.php" method="POST" enctype="multipart/form-data" style="width: 100%; padding-left: 100px;">
			<div class="wrap2">
				<label>Email</label>
				<input type="text" name="email" required="required">
				<span  class="focus-input2"></span>
			</div>

			<div class="wrap2">
					<label>Password</label>
					<input type="password" name="password" required="required">
					<span class="focus-input"></span>
			</div>
			<button class="btn" type="submit" name="sign_up">Sign In</button>
		</form>

			
		</div><!--Closing form div-->
		<div class="image">
				<img src="images/general.jpg" class="img" alt="">
			</div>
	</div><!--closing Container div-->
</body>
</html>