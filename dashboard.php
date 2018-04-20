<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
navBarDash();
menyDashboard("dashboard", "Velkommen til ditt dashboard, hva vil du gjøre nå?", $bruker);
?>

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
	
	
<?php
footer();
bunn();
?>