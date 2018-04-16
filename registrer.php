<?php
session_start();
include_once "database.php";

$innlogget = false;
$melding = "";

if (isset($_POST["signup_epost"]) && isset($_POST["signup_brukernavn"]) && isset($_POST["signup_passord"])) {

  $epost = mysqli_real_escape_string($dblink, $_POST['signup_epost']);
  $brukernavn = mysqli_real_escape_string($dblink, $_POST['signup_brukernavn']);
  $passord = mysqli_real_escape_string($dblink, $_POST['signup_passord']);

  if (registrerBruker($dblink, $epost, $brukernavn, $passord)) {
    $innlogget = true;
    header("Location: dashboard.php");
  }
  else {
    $melding .= "<p>Feil ved registrering av bruker</p>";
  }

}
if (!$innlogget) {
  echo $melding;
}
?>