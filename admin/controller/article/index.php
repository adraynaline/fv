<?php  
	define("PAGE_CSS" , "beaute");
	include_once('model/article/index.php');
	
	include_once('view/layout/header.admin.php');
	$article0 = show_inactif();
	$article1 = show_actif();
	include_once('view/article/index.php');
	include_once('view/layout/footer.admin.php');
?>
