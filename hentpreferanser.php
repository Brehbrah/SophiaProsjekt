<?php
session_start();
include_once "database.php";

$svar = hentPreferanser($dblink, $_SESSION['bnr']);
echo "$svar";

?>