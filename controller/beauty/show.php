<?php  
	define("PAGE_CSS" , "beauty");
	include_once('model/beauty/show.php');
	include_once('model/home/home.php');
	$issue = show_issue();
	$pub = show_pub();
	include_once('view/layout/header.home.php');
	$id = $_GET['id'];
	$selected = show_select_article($id);
	$products = show_products($id);
	include_once('view/beauty/show.php');
	include_once('view/layout/footer.home.php');
?>
