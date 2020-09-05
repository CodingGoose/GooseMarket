<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title> Login </title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!--  Stylesheet -->
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
	<!-- Importing from Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	<!-- Bootstrap navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<img src="imgs/CuteGoose.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
				GooseMarket®
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>

					<!-- Dropdown Login/SignUp Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
							Login/Sign Up
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<!-- Login Form -->
							<a class="dropdown-item" href="#">
								<form  action="includes/login.inc.php" method="post">
									<input type="text" placeholder="Username" name="username">
									<input type="text" placeholder="Password" name="psw">
									<button type="submit" class="btn btn-outline-primary">Log In</button>
								</form>
							</a>
							<!-- SignUp Form -->
							<a class="dropdown-item" href="signup.inc.php">
									<a href="signup.php">Sign up</a>
								</form></a>
							<div class="dropdown-divider"></div>
							<!-- Logout button -->
							<a class="dropdown-item" href="#">
                <form  action="includes/logout.inc.php" method="post">
								<button type="submit" class="btn btn-outline-danger">Log Out</button>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<img style="width:350px ; height:350px;" src="imgs/gooseChef.jpg" alt="Goose">
		<h2 style="font-family: lucida console">Epic Goose Chef only at <br><b style="color:grey;">GooseMarket®</b></h2>
	</body>
</html>
