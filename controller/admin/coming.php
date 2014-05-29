<?php  
	define("PAGE_CSS" , "comingsoon");
	include_once('model/admin/coming.php');
	
	$img_slider = show_img_slider();
	include_once('view/admin/coming.php');
	include_once('view/layout/footer.admin.php');
?>