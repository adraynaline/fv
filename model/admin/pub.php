<?php 
	function show_pub(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM Pub WHERE selected = :selected');
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		$query->execute();
		$pub = $query->fetch();	
		return $pub;
	}
	function other_pub(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM Pub WHERE selected = :selected');
		$query->bindValue(':selected', '0', PDO::PARAM_INT);
		$query->execute();
		$other_pub = $query->fetchAll();
		return $other_pub;
	}
	function add_pub($nom, $photo){

		global $connexion;
		$query = $connexion->prepare('INSERT INTO Pub (nom, image, selected) VALUES (:nom, :photo, :selected)');
		$query->bindValue(':nom', $nom, PDO::PARAM_STR);
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		
		$query->execute();
	}
	function pub_to_zero(){
		global $connexion;
		$query = $connexion->prepare('UPDATE Pub SET selected = :selected');
		$query->bindValue(':selected', '0', PDO::PARAM_INT);
		$query->execute();
	}
	function change_pub($id){
		global $connexion;
		$query = $connexion->prepare('UPDATE Pub SET selected = :selected WHERE id = :id');
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->execute();
	}
	

 ?>