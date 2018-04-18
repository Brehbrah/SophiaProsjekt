<?php
// Legger til lik header på alle websider
function topp() {
	echo "<!DOCTYPE html>
		<html>
		<head>
			<meta charset='utf-8'>
			<title>Sophia A.I - Din Personlig Veileder</title>
			<link rel='stylesheet' type = 'text/css' href='css/bootstrap.min.css'>
			<link rel='stylesheet' type = 'text/css' href='css/style.css'>
			<link rel='stylesheet' type = 'text/css' href='css/dashboard.css'>
			<script src='js/jquery-3.3.1.min.js'></script>
			<script src='js/bootstrap.min.js'></script>
			<script src='js/login.js'></script>
			<script src='js/dashboard.js'></script>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
		</head>
		<body>";
}

// Legger til lik bunn på alle websider
function bunn() {
	echo "</body>
		</html>";
}



// Legger til Navigasjons-bar på dashboard sidene
function navBarDash() {
	echo "<div class='topnav'>
	    <a href='loggut.php'>Logg ut</a>
	    <a href='contact.php'>Kontakt</a>
	    <a href='about.php'>Om oss</a>
	</div>";
}







function menyDashboard($valgt, $tekst, $bruker) {
	echo "<section class='jumbotron text-center'>
		      <div class='container-fluid'>
		        <h1 class='jumbotron-heading'>Hei, $bruker!</h1>
		        <p class='lead text-muted'>Mitt navn er Sophia, din personlige veileder.</p>
		        <hr class='my-4'>
		        <p class='lead text-muted'>$tekst</p>
		        <p>
		          <a href='dashboard.php' class='";
		          if ($valgt == "dashboard")
		          	getPrimary();
		          else
		          	getSecondary();

		          echo "'>Dashboard</a>
		          <a href='treningsdagbok.php' class='";
		          if ($valgt == "treningsdagbok")
		          	getPrimary();
		          else
		          	getSecondary();

		          echo "'>Treningsdagbok</a>
		          <a href='preferanser.php' class='";
		          if ($valgt == "preferanser")
		          	getPrimary();
		          else
		          	getSecondary();

		          echo "'>Preferanser</a>
		          <a href='treningsplan.php' class='";
		          if ($valgt == "treningsplan")
		          	getPrimary();
		          else
		          	getSecondary();

		          echo "'>Treningsplan</a>
		          <a href='vektKalkulator.php' class='";
		          if ($valgt == "bmi")
		          	getPrimary();
		          else
		          	getSecondary();

		          echo "'>BMI/Kalori Kalkulator</a>
		        </p>
		      </div>
		    </section>";
}


function getPrimary() {
	echo "btn btn-primary";
}

function getSecondary() {
	echo "btn btn-secondary";
}






?>