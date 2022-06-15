<?php
	session_start();
	if (! isset($_SESSION['firstname'])) {
		header('location:register.php');
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<meta charset="utf-8">
	<meta name="Author" description="neyupdates">
	<meta name="content" description="HTML, CSS, JAVASCRIPT, PHP, MYSQL">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
	<div class="scroll-up-btn">
		<i class="fa fa-angle-up"></i>
	</div>
	<div id="container"> <!-- opening container div -->
		<div class="row"> <!-- opening row div -->
			<nav class="navbar">
			<div class="max-width">
				<div class="logo"><a href="#">Ney<span>UPDATES.</span></a></div>
				<ul class="menu">
					<li><a href="#" class="menu-btn">Home</a></li>
					<li><a href="#" class="menu-btn">Forum</a></li>
					<li><a href="music.php" class="menu-btn">Music</a></li>
					<li><a href="movies.php" class="menu-btn">Videos</a></li>
					<li><a href="logout.php" class="menu-btn">Logout</a></li>
					<li><a href="#" class="menu-btn">Contact</a></li>
				
				</ul>
				<?php 
					if (isset($_SESSION['firstname'])) {
						 ?>	
						 <img src="<?php echo $_SESSION['profile_pics']; ?>" style="border: 1px solid #fff; width: 60px; height: 60px; border-radius: 100px;">
						 <?php 
						}
					 ?>	
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div>
			</div>
		</nav><!-- closing nav -->
			 

		
		<div class="nothing">
			
		</div>
		

	<section class="films" id="films">
		<div class="slide">
			<div class="carousel owl-carousel">
				<div class="card">
					<div class="box">
						<img src="images/1.jpeg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/2.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/3.png">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/4.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/5.jpeg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/6.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/7.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/8.jpeg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/9.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/10.jfif">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/11.png">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/12.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/13.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/14.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/15.jpg">
					</div>
				</div>



			</div>
		</div>
	</section>


	<h4 class="title">Movies</h4>

	<section class="movies">
		<div class="max">
	

				
				<div class="card">
						<img src="images/16.jpg">
				</div>
				<div class="card">
						<img src="images/17.jpg">
				</div>
				<div class="card">
						<img src="images/18.jpg">
				</div>
				<div class="card">
						<img src="images/19.jpg">
				</div>
				<div class="card">
						<img src="images/20.jpeg">
				</div>
				<div class="card">
						<img src="images/21.jpg">
				</div>
				<div class="card">
						<img src="images/22.jpg">
				</div>
				<div class="card">
						<img src="images/23.jpg">
				</div>
				<div class="card">
						<img src="images/24.jpg">
				</div>
				<div class="card">
						<img src="images/25.jpg">
				</div>
				<div class="card">
						<img src="images/26.jpg">
				</div>
				<div class="card">
						<img src="images/27.jpg">
				</div>

		</div>
		<div class alls><li class="all"><a href="movies.php">View All</a></li></div>
	</section>




	<section class="music" id="music">
		<div class="slide">
			<div class="carousel owl-carousel">
				<div class="card">
					<div class="box">
						<img src="images/music/1.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/2.jpeg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/3.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/4.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/5.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/6.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/7.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/8.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/9.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/10.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/11.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/12.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/13.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/14.jpg">
					</div>
				</div>

				<div class="card">
					<div class="box">
						<img src="images/music/15.jpg">
					</div>
				</div>



			</div>
		</div>
	</section>


	<h4 class="title">Musics</h4>

	<section class="movies">
		<div class="max">
	

				
				<div class="card">
						<img src="images/music/16.jpg">
				</div>
				<div class="card">
						<img src="images/music/17.jpg">
				</div>
				<div class="card">
						<img src="images/music/18.png">
				</div>
				<div class="card">
						<img src="images/music/19.jpg">
				</div>
				<div class="card">
						<img src="images/music/20.jpg">
				</div>
				<div class="card">
						<img src="images/music/21.jpg">
				</div>
				<div class="card">
						<img src="images/music/22.jpg">
				</div>
				<div class="card">
						<img src="images/music/23.jpg">
				</div>
				<div class="card">
						<img src="images/music/24.png">
				</div>
				<div class="card">
						<img src="images/music/25.jpg">
				</div>
				<div class="card">
						<img src="images/music/26.jpg">
				</div>
				<div class="card">
						<img src="images/music/27.jpg">
				</div>

		</div>
		<div class alls><li class="all"><a href="music.php">View All</a></li></div>
	</section>


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



		</div> <!-- closing row div -->
</div> <!-- closing container div -->
	
	<script src="javascript/script.js"></script>
</body>
</html>