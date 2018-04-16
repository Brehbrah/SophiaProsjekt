<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Bootstrap</title>
</head>
  <body>
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm">
      <div class ="container">
        <a class ="navbar-brand d-none d-sm-inline-block"> 
           <a class="navbar-brand" href="dashboard.php">Sophie Prosjekt</a>
        </a>
            <a class ="nav-item nav link" href=loggut.php>Logg ut</a>
        </a>
      </div>
    </nav>
  
  <div class="container">

<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
?>

    <section class="jumbotron text-center">
      <div class="container-fluid">
        <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
        <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
        <hr class="my-4">
        <p class="lead text-muted">Velkommen til ditt dashboard, hva vil du gjøre nå?</p>
        <p>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="preferanser.php" class="btn btn-secondary my-2">Preferanser</a>
          <a href="treningsplan.php" class="btn btn-secondary my-2">Treningsplan</a>
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
			<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
		</footer>
	
	
<?php bunn(); ?>

  </div><!-- content container -->

  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>