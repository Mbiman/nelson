<?php 
	include('connection/conn.php');

	if (isset($_POST['sign_up'])) 
	{
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$con_password = $_POST['con_password'];

		if (!($password == $con_password)) 
		{
			$err = "Password did not match...";
			header('location:register.php?err='.$err);
		}elseif(!(empty($_FILES['profilepic']['name'])))
		{
			$img_path = 'pictures/';
			$img_new_path = $img_path .basename($_FILES['profilepic']['name']);
			$img_temp_path = $_FILES['profilepic']['tmp_name'];
			move_uploaded_file($img_temp_path, $img_new_path);

			$sql = "INSERT INTO registration (first_name, last_name, email, gender, password, profile_pics) VALUES ('$firstname', '$lastname', '$email', '$gender', '$password', '$img_new_path')";
			$query = mysqli_query($conn, $sql);

			if ($query) 
			{
				$succ = "Registration successful...";
				header('location:login.php?succ='.$succ);
			}else
			{
				$err = "Registration failed...";
				header('location:register.php?err='.$err);
			}
		}
	}
	mysqli_close($conn);
?>

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
				<h1>Registeration Form</h1>
			</div>
			<form action="" method="POST" enctype="multipart/form-data" style="width: 100%; padding-left: 100px;">
			<div class="wrap"><!--opening first wrap div-->
				<div class="f1">
					<label>First Name</label>
					<input type="text" name="firstname" required="required">
					<span class="focus-input"></span>
				</div>
				<div class="f2">
					<label>Last Name</label>
					<input type="text" name="lastname" required="required">
					<span class="focus-input"></span>
				</div>
			</div><!--closing wrap div-->
			<div class="wrap">
				<div class="f1">
				<label>Gender</label>
				<input type="text" name="gender" required="required">
				<span  class="focus-input2"></span>
			</div>
			<div class="f2">
				<label>Profile Picture</label>
				<input type="file" name="profilepic" required="required">
				<span  class="focus-input2"></span>
			</div>
			</div>
			<div class="wrap2">
				<label>Email</label>
				<input type="text" name="email" required="required">
				<span  class="focus-input2"></span>
			</div>

			<div class="wrap">
				<div class="f1">
					<label>Password</label>
					<input type="password" name="password" required="required">
					<span class="focus-input"></span>
				</div>
				<div class="f2">
					<label>Confirm Password</label>
					<input type="password" name="con_password" required="required">
					<span class="focus-input"></span>
				</div>
			</div>
			<button class="btn" type="submit" name="sign_up">Register</button>
			Already have an account? <a href="login.php">Sign In</a> 
		</form>

			
		</div><!--Closing form div-->
		<div class="image">
				<img src="images/33.jpg" class="img" alt="">
			</div>
	</div><!--closing Container div-->
</body>
</html>