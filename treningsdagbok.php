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
					<div class ="navbar-nav">
						<a class="nav-item nav-link active">Dashboard</a>
					</div>
					<a href='loggut.php'>Logg ut</a>
					<a href='Contact.php'>Kontakt</a>
					<a href='About.php'>Om oss</a>
				</a>
			</div>
		</nav>
	<div class="container">

		<?php
		session_start();
		include_once "funksjoner.php";
		include_once "database.php";
		include_once "leggtil.php";
		sjekkInnlogging();

		$bruker = $_SESSION['brukernavn'];

		topp();
		?>

	<section class="jumbotron text-center">
	  <div class="container-fluid">
	    <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
	    <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
	    <hr class="my-4">
	    <p class="lead text-muted">Dette er din treningsdagbok - her legger du inn treningsøktene dine</p>
	    <p>
	      <a href="dashboard.php" class="btn btn-secondary my-2">Dashboard</a>
	      <a href="treningsdagbok.php" class="btn btn-primary my-2">Treningsdagbok</a>
	      <a href="preferanser.php" class="btn btn-secondary my-2">Preferanser</a>
	      <a href="treningsplan.php" class="btn btn-secondary my-2">Treningsplan</a>
	    </p>
	  </div>
	</section>


	<div class="container" id="treningsdagbok">
		<p id="valgtDato">Treningsdagboken for:</p>
		<form action="treningsdagbok.php" method="post">
		  <div class="form-group">
		    <input type="date" class="form-control" id="dato" name="dato" required>
		  </div>
		  <div class="form-group">
		    <label>Øvelse</label>
		    <select class="form-control" id="øvelse" name="øvelse" required>
		      <option></option>
		      <option>Løping</option>
		      <option>Svømming</option>
		      <option>Sykling</option>
		      <option>Vektløfting</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label>Tidsforbruk (minutter)</label>
		    <input type="number" class="form-control" id="tid" name="tid" required>
		  </div>
		  <div class="form-group">
		    <label id="antLabel">Antall km løpt</label>
		    <input type="number" class="form-control" id="antall" name="antall" required>
		  </div>
		  <div class="form-group">
		    <input type="submit" value="Legg til" class="btn btn-primary btn-sm">
		  </div>
		</form>
		<div id="display"></div>
	</div>
<br>
<br>
<br>
		<footer>
			<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
		</footer>
<?php 
lukk($dblink);
bunn(); 
?>

	

	</div><!-- content container -->

	<script src="js/jquery.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


