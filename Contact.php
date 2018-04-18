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
		<h1>Kontakt skjema</h1>
		<div class="container" >
		<p>Har du noen spørsmål, eller diskusjons tema du vi ta opp, så legg inn en e-post og send den til meg. Jeg skal prøve å svare på den så fort som mulig. </p>
		<div class="form">
			<form action="mailto:support@sophia.no" method="post" enctype="text/plain">
			Navn<br>
			<input type="text" name="name"><br>
			E-post:<br>
			<input type="text" name="mail"><br>
			Kommentar:<br>
			<input type="text" style="height:150px" name="comment" size="50"><br><br>
			<input type="submit" value="Send">
			</form>
	</div>
		
		

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