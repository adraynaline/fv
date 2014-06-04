<?php
	include_once('model/admin/beaute.php');
	if(isset($_POST['photo'])){
		add_beaute($_POST['photo'],$_POST['photo2'],$_POST['title'],$_POST['description'],$_POST['forh']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>