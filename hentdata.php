<?php
session_start();
include_once "database.php";

$dato = "";

if (isset($_REQUEST['data'])) { 
  $dato = $_REQUEST['data']; 

  $alle = hentØvelser($dblink, $_SESSION['bnr'], $dato);

  echo "$alle";
} else { 
	echo "Treningsdagboken er tom for valgt dato";
}


//echo json_encode(array("treff"=>$alle)); 

?>