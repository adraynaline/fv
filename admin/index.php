
<?php 
	session_start();
	include_once('../config/sql.php');
	//Appel du controleur du modele demandé
	if (!isset($_GET['appli']))
	{
		$appli = 'admin';
	}
	else 
	{
		$appli = $_GET['appli'];
	}
	if (!isset($_GET['action']))
	{
		$action= 'index';
	}
	else {
		$action = $_GET['action'];
	}

	$url = 'controller/'.$appli.'/'.$action.'.php';

	// Dispatching vers controleur/action ou bien redirection 404
	if (file_exists($url)) {
		include_once($url);
	}
	else {
		echo 'erreur durl';
	}