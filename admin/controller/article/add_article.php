<?php
	include_once('model/article/index.php');
	if(isset($_POST['photo'])){
		add_article($_POST['photo'],$_POST['photo2'],$_POST['title'],$_POST['description'],$_POST['forh'],$_POST['filter']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>