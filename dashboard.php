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
		<a href='#contact'>Kontakt</a>
		<a href='#about'>Om oss</a>
	</div>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
        <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
        <hr class="my-4">
        <p class="lead text-muted">Velkommen til ditt dashboard, hva vil du gjøre nå?</p>
        <p>
          <a href="dashboard.php" class="btn btn-primary my-2">Dashboard</a>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="kostogtrening.php" class="btn btn-secondary my-2">Kosthold og treningsplan</a>
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

<?php bunn(); ?>