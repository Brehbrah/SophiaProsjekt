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

?>