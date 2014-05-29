<?php 
	function show_beaute_actif(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE filter = :beaute AND actif = :actif');
		$query->bindValue(':beaute', 'beaute', PDO::PARAM_INT);
		$query->bindValue(':actif', '1', PDO::PARAM_INT);
		$query->execute();
		$beaute1 = $query->fetchAll();
		return $beaute1;
	}
	function show_beaute_inactif(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE filter = :beaute AND actif = :actif');
		$query->bindValue(':beaute', 'beaute', PDO::PARAM_INT);
		$query->bindValue(':actif', '0', PDO::PARAM_INT);
		$query->execute();
		$beaute0 = $query->fetchAll();
		return $beaute0;
	}
	function add_beaute($title,$description,$link,$photo,$photo2){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO images (title, description, filter ,link, img, min_img) VALUES (:title,:description,:filter,:link,:photo,:photo2)');
		$query->bindValue(':title', $title, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->bindValue(':filter', 'beaute', PDO::PARAM_STR);
		$query->bindValue(':link', $link, PDO::PARAM_STR);
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':photo2', $photo2, PDO::PARAM_STR);
		$query->execute();
	}
	function show_beaute_id($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_STR);
		$query->execute();
		$show_beaute = $query->fetch();
		return $show_beaute;
	}
	function delete_beaute($id){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM images WHERE id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_STR);
		$query->execute();
	}
	function update_beaute($id, $title, $description){
		global $connexion;
		$query = $connexion->prepare('UPDATE images SET title = :title AND description = :description WHERE id = :id ');
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->bindValue(':title', $title, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->execute();
	}
 ?>