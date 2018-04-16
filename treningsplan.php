<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
?>

<<<<<<< HEAD:kostogtrening.php
	<div class='topnav'>
		<a href='index.php'>Home</a>
		<!-- <a href='#news'>Login</a> -->
		  <a href="contact.php">Contact</a>
		  <a href="about.php">About</a>
	</div>
=======
  <div class='topnav'>
    <a href='loggut.php'>Logg ut</a>
    <a href='#contact'>Kontakt</a>
    <a href='#about'>Om oss</a>
  </div>
>>>>>>> bd7229eb3300d2bd8c3447254596d9a98308af93:treningsplan.php

    <section class="jumbotron text-center">
      <div class="container-fluid">
        <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
        <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
        <hr class="my-4">
        <p class="lead text-muted">Når du har lagt inn dine preferanser vil jeg lage en plan for deg.</p>
        <p>
          <a href="dashboard.php" class="btn btn-secondary my-2">Dashboard</a>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="preferanser.php" class="btn btn-secondary my-2">Preferanser</a>
          <a href="treningsplan.php" class="btn btn-primary my-2">Treningsplan</a>
        </p>
      </div>
    </section>
		<footer>
			<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
		</footer>
<?php bunn(); ?>