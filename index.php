<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";



include_once "logginn.php";

topp();
?>

	<div class="topnav">
		  <a class="active" href="index.php">Home</a>
		  <a href="#news">Login</a>
		  <a href="#contact">Contact</a>
		  <a href="#about">About</a>
	</div>

	<div class = "split left">
		<div class = "center">
			<img src = "img/SophiaFront.png" alt = "Sophia">
			<center><h4>Sophia</h4></center>
			<center><p>Veileder | Coach | Venn</p></center>
		</div>

		<div class="split right">
		  <div class="centered">
		    <div class = "box">
		    	<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="" method="post">
					<input type="email" class="input" id="signup_email" autocomplete="off" placeholder="Email">
					<input type="text" class="input" id="signup_name" autocomplete="off" placeholder="Username">
					<input type="password" class="input" id="signup_pass" autocomplete="off" placeholder="Password">
					<input type="submit" class="button" value="Sign Up">
				</form><!--.login-form-->
				<div class="help-text">
					<br>
					<br>
					<br>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="" method="post">
					<input type="text" class="input" name="brukernavn" autocomplete="off" placeholder="Email or Username">
					<input type="password" class="input" name="passord" autocomplete="off" placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>
					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
				<div class="help-text">
					<p><a href="#">Forget your password?</a></p>
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
			

		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
		    </div>
		</div>

<?php 
lukk($dblink);
bunn(); 
?>