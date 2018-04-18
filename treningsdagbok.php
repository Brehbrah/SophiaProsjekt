<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
include_once "leggtil.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
navBarDash();
menyDashboard("treningsdagbok", "Dette er din treningsdagbok - her legger du inn treningsøktene dine", $bruker);
?>

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



<?php 
lukk($dblink);
bunn(); 
?>