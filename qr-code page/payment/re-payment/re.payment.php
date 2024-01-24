<?php
session_start();
$link_number = $_GET['qr_link'];
// $_SESSION['link_number'] = $link_number;

header("Refresh:0; url='../make payment.php?qr_link=$link_number'");

?>