<?php  
	define("PAGE_CSS" , "beauty");
	include_once('model/fashion/index.php');
	include_once('model/home/home.php');
	$issue = show_issue();
	$pub = show_pub();
	include_once('view/layout/header.home.php');
	$forher = show_forher();
	$forhim = show_forhim();
	include_once('view/fashion/index.php');
	include_once('view/layout/footer.home.php');
?>
