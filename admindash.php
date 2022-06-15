<?php 
	include 'connection/conn.php';
	session_start();
	if (! isset($_SESSION['admin'])) {
		header('location:register.php');
	}

	if (isset($_REQUEST['submit'])) {
		$post_id = $_REQUEST['post_id'];
		$sql = "DELETE FROM post WHERE post_id = '$post_id'";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			$succ = "Post deleted Successfully...";
			header('location:admindash.php');
		}else{
			$err = "Can't delete Post";
			header('location:admindash.php');
		}
	}
	if (isset($_REQUEST['post'])) {
		$post_id = $_REQUEST['post_id'];
		$sql = "SELECT * FROM post WHERE post_id = '$post_id'";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			while ($rows = mysqli_fetch_assoc($query)) {
				$reg_id = $rows['reg_id'];
				$topic = $rows['topic'];
				$content = $rows['content'];
				$time_posted = $rows['time_created'];

			}
			
			$sql2 = "INSERT INTO main_post (post_id, reg_id, topic, content, time_posted) VALUES ('$post_id', '$reg_id', '$topic', '$content', '$time_posted')";
			$query2 = mysqli_query($conn, $sql2);
			if ($query2) {
				$succ = "Posted Successfully...";
				header('location:admindash.php?succ=' .$succ);
			}else{
				$err = "Not Posted";
				header('location:admindash.php?err=' .$err);
			}
		}
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <title>NeyUpdates | ADMIN</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
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
<div>
	<table class="table" border="1;" style="text-align: center;">
		<tr>
			<th>ID</th>
			<th>TOPIC</th>
			<th>CONTENT</th>
			<th>TIME POSTED</th>
			<th colspan="2" style="text-align: center;">ACTION</th>
		</tr>
		
			<?php 
				$sql = "SELECT * FROM post";
				$query = mysqli_query($conn, $sql);
				if (mysqli_num_rows($query) > 0) {
					while ($rows = mysqli_fetch_assoc($query)) {
				echo "<tr>";
				echo"<td>" .$rows['reg_id']. "</td>"; 
				echo	"<td>" .$rows['topic']. "</td>"; 
				echo	"<td>" .$rows['content']. "</td>"; 
				echo	"<td>" .$rows['time_created']. "</td>"; 
				echo "<td>
				<form method = 'post'>
					<input type= 'hidden' name= 'post_id' value=".$rows['post_id'].">
					<input type= 'submit' class= 'btn btn-danger btn-small' name= 'submit' value='delete'>
				 </form> </td>";
				 echo "<td><form method = 'post'>
					<input type= 'hidden' name= 'post_id' value=".$rows['post_id'].">
					<input type= 'submit' class= 'btn btn-primary btn-small' name= 'post' value='post'>
				 </form>
				 </td>";
				echo "</tr>";
					}
				}
			 ?>
		
	</table>
</div>
</body>
</html>