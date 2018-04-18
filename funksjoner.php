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
	footer();
	echo "</body>
		</html>";
}


// Legger til footer
function footer() {
	echo "<footer>
			<p> © Sophia | Epost: support@sophia.no | Telefon: 54 45 32 23 </p>
		  </footer>";
}



// Legger til Navigasjons-bar på index.php
function navBar($valgt) {

	echo "<div class='topnav'><a href='index.php'";
	  if ($valgt == "index") {
	  	echo " class='active'";
	  }
	  echo ">Hjem</a><a href='contact.php'";
	  if ($valgt == "contact") {
	  	echo " class='active'";
	  }
	  echo ">Kontakt</a><a href='about.php'";
	  if ($valgt == "about") {
	  	echo " class='active'";
	  }
	  echo ">Om oss</a></div>";
}


// Legger til Navigasjons-bar på dashboard sidene
function navBarDash() {
	echo "<div class='topnav'>
	    <a href='loggut.php'>Logg ut</a>
	    <a href='contact.php'>Kontakt</a>
	    <a href='about.php'>Om oss</a>
	</div>";
}



// Lager menyen som finnes på brukerens dashboard-sider
function menyDashboard($valgt, $tekst, $bruker) {
	$primary = "btn btn-primary";
	$secondary = "btn btn-secondary";

	echo "<section class='jumbotron text-center'>
		      <div class='container-fluid'>
		        <h1 class='jumbotron-heading'>Hei, $bruker!</h1>
		        <p class='lead text-muted'>Mitt navn er Sophia, din personlige veileder.</p>
		        <hr class='my-4'>
		        <p class='lead text-muted'>$tekst</p>
		        <p>
		          <a href='dashboard.php' class='";
		          if ($valgt == "dashboard")
		          	echo "$primary";
		          else
		          	echo "$secondary";

		          echo "'>Dashboard</a>
		          <a href='treningsdagbok.php' class='";
		          if ($valgt == "treningsdagbok")
		          	echo "$primary";
		          else
		          	echo "$secondary";

		          echo "'>Treningsdagbok</a>
		          <a href='preferanser.php' class='";
		          if ($valgt == "preferanser")
		          	echo "$primary";
		          else
		          	echo "$secondary";

		          echo "'>Preferanser</a>
		          <a href='treningsplan.php' class='";
		          if ($valgt == "treningsplan")
		          	echo "$primary";
		          else
		          	echo "$secondary";

		          echo "'>Treningsplan</a>
		          <a href='vektKalkulator.php' class='";
		          if ($valgt == "bmi")
		          	echo "$primary";
		          else
		          	echo "$secondary";

		          echo "'>BMI/Kalori Kalkulator</a>
		        </p>
		      </div>
		    </section>";
}


?>