<?php 
	function show_forher(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE filter = :filter AND actif = :actif AND forh = :forh');
		$query->bindValue(':filter','beaute',PDO::PARAM_STR);
		$query->bindValue(':actif','1',PDO::PARAM_INT);
		$query->bindValue(':forh', 'her', PDO::PARAM_STR);
		$query->execute();
		$forher = $query->fetchAll();
		return $forher;
	}
	function show_forhim(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE filter = :filter AND actif = :actif AND forh = :forh');
		$query->bindValue(':filter','beaute',PDO::PARAM_STR);
		$query->bindValue(':actif','1',PDO::PARAM_INT);
		$query->bindValue(':forh', 'him', PDO::PARAM_STR);
		$query->execute();
		$forhim = $query->fetchAll();
		return $forhim;
	}
 ?>