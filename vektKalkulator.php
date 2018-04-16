<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

?>

	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
	
<?php bunn(); ?>