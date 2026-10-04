<!DOCTYPE html>
<html>

<head>

	<title>Cheesy Rings</title>
	<link rel="stylesheet" href="css/cheesy-rings.css"/>
	<link rel="shortcut icon" type="image" href="img/Tasty.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	
	<script src="https://kit.fontawesome.com/bc52fcc731.js" crossorigin="anonymous"></script>

	<style>

		body {
			background-color: #111;
		}

	</style>

</head>

<body>

		<div class="header">
			<nav>
				<input type = "checkbox" id = "show-menu">
					<label for = "show-menu" class = "menu-icon"><i class = "fas fa-bars"></i></label>
				<div class = "content">
				<div class = "logo"><a href = "homepage.php">Tasty Food</a></div>
				
				<ul class="links">

						<li><a href = "homepage.php">Home</a></li>
						
						<li><a href = "aboutus.php">About Us</a></li>
						
						<li>
							<a href = "#" class="desktop-link">Recipe</a>
							<input type = "checkbox" id = "show-recipe">
							<label for = "show-recipe">Recipe</label>
							
							<ul>
								<li><a href = "burger.php">Burger</a></li>
								<li><a href = "pizza.php">Pepperoni Pizza</a></li>
								<li><a href = "chicken-wings.php">Buffalo Wings</a></li>
								<li><a href = "cheesy-rings.php">Cheesy Rings</a></li>
								<li><a href = "lumpia.php">Lumpia</a></li>
							</ul>
						</li>
						
						<li>
							<a href = "contact.php" >Contact Us</a>     
						</li>

						<li class="log-out">
							<a href = "index.php" >Log Out</a>        
						</li>
					</ul>
				</div>			
			</nav>
		</div>

	<?php
		include 'php/cheesy-rings4.php';
	?>

	<section class="footer">
		<div class="social-media">
			<a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
			<a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
			<a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
			<a href="https://www.google.com/gmail/about/"><i class="fa-brands fa-google"></i></a>
		</div>

		<ul class="list">
			<li>
				<a href="homepage.php">Home</a>
			</li>
			<li>
				<a href="aboutus.php">About</a>
			</li>	
			<li>
				<a href="homepage.php#main">Recipe</a>
			</li>
			<li>
				<a href="contact.php">Contact</a>
			</li>		
		</ul>

		<div class="Copyright">
			&copy; 2023 Tasty Food. All rights reserved.
		</div>
	</section>

</body>
</html>