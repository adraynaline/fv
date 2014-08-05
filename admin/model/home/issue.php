<?php 
	function show_issue(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM Issue WHERE selected = :selected');
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		$query->execute();
		$issue = $query->fetch();	
		return $issue;
	}
	function older_issue(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM Issue WHERE selected = :selected');
		$query->bindValue(':selected', '0', PDO::PARAM_INT);
		$query->execute();
		$older_issue = $query->fetchAll();
		return $older_issue;
	}
	function add_issue($nom, $photo){

		global $connexion;
		$query = $connexion->prepare('INSERT INTO Issue (nom, image, selected) VALUES (:nom, :photo, :selected)');
		$query->bindValue(':nom', $nom, PDO::PARAM_STR);
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		
		$query->execute();
	}
	function issue_to_zero(){
		global $connexion;
		$query = $connexion->prepare('UPDATE Issue SET selected = :selected');
		$query->bindValue(':selected', '0', PDO::PARAM_INT);
		$query->execute();
	}
	

 ?>