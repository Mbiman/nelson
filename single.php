<?php
	session_start();
	include ('connection/conn.php');
	if (! isset($_SESSION['firstname'])) {
		header('location:register.php');
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeyUpdates | Music</title>
    <link rel="stylesheet" href="css/movie_style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
</head>
<style>
    
    .wrapper {
		background-color: blanchedalmond;
    }
    .col-sm-9 img{
        
    }
    .title1{
        font-size: 40px;
        padding-bottom: 30px;
        text-transform: uppercase;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
.contact-grids .uu{
  background: #1ABC9C;
    text-transform: uppercase;
    border: none;
    padding: 10px 0;
    width: 100%;
    font-size: 15px;
    color: #fff;
    outline: none;
  transition:.5s all;
  -webkit-transition:.5s all;
  -moz-transition:.5s all;
  -o-transition:.5s all;
  -ms-transition:.5s all;
  text-align: center;
}
.contact-grids .uu a{
	color: white;
	text-decoration: none;
}


</style>
<body>
    <div class="scroll-up-btn">
		<i class="fa fa-angle-up"></i>
	</div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Ney<span>UPDATES.</span></a></div>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Home</a></li>
                <li><a href="#" class="menu-btn">Forum</a></li>
                <li><a href="music.php" class="menu-btn">Music</a></li>
                <li><a href="movies.php" class="menu-btn">Videos</a></li>
                <li><a href="logout.php" class="menu-btn">Logout</a></li>
                <li><a href="#" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav><!-- closing nav -->

    <div style="height: 120px;"></div>

<div class="container">
<div class="row">

<div class="left col-sm-9" style="height: 100px;"> <!--Opening left div-->

    <h1 class="title1">Download</h2>
        <div class="wrapper">
            <img src="images/general.jpg" alt="" style="width: 100%; padding-bottom: 20px;">
        <p style="font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dicta ipsum expedita excepturi alias adipisci architecto, quasi dolor officiis harum velit at ut ratione odio, delectus modi totam hic culpa praesentium, non id sapiente doloribus. Aperiam cum illo id impedit expedita officia, molestiae quas facilis accusantium quasi doloribus, ipsum velit tempora iure neque excepturi veniam. Odit, dolore facilis tempora vel quod asperiores. Atque quaerat commodi eum debitis, magnam accusantium, delectus, autem velit eaque totam illum praesentium id est numquam dolor inventore? Quas deleniti nisi vel. Maxime perferendis ipsam, optio assumenda minus voluptatum architecto modi ratione, enim provident, expedita obcaecati eius.</p>
            <h4>Download links:</h4>
            <button class="btn btn-danger btn-xl"><a href="Video/Neymar_Jr_Skills_That_Will_Blow_Your_Mind_2020(360p).mp4">360p</a></button>  <button class="btn btn-danger btn-xl"><a href="Video/Neymar_Jr_2019_-_Neymagic_Skills_&_Goals__HD(480p).mp4">480p</a></button>  <button class="btn btn-danger btn-xl"><a href="Video/Neymar_Jr_Destroying_Everyone_in_2020!(720p).mp4">720p</a></button>  <button class="btn btn-danger btn-xl"><a href="Video/Neymar_Jr_Skills_&_Goals_That_His_Opponents_Will_Never_Forget(360p).mp4">1080p</a></button>
        </div>
</div> <!--closing left div -->

<div class="col-sm-3" style="margin-top: 30px;"> <!--Opening right div -->
    <h1>Popular Search</h1>
    <table class="table">
        
        <tr>
            <td style="background: green; color: white">1</td>
            <td><li><a href="#">Korean Movies(393)</a></li></td>
        </tr>
        <tr >
            <td style="background: green; color: white">2</td>
            <td><li><a href="#">Mulan(332)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">3</td>
            <td><li><a href="#">Netflix Movies(183)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">4</td>
            <td><li><a href="#">Action Movies 2020(176)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">5</td>
            <td><li><a href="#">Black Widow(147)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">6</td>
            <td><li><a href="#">Power Book II(141)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">7</td>
            <td><li><a href="#">The New Mutants(124)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">8</td>
            <td><li><a href="#">Train To Busan(104)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">9</td>
            <td><li><a href="#">Animation(98)</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">10</td>
            <td><li><a href="#">Black Panther(76)</a></li></td>
        </tr>
    </table>
    <h1>Trending Music</h1>
    <table class="table">
        <tr >
            <td style="background: green; color: white">1</td>
            <td><li><a href="#">Eru - Olamide</a></li></td>
        </tr>
        <tr >
            <td style="background: green; color: white">2</td>
            <td><li><a href="#">Twice As Tall - Burna Boy</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">3</td>
            <td><li><a href="#">Celia - Tiwa Savage</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">4</td>
            <td><li><a href="#">Zulu Man With Some Powers - Nasty C</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">5</td>
            <td><li><a href="#">Peace In The Storm - Sinach</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">6</td>
            <td><li><a href="#">Yoruba - Ladipoe</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">7</td>
            <td><li><a href="#">Dangbana Orisa - Bella Shmurda</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">8</td>
            <td><li><a href="#">Apollo - Fireboy Dml</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">9</td>
            <td><li><a href="#">King Of Turn Up Mix(vol 3) - Dj Toski</a></li></td>
        </tr>
        <tr>
            <td style="background: green; color: white">10</td>
            <td><li><a href="#">TWICE AS TALL - BURNA BOY</a></li></td>
        </tr>
    </table>
</div> <!--closing right div -->

</div> <!--closing general row div -->
</div> <!--closing general container -->

<div class="container">
    <div class="row">
    <div class="contact-grids">
<div class="col-md-6 contact-grid">
					<h4 style="text-align: center;">Comment</h4><br>
					<form action="" method="post">
						<input type="text" class="form-control" id="topic" value="Movie Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Movie Name';}" required=""> <br>
						<textarea type="text" class="form-control" id="content" value="Content" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Content';}" required=""></textarea><br>
						<div class="uu"><a href="Javascript:void(0)" class="post-btn">Post</a></div>
                        </form>	
				</div>
                <div class="col-md-6 contact-grid">
					<h4 style="text-align: center;">Latests Posts</h4>
					<table class="table">
						<tr>
							<th>Movie</th>
							<th>Contents</th>
							<th>Date posted</th>
						</tr>
						<?php 
							$sql = "SELECT * FROM main_post LIMIT 5";
							$query = mysqli_query($conn, $sql);
							while ($rows = mysqli_fetch_assoc($query)) {
								echo "<tr>";
								echo "<td>" .$rows['topic']. "</td>";
								echo "<td>" .$rows['content']. "</td>";
								echo "<td>" .$rows['time_posted']. "</td>";
								echo "</tr>";
							}
						 ?>
					</table>
				</div>
    </div>
    </div>
</div>

<script>
	function loadwindow(){
		window.location='single.php';
	}
	$(document).ready(function (){
		$('.post-btn').click(function(){
			var topic = $('#topic').val();
			var content = $('#content').val();
			$.ajax({
				url: 'save_post.php',
				data: 'topic=' +topic+ '&content=' +content,
				type: 'POST',
				success: function(){
						alert('Post Successful');
						loadwindow();
				}
			})
		})

		}) 
</script>

	<!-- Footer-->
    <div class="footer" style="clear: both; margin-top: 100px;">
        <div class="main-content"><!--Opening Main-content Div-->
            <div class="left box"><!--Opening Left-Box Div-->
                <h2>About Us</h2>
                <div class="content"><!--Opening content Div-->
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum adipisci vitae aperiam qui officiis amet ut voluptates delectus quibusdam explicabo at quo doloremque, distinctio saepe quasi non dicta magnam alias nostrum sequi quisquam. Molestias distinctio asperiores, deserunt rerum doloribus quidem voluptates mollitia eos natus aspernatur beatae ab facere, sapiente dolorum totam exercitationem. Repellat eaque, tenetur iure facere nesciunt, tempore impedit modi voluptatum distinctio perferendis ipsum optio voluptates libero, soluta et! </p>
                    <div class="social">
                        <a href="#" style="color: White;"><span class="fa fa-facebook-f"></span></a>
                        <a href="#" style="color: White;"><span class="fa fa-twitter"></span></a>
                        <a href="#" style="color: White;"><span class="fa fa-instagram"></span></a>
                        <a href="#" style="color: White;"><span class="fa fa-youtube"></span></a>
                    </div>
                </div><!--Closing content Div-->
            </div><!--Closing Left-Box Div-->

            

            <div class="right box">
                <h2>Contact Us</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required="">
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required=""></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--Closing Main-content Div-->
        <div class="bottom">
            <center>
                <span class="credit"> <a href="#">NeyUpdates</a></span>
                <span class="fa fa-copyright"></span><span> 2020 All Rights Reserved</span>
            </center>
        </div>
</div><!--Closing Footer Div-->
<script>
    //slide up btn script
	$('.scroll-up-btn').click(function(){
		$('html').animate({scrollTop: 0});
	});
</script>

<script src="javascript/script.js"></script>
</body>
</html>