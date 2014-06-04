<?php
	include_once('model/admin/img.php');
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