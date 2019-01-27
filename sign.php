<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign up | Login</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".login-form").hide();
			$(".login").css("background","none");

			$(".login").click(function(){
				$(".signup-form").hide();
				$(".login-form").show();
				$(".signup").css("background","none")
				$(".login").css("background","#fff");
			});

			$(".signup").click(function(){
				$(".login-form").hide();
				$(".signup-form").show();
				$(".login").css("background","none")
				$(".signup").css("background","#fff");
			});

			$(".btn").click(function(){
				$(".input").val("")
			});
		});
	</script>
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				<img src="images/pick-ur trash.png" class="logo">

				<ul class="main-nav animated slideInUp">
					<li><a href="indx.html">HOME</a></li>
					<li><a href="About.html">ABOUT</a></li>
					<li><a href="contactus.html">CONTACT US</a></li>
					<li><a href="signup.html">SIGN UP  |  LOGIN</a></li>

					

				</ul>
				<a href="#" class="mobile-icon" tag name="check-class"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
				
			</div>		

		</nav>				

	</header>

	<div class="container">
		<div class="signup">Sign up</div>
		<div class="login">Login</div>

		<form action="signup.php" method="POST">

		<div class="signup-form">

			
			<input type="text" class="input" placeholder="Choose a user name " name="user_name">
			<input type="text" class="password" placeholder="Choose a password" name="password">
			<button type="submit" class="btn" name="submit1">Create Account</button>

		</div>

		</form>

		<form action="signup.php" method="POST">

		<div class="login-form">
			
			<input type="text" class="input" placeholder="E-mail or user name" name="uname">
			<input type="password" class="input" placeholder="Password" name="pword">
			<button type="submit" class="btn" name="submit2">Log In</button>
			<span><a href="#">I Forgot my user name and password </a></span>

		</div>
		</form>
	</div>

	
</body>
</html>
