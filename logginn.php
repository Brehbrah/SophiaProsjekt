<?php
session_start();
include_once "database.php";

$innlogget = false;
$melding = "";

if (isset($_POST["brukernavn"]) && isset($_POST["passord"])) {

  $brukernavn = mysqli_real_escape_string($dblink, $_POST['brukernavn']);
  $passord = mysqli_real_escape_string($dblink, $_POST['passord']);

  if (gyldigBruker($dblink, $brukernavn, $passord)) {
	  $innlogget = true;
    header("Location: dashboard.php");
  }
  else {
    $melding .= "<p>Feil brukernavn/passord!</p>";
  }

}
if (!$innlogget) {
  echo $melding;
}

?>