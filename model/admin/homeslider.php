<?php 
	function filtre_img(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images');
		//$query->bindValue(':type', $type, PDO::PARAM_STR);
		$query->execute();
		$filtre = $query->fetchAll();
		return $filtre;
	}
	function show_img_slider(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM homeslider A, images B where A.id_img = B.id ');
		$query->execute();
		$img_slider = $query->fetchAll();
		return $img_slider;
	}
	function add_home_slider($id_img){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO homeslider (id_img) VALUES (:id_img)');
		$query->bindValue(':id_img', $id_img, PDO::PARAM_STR);
		$query->execute();
	}
	function delete_homeslider($id){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM homeslider WHERE id_img = :id');
		$query->bindValue(':id', $id, PDO::PARAM_STR);
		$query->execute();
	}
 ?>

