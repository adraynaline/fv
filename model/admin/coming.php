<?php 
	function show_img_slider(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM homeslider A, images B where A.id_img = B.id ');
		$query->execute();
		$img_slider = $query->fetchAll();
		return $img_slider;
	}