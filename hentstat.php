<?php
session_start();
include_once "database.php";

$stat = hentStatistikk($dblink, $_SESSION['bnr']);
echo "$stat";

?>