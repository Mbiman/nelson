<?php 

	session_start();
	include('connection/conn.php');

	$reg = $_SESSION['reg_id'];

	if (!isset($_SESSION['firstname'])) {
		header('location:register.php?login=');
	}

	$topic = $_POST['topic'];
	$content = $_POST['content'];

	$sql = "INSERT INTO post(reg_id, topic, content) VALUES ('$reg', '$topic', '$content')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		// echo "connected";
		header('location:post.php?post_succ=');
	}else{
		header('location:post.php?post_err=');
	}

 ?>