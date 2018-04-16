<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";



include_once "logginn.php";

topp();



?>

	<div class="topnav">
		  <a href="index.php">Hjem</a>
		  <a class="active" href="contact.php">Kontakt</a>
		  <a href="about.php">Om oss</a>
	</div>

<body>
	<main>
	<br>
		<h1>Contact Form</h1>
		
		<div class="container" >
		
		
		

</div>
		
	</main>
	
	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
</body>

<?php 
lukk($dblink);
bunn(); 
?>