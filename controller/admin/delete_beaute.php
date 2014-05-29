<?php 
	include_once('model/admin/beaute.php');
	if(isset($_POST['id'])){
		delete_beaute($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>