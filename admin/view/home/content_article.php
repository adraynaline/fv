<?php 
	function add_content_article($id, $textarea_content){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO content_article (id_article, textarea) VALUES (:id, :textarea)');
	}
 ?>