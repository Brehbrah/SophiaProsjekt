<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
?>

  <div class='topnav'>
      <a href='loggut.php'>Logg ut</a>
      <a href='contact.php'>Kontakt</a>
      <a href='about.php'>Om oss</a>
  </div>
  
    <section class="jumbotron text-center">
      <div class="container-fluid">
        <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
        <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
        <hr class="my-4">
        <p class="lead text-muted">Velkommen til ditt dashboard, hva vil du gjøre nå?</p>
        <p>
          <a href="treningsdagbok.php" class="btn btn-primary my-2">Dashboard</a>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="preferanser.php" class="btn btn-secondary my-2">Preferanser</a>
          <a href="treningsplan.php" class="btn btn-secondary my-2">Treningsplan</a>
          <a href="vektKalkulator.php" class="btn btn-secondary my-2">BMI/Kalori Kalkulator</a>
        </p>
      </div>
    </section>


    <section class="text-center">
        <p>
          <a class="btn btn-info btn" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample" id="visAlleBtn">
            Se mine treningsinnlegg
          </a>
        </p>
        <div class="collapse" id="collapse1">
          <div class="card card-body" id="displayAlle">
          </div>
        </div>

        <p>
          <a class="btn btn-info btn" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample" id="visStatBtn">
            Min trenings-statistikk
          </a>
        </p>
        <div class="collapse" id="collapse2">
          <div class="card card-body" id="displayStat">
          </div>
        </div>
    </section>
    
		<footer>
			<p> © Sophia | Email: support@sophia.no | Telefon: 4444 4444 </p>
		</footer>
	
	
<?php bunn(); ?>