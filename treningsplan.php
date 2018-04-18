<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
navBarDash();
menyDashboard("treningsplan", "Når du har lagt inn dine preferanser vil jeg lage en plan for deg.", $bruker);
?>






<?php bunn(); ?>