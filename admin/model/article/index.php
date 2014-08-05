<?php 
	function show_actif(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE actif = :actif');
		//$query->bindValue(':beaute', 'beaute', PDO::PARAM_INT);
		$query->bindValue(':actif', '1', PDO::PARAM_INT);
		$query->execute();
		$article1 = $query->fetchAll();
		return $article1;
	}
	function show_inactif(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE actif = :actif');
		//$query->bindValue(':beaute', 'beaute', PDO::PARAM_INT);
		$query->bindValue(':actif', '0', PDO::PARAM_INT);
		$query->execute();
		$article0 = $query->fetchAll();
		return $article0;
	}
	function add_article($photo,$photo2,$title,$description,$forh,$filter){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO images (img, min_img,title, description,forh,filter) VALUES (:photo,:photo2,:title,:description,:forh,:filter)');
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':photo2', $photo2, PDO::PARAM_STR);
		$query->bindValue(':title', $title, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->bindValue(':forh', $forh, PDO::PARAM_STR);
		$query->bindValue(':filter', $filter, PDO::PARAM_STR);
		//$query->bindValue(':link', $link, PDO::PARAM_STR);
		
		$query->execute();
	}
	function show_id($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_STR);
		$query->execute();
		$show_article = $query->fetch();
		return $show_article;
	}
	function delete_article($id){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM images WHERE id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_STR);
		$query->execute();
	}
	function update_article($id, $title, $description){
		global $connexion;
		$query = $connexion->prepare('UPDATE images SET title = :title AND description = :description WHERE id = :id ');
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->bindValue(':title', $title, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->execute();
	}
	function update_com_info($id, $photographer, $stylist,$makeup,$hair,$description){
		global $connexion;
		$query = $connexion->prepare('UPDATE complementary_info SET photographer = :photographer AND stylist = :stylist AND makeup = :makeup AND hair = :hair AND description = :description WHERE id = :id ');
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->bindValue(':photographer',  $photographer, PDO::PARAM_STR);
		$query->bindValue(':stylist', $stylist, PDO::PARAM_STR);
		$query->bindValue(':makeup', $makeup, PDO::PARAM_STR);
		$query->bindValue(':hair', $hair, PDO::PARAM_STR);
		$query->bindValue(':description',$description,PDO::PARAM_STR);
		$query->execute();
	}
	function add_complementary_info($id,$photographer, $stylist, $makeup, $hair, $description){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO complementary_info (id_article,photographer, stylist, makeup, hair, description) VALUES (:id,:photographer,:stylist,:makeup,:hair,:description)');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->bindValue(':photographer',$photographer,PDO::PARAM_STR);
		$query->bindValue(':stylist',$stylist,PDO::PARAM_STR);
		$query->bindValue(':makeup',$makeup,PDO::PARAM_STR);
		$query->bindValue(':hair',$hair,PDO::PARAM_STR);
		$query->bindValue(':description',$description,PDO::PARAM_STR);
		$query->execute();
	}
	function if_com_info_true($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM complementary_info WHERE id_article = :id');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
		$test = $query->fetchAll();
		
		return $test;
	}
	function show_info_com($id){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM complementary_info WHERE id_article = :id');
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
		$infocom = $query->fetch();
		
		return $infocom;
	}
 ?>