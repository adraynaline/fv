<?php  
	define("PAGE_CSS" , "beaute");
	include_once('model/article/index.php');
	$id = $_GET['id'];
	include_once('view/layout/header.admin.php');
	$show = show_id($id);
	include_once('view/article/update.php');
	include_once('view/layout/footer.admin.php');
?>
