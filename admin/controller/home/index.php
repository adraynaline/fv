<?php 
	if(!isset($_SESSION['login'])){
		'Connectez vous ';
	}
	else {
	include_once('model/home/home.php');
	
	include_once('view/layout/header.admin.php');
	
	include_once('view/home/home.php');
	include_once('view/layout/footer.admin.php');
}
 ?>