<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";



include_once "logginn.php";

topp();

?>

	<div class="topnav">
		  <a href="index.php">Home</a>
		  <a class="active" href="contact.php">Contact</a>
		  <a href="about.php">About</a>
	</div>

<body>
	<main>
	<br>
		<h1>Contact Form</h1>
		<br>
		<p>Your message was sent successfully</p>
		
		
	</main>
	
	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
</body>

<?php 
lukk($dblink);
bunn(); 
?>