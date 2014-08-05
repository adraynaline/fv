<?php 
	include_once('model/article/index.php');
	if(isset($_POST['id'])){
		delete_article($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>