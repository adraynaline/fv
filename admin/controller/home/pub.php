<?php  
	define("PAGE_CSS" , "pub");
	include_once('model/home/pub.php');
	$pub = show_pub();
	$other_pub = other_pub();
	include_once('view/layout/header.admin.php');
	include_once('view/home/pub.php');
	include_once('view/layout/footer.admin.php');
?>