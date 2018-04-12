<?php
session_start();
include_once "database.php";

$dato = "";

if (isset($_REQUEST['data'])) { 
  $dato = $_REQUEST['data']; 

  $alle = hentTreninger($dblink, $_SESSION['bnr'], $dato);

  echo "$alle";
} else { 
	$alle = hentAlleTreninger($dblink, $_SESSION['bnr']);

  	echo "$alle";
}

?>