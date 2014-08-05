<?php
	include_once('model/article/index.php');
	if(isset($_POST['id'])){
		desactivate_img($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>