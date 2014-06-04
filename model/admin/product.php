<?php 
	function add_product($id,$photo,$titre_pro,$desc_pro,$link_pro){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO products (img_id,photo,titre_pro,desc_pro,link_pro) VALUES (:id,:photo,:titre_pro,:desc_pro,:link_pro)');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->bindValue(':photo',$photo,PDO::PARAM_STR);
		$query->bindValue(':titre_pro',$titre_pro,PDO::PARAM_STR);
		$query->bindValue(':desc_pro',$desc_pro,PDO::PARAM_STR);
		$query->bindValue(':link_pro',$link_pro,PDO::PARAM_STR);
		$query->execute();
	}
	function show_products($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM products WHERE img_id = :id');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
		$products = $query->fetchAll();
		return $products;
	}
	function delete_product($id){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM products WHERE id = :id');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
	}
	
 ?>