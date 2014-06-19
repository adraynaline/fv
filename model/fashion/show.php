<?php 
	function show_select_article($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE id = :id');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
		$selected = $query->fetch();
		return $selected;
	}
	function show_products($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM products WHERE img_id =:id');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
		$products = $query->fetchAll();
		return $products;
	}

 ?>