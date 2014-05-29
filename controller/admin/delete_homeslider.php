<?php 
	include_once('model/admin/homeslider.php');
	if(isset($_POST['id'])){
		delete_homeslider($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>