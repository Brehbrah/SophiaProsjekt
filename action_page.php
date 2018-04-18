<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";

topp();
navBar("contact");
?>

<body>
	<main>
	<br>
		<h1>Contact Form</h1>
		<br>
		<p>Your message was sent successfully</p>
		
		
	</main>
</body>

<?php 
lukk($dblink);
bunn(); 
?>