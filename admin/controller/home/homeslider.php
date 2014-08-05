<?php  
	define("PAGE_CSS" , "homeslider");
	include_once('model/home/homeslider.php');
	//$id = $_GET['id'];
	if(isset($_POST['id_img'])){
		add_home_slider($_POST['id_img']);
			
	}
	$img_slider = show_img_slider();
	$filtre = filtre_img();
	include_once('view/layout/header.admin.php');
	include_once('view/home/homeslider.php');
	include_once('view/layout/footer.admin.php');
?>
