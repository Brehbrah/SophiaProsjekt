<?php
include_once "funksjoner.php";

topp();
?>

	<div class='topnav'>
		<a href='index.php'>Hjem</a>
		<!-- <a href='#news'>Login</a> -->
		<a href='#contact'>Kontakt</a>
		<a href='#about'>Om oss</a>
	</div>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Hei, bruker!</h1>
        <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
        <hr class="my-4">
        <p class="lead text-muted">Når du har lagt inn dine preferanser vil jeg lage en kostholdsplan for deg.</p>
        <p>
          <a href="dashboard.php" class="btn btn-secondary my-2">Dashboard</a>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="kostogtrening.php" class="btn btn-primary my-2">Kosthold og treningsplan</a>
        </p>
      </div>
    </section>

<?php bunn(); ?>