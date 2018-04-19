<?php
$dblink = kobleOpp();

$melding = "";

if (isset($_POST["leggtil"]) && isset($_POST["tid"]) && isset($_POST["antall"])) {
  $bnr = $_SESSION['bnr'];
  $dato = $_POST["dato"];
  $øvelse = $_POST["øvelse"];
  $tid = $_POST["tid"];
  $antall = $_POST["antall"];

  $ok = nyTreningsøkt($dblink, $bnr, $dato, $øvelse, $tid, $antall);

  if ($ok) {
    $melding .= "Øvelse lagt til!";
  } else {
    $melding .= "Vennligst fyll ut alle felt";
  }

  echo $melding;
} else if (isset($_POST["slett"])) {
  $bnr = $_SESSION['bnr'];
  $dato = $_POST["dato"];
  
  $ok = slettTreningsøkt($dblink, $bnr, $dato);

  if ($ok) {
    $melding .= "Øvelser på valgt dato slettet!";
  } else {
    $melding .= "Vennligst fyll ut alle felt";
  }

  echo $melding;
}











?>