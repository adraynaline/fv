<?php

if (isset($_POST['login']) && isset($_POST['password'])){

	include_once('model/admin/connect.php');
	$verif = connect_user($_POST['login'] , $_POST['password']);
	
	//include_once('view/home/content_accueil.php');
	//echo $verif;

	if($verif !== 0){
		include_once('model/home/home.php');
	
	include_once('view/layout/header.admin.php');
	
	include_once('view/home/home.php');
	include_once('view/layout/footer.admin.php');

	}
	else {
		echo 'erreur';
	
	}

}
 


?>