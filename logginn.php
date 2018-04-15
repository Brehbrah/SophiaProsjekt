<?php
session_start();
include_once "database.php";

$innlogget = false;
$melding = "";

if (isset($_POST["brukernavn"]) && isset($_POST["passord"])) {

  $brukernavn = $_POST['brukernavn'];
  $passord = $_POST['passord'];

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