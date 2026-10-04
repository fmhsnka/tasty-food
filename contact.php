<!DOCTYPE html>
<html lang="en">
	<title>Contact Us</title>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
	<link rel="stylesheet" href="css/contactstyle.css" />

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/bc52fcc731.js" crossorigin="anonymous"></script>

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
							<a href = "contact.php">Contact Us</a>         
						</li>

						<li class="log-out">
							<a href = "index.php">Log Out</a>        
					</li>
				</ul>
			</div>			
		</nav>
	</div>

	<?php
		include 'php/contact-us.php';
	?>

</body>
</html>