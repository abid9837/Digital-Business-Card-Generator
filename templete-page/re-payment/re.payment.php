<?php
session_start();
$link_number = $_GET['link'];
$_SESSION['link_number'] = $link_number;

header("Refresh:0; url='../make payment.php'");

?>