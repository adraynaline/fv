<?php 

	function add_newsletter($mail){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO newsletter (mail) VALUES (:mail)');
		$query->bindValue(':mail', $mail, PDO::PARAM_STR);
		
		$query->execute();
	}
	function verif_mail_exist($mail){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM newsletter WHERE mail = :mail');
		$query->bindValue(':mail', $mail, PDO::PARAM_STR);
		$query->execute();
		$verif_mail_exist = $query->rowCount();
		return $verif_mail_exist;
	}