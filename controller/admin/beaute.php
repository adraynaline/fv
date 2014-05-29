<?php  
	define("PAGE_CSS" , "beaute");
	include_once('model/admin/beaute.php');
	
	include_once('view/layout/header.admin.php');
	$beaute0 = show_beaute_inactif();
	$beaute1 = show_beaute_actif();
	include_once('view/admin/beaute.php');
	include_once('view/layout/footer.admin.php');
?>
