<?php
	include_once('model/admin/beaute.php');
	if(isset($_POST['id'])){
		update_beaute($_POST['id'],$_POST['title'],$_POST['description']);
		$reponse = 'ok';
		
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>