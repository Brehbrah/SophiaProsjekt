<?php
include_once "db/globals.php";
$dblink = kobleOpp();

// Etablerer forbindelse til databasen
function kobleOpp() {
  $dblink = mysqli_connect(TJENER, BRUKER, PASSORD, DB);
  if (!$dblink) {
    die('Klarte ikke å koble til databasen: ' . mysql_error($dblink));
  }
  mysqli_set_charset($dblink, 'utf8');
  return $dblink;
}

// Lukker forbindelsen til databasen
function lukk($dblink) {
  mysqli_close($dblink);
}

// Sjekker brukernavn/passord
function gyldigBruker($dblink, $brukernavn, $passord) {
  $ok = false;
  $_SESSION['innlogget'] = false;
  $sql = "SELECT * FROM bruker WHERE Brukernavn = '$brukernavn' AND Passord = '$passord'";
  $resultat = mysqli_query($dblink, $sql);
  $antall = mysqli_num_rows($resultat);
  if ($antall == 1) {
    $rad = mysqli_fetch_assoc($resultat);

    $_SESSION['innlogget'] = true;
    $_SESSION['bnr'] = $rad['BNr'];
    $_SESSION['epost'] = $rad['Epost'];
    $_SESSION['brukernavn'] = $rad['Brukernavn'];

    // Må bruke password_hash og password_verify senere 
    // for å unngå lagring av passord i klartekst.
    $ok = true;
  }
  return $ok;
}

// Sjekker om bruker er logget inn,
// og redirigerer til innloggingsside hvis ikke.
function sjekkInnlogging() {
  if (!isset($_SESSION['bnr'])) {
    session_destroy();
    header("Location: index.php");
  }
}

// Legger til en ny øvelse i databasen (treningsdagbok)
function leggTilØvelse($dblink, $bnr, $dato, $øvelse, $tid, $antall) {
  $sql = "INSERT INTO Treningsøkt (Dato, BNr, Øvelse, Minutter, Antall) VALUES ('$dato', $bnr, '$øvelse', $tid, $antall)";
  $resultat = mysqli_query($dblink, $sql);
  return $resultat;
}

// Henter samtlige øvelser på gitt dato til innlogget bruker
function hentTreninger($dblink, $bnr, $dato) { 
  $sql = "SELECT * FROM Treningsøkt WHERE BNr = $bnr AND Dato = '$dato'"; 
  $svar = mysqli_query($dblink, $sql); 
  $data = "<table class='table table-sm table-hover' id='displayøvelser'>" . 
            "<thead class='thead-dark'>" . 
              "<tr>" . 
                "<th>Dato</th>" . 
                "<th>Øvelse</th>" . 
                "<th>min</th>" . 
                "<th>km/øvelser</th>" . 
            "</thead>";

  while($rad = mysqli_fetch_assoc($svar)) { 
    $data .= "<tr class='table-success'>" .
                "<td>" . $rad['Dato'] . "</td>" .
                "<td>" . $rad['Øvelse'] . "</td>" .
                "<td>" . $rad['Minutter'] . "</td>" .
                "<td>" . $rad['Antall'] . "</td>" .
              "</tr>";
  }

  mysqli_close($dblink); 
  return $data; 
}


// Henter samtlige øvelser til innlogget bruker
function hentAlleTreninger($dblink, $bnr) { 
  $sql = "SELECT * FROM Treningsøkt WHERE BNr = $bnr"; 
  $svar = mysqli_query($dblink, $sql); 
  $data = "<table class='table table-sm table-hover' id='displayøvelser'>" . 
            "<thead class='thead-dark'>" . 
              "<tr>" . 
                "<th>Dato</th>" . 
                "<th>Øvelse</th>" . 
                "<th>min</th>" . 
                "<th>km/øvelser</th>" . 
            "</thead>";

  while($rad = mysqli_fetch_assoc($svar)) { 
    $data .= "<tr class='table-success'>" .
                "<td>" . $rad['Dato'] . "</td>" .
                "<td>" . $rad['Øvelse'] . "</td>" .
                "<td>" . $rad['Minutter'] . "</td>" .
                "<td>" . $rad['Antall'] . "</td>" .
              "</tr>";
  }

  mysqli_close($dblink); 
  return $data; 
} 




?>