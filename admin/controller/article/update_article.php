<?php
	include_once('model/article/index.php');
	if(isset($_POST['id'])){
		update_article($_POST['id'],$_POST['title'],$_POST['description']);
		$reponse = 'ok';		
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>