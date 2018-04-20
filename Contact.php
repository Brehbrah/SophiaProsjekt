<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";

topp();
navBar("contact");
?>

<body>
	<main style="height: 600px">
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
			<button type="submit" class="btn btn-info btn-lg" value="Send">Send</button></a>
			</form>
		</div>
		</div>
	</main>
</body>

<?php 
lukk($dblink);
footer();
bunn(); 
?>