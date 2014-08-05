<?php
	include_once('model/article/img.php');
	if(isset($_POST['id'])){
		activate_img($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>