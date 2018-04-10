<?php
session_start();
include_once "funksjoner.php";

$bruker = $_SESSION['brukernavn'];

topp();
?>

	<div class='topnav'>
		<a href='index.php'>Home</a>
		<!-- <a href='#news'>Login</a> -->
		<a href='#contact'>Contact</a>
		<a href='#about'>About</a>
	</div>

	<section class="jumbotron text-center">
	  <div class="container">
	    <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
	    <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
	    <hr class="my-4">
	    <p class="lead text-muted">Dette er din treningsdagbok - her legger du inn treningsøktene dine</p>
	    <p>
	      <a href="dashboard.php" class="btn btn-secondary my-2">Dashboard</a>
	      <a href="treningsdagbok.php" class="btn btn-primary my-2">Treningsdagbok</a>
	      <a href="kostogtrening.php" class="btn btn-secondary my-2">Kosthold og treningsplan</a>
	    </p>
	  </div>
	</section>


	<div class="container">
		<form>
		  <div class="form-group">
		    <label>Dato</label>
		    <input type="date" class="form-control" id="dato">
		  </div>
		  <div class="form-group">
		    <label>Øvelse</label>
		    <select class="form-control" id="øvelse" onchange="endreØvelse(this)">
		      <option>Løping</option>
		      <option>Svømming</option>
		      <option>Sykling</option>
		      <option>Vektløfting</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label>Tidsforbruk (minutter)</label>
		    <input type="number" class="form-control" id="tid">
		  </div>
		  <div class="form-group">
		    <label id="antLabel">Antall km løpt</label>
		    <input type="number" class="form-control" id="antall">
		  </div>
		</form>
	</div>


<?php bunn(); ?>