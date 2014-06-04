<?php 
	function activate_img($id){
		global $connexion;
		$query = $connexion->prepare('UPDATE images SET actif = :actif WHERE id = :id');
		$query->bindValue(':actif', '1', PDO::PARAM_INT);
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
	}
	function desactivate_img($id){
		global $connexion;
		$query = $connexion->prepare('UPDATE images SET actif = :actif WHERE id = :id');
		$query->bindValue(':actif', '0', PDO::PARAM_INT);
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();
	}
 ?>