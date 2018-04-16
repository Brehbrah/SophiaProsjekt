<?php
$dblink = kobleOpp();

$melding = "";

if (isset($_POST["mål"]) && isset($_POST["aktivitet"])) {
  $bnr = $_SESSION['bnr'];
  $mål = $_POST["mål"];
  $aktivitet = $_POST["aktivitet"];

  $ok = endrePreferanser($dblink, $bnr, $mål, $aktivitet);

  if ($ok) {
    $melding .= "Dine preferanser er nå endret!";
  } else {
    $melding .= "Vennligst fyll ut alle felt";
  }

  echo $melding;
}











?>