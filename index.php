<?php
//CLEAR THE CACHE SO UPLOADED IMAGES APPEAR CORRECTLY
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();

include('i.meta_tags.php');

$page="c.main.php"; //DEFAULT CONTENT TO SHOW
if($_GET['section']!="") {
$page = filter_var( $_GET['section'], FILTER_SANITIZE_STRING);
//$page=$_GET['section'];
}

include('i.header.php');

include($page);

include('i.footer.php');
?>