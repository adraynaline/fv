<?php  
	define("PAGE_CSS" , "beaute");
	include_once('model/admin/beaute.php');
	$id = $_GET['id'];
	include_once('view/layout/header.admin.php');
	$show_beaute = show_beaute_id($id);
	include_once('view/admin/updatebeaute.php');
	include_once('view/layout/footer.admin.php');
?>
