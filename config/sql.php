<?php

/*$dns = 'mysql:host=mysql.hostinger.fr;dbname=u522898398_fv';
$utilisateur = 'u522898398_jr';
$mdp = 'm4ndr4k3';*/
$dns = 'mysql:host=localhost;dbname=fv';
$utilisateur = 'root';
$mdp = 'root';

$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	$connexion = new PDO ($dns, $utilisateur, $mdp, $options);
?>

