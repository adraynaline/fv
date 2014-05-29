<?php 
	function show_pub(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM Pub WHERE selected = :selected');
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		$query->execute();
		$pub = $query->fetch();	
		return $pub;
	}
	function show_issue(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM Issue WHERE selected = :selected');
		$query->bindValue(':selected', '1', PDO::PARAM_INT);
		$query->execute();
		$issue = $query->fetch();	
		return $issue;
	}
	function show_img_slider(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM homeslider A, images B where A.id_img = B.id ');
		$query->execute();
		$img_slider = $query->fetchAll();
		return $img_slider;
	}
 ?>