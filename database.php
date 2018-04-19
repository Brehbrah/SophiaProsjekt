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

  // prepared statement
  $stmt = $dblink->prepare("CALL HentBruker(?)");
  $stmt->bind_param("s", $brukernavn);
  $stmt->execute();
  $stmt->bind_result($bnr, $epost, $navn, $dbpass);

  if ($stmt->fetch() && password_verify($passord, $dbpass)) {

    $_SESSION['innlogget'] = true;
    $_SESSION['bnr'] = $bnr;
    $_SESSION['epost'] = $epost;
    $_SESSION['brukernavn'] = $navn;

    $ok = true;
  }
  return $ok;
}

function registrerBruker($dblink, $epost, $brukernavn, $passord) {
  $ok = false;
  $_SESSION['innlogget'] = false;
  // Passord hashes først
  $hashed_password = password_hash($passord, PASSWORD_DEFAULT);

  // prepared statement
  $stmt = $dblink->prepare("CALL NyBruker(?, ?, ?)");
  $stmt->bind_param("sss", $epost, $brukernavn, $hashed_password);
  $stmt->execute();


  return gyldigBruker($dblink, $brukernavn, $passord);
}

// Sjekker om bruker er logget inn,
// og redirigerer til innloggingsside hvis ikke.
function sjekkInnlogging() {
  if (!isset($_SESSION['bnr'])) {
    session_destroy();
    header("Location: index.php");
  }
}

// Legger til en ny Treningsøkt i databasen (treningsdagbok)
function nyTreningsøkt($dblink, $bnr, $dato, $øvelse, $tid, $antall) {
  $sql = "CALL NyTreningsøkt('$dato', $bnr, '$øvelse', $tid, $antall)";
  $resultat = mysqli_query($dblink, $sql);
  return $resultat;
}

// Henter samtlige øvelser på gitt dato til innlogget bruker
function hentTreninger($dblink, $bnr, $dato) { 
  $sql = "CALL DatoTreningsøkter($bnr, '$dato')"; 
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
  $sql = "CALL AlleTreningsøkter($bnr)"; 
  $svar = mysqli_query($dblink, $sql); 
  $data = "<table class='table table-sm table-hover' id='displayøvelser'>" . 
            "<thead class='thead-dark'>" . 
              "<tr>" . 
                "<th>Dato</th>" . 
                "<th>Øvelse</th>" . 
                "<th>Minutter</th>" . 
                "<th>Km/Øvelser</th>" . 
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


// Henter Statistikk over samtlige øvelser til innlogget bruker
function hentStatistikk($dblink, $bnr) { 
  $sql = "CALL AlleTreningsøkter($bnr)"; 
  $svar = mysqli_query($dblink, $sql); 
  $data = "<table class='table table-sm table-hover' id='displayøvelser'>" . 
            "<thead class='thead-dark'>" . 
              "<tr>" . 
                "<th>Øvelse</th>" . 
                "<th>Minutter</th>" . 
                "<th>Km/Øvelser</th>" . 
            "</thead>";

  $svømmingMin = 0;
  $svømmingAnt = 0;
  $løpingMin = 0;
  $løpingAnt = 0;
  $vektløftingMin = 0;
  $vektløftingAnt = 0;

  while($rad = mysqli_fetch_assoc($svar)) { 
    if ($rad['Øvelse'] == 'Svømming') {
      $svømmingMin = $svømmingMin + $rad['Minutter'];
      $svømmingAnt = $svømmingAnt + $rad['Antall'];
    } elseif ($rad['Øvelse'] == 'Løping') {
      $løpingMin = $løpingMin + $rad['Minutter'];
      $løpingAnt = $løpingAnt + $rad['Antall'];
    } elseif ($rad['Øvelse'] == 'Vektløfting') {
      $vektløftingMin = $vektløftingMin + $rad['Minutter'];
      $vektløftingAnt = $vektløftingAnt + $rad['Antall'];
    }
  }

  $data .= "<tr class='table-success'>" .
            "<td>" . "Svømming" . "</td>" .
            "<td>" . $svømmingMin . "</td>" .
            "<td>" . $svømmingAnt . "</td>" .
          "</tr>" .
          "<tr class='table-success'>" .
            "<td>" . "Løping" . "</td>" .
            "<td>" . $løpingMin . "</td>" .
            "<td>" . $løpingAnt . "</td>" .
          "</tr>" .
          "<tr class='table-success'>" .
            "<td>" . "Vektløfting" . "</td>" .
            "<td>" . $vektløftingMin . "</td>" .
            "<td>" . $vektløftingAnt . "</td>" .
          "</tr>";

  mysqli_close($dblink);
  return $data; 
}



// Endrer brukerens preferanser
function endrePreferanser($dblink, $bnr, $mål, $aktivitet) {
  $sql = "CALL EndrePreferanser($bnr, '$mål', '$aktivitet')";
  $resultat = mysqli_query($dblink, $sql);
  return $resultat;
}



// Henter brukerens preferanser
function hentPreferanser($dblink, $bnr) { 
  $sql = "CALL HentPreferanser($bnr)"; 
  $resultat = mysqli_query($dblink, $sql); 
  $data = "";
  $antall = mysqli_num_rows($resultat);
  if ($antall == 1) {
    $rad = mysqli_fetch_assoc($resultat);

    $mål = $rad['Mål'];
    $aktivitet = $rad['Aktivitetsnivå'];

    $data = "<p class='card-text'>Mål: $mål</p>" .
            "<p class='card-text'>Aktivitetsnivå: $aktivitet</p>";
  }

  mysqli_close($dblink);
  return $data; 
}

function topTrening($dblink){
  $sql = "CALL HentTopp10()";
  $svar = mysqli_query($dblink, $sql);
  $data = "<table class='table table-striped table-dark'>" . 
            "<thead>" . 
              "<tr>" . 
                "<th>#</th>" . 
                "<th>Bruker</th>" . 
                "<th>Score</th>" . 
            "</thead>";
  $nr = 1;
  while($rad = mysqli_fetch_assoc($svar)) { 
    $data .= "<tr>" .
                "<td>" . $nr++ . "</td>" .
                "<td>" . $rad['Brukernavn'] . "</td>" .
                "<td>" . $rad['SUM(Minutter)'] . "</td>" .
              "</tr>";
  }

  mysqli_close($dblink); 
  echo $data; 
}




?>