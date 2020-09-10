<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<link href="imgs/website-logo.png" rel="icon"/>
		<title> GooseMarket® - Create Account </title>

		   
		<!-- Importing Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!-- CSS -->
		<link rel="stylesheet" href="static/signup.css">
		
	</head>
	<body>
		<main>  
			<div class="user">

					<header class="user__header">
							<img id="logo" src="imgs/CuteGoose.jpg" alt=""/>
							<h1 class="user__title">GooseMarket®<br></h1>
					</header>
					
					<form class="form">
							<div class="form__group">
									<input type="text" name="uid" placeholder="Username" class="form__input" />
							</div>
							
							<div class="form__group">
									<input type="email" name="mail" placeholder="Email" class="form__input" />
							</div>
							
							<div class="form__group">
									<input type="password" name="pwd" placeholder="Password" class="form__input" />
							</div>

							<div class="form__group">
									<input type="password" name="pwd-reapeat" placeholder="Password" class="form__input" />
							</div>

							<br>
							<button class="btn" type="button" name="signup-submit"> <h4>Sign Up</h4></button>
					</form>
			</div>
		</main>
	</body>

	<?php
		require "footer.php";
	?>

</html>