<?php 
	include 'connection/conn.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$admin_email = "admin@gmail.com";
		$admin_pass = "admin001";
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if ($email === $admin_email && $password === $admin_pass) {
			session_start();
			$_SESSION['admin'] = "admin@gmail.com";
			$succ = "Welcome Admin";
			header('location:admindash.php?succ='.$succ);
		}else{
			$sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			$num= mysqli_num_rows($query);
			if ($num == 1) {
				while ($rows = mysqli_fetch_array($query)) {
					session_start();
					$_SESSION['firstname'] = $rows['first_name'];
					$_SESSION['reg_id'] = $rows['reg_id'];
					$_SESSION['profile_pics'] = $rows['profile_pics'];

					$succ = "Login Successful";
					header('location:index.php?succ='.$succ);
				}
			}else{
				$err = "Please register before you login";
			header('location:register.php?err='.$err);
			}
		}else{
			$err = "Login failed..";
			header('location:register.php?err='.$err);
		}
		}

		
	}
 ?>