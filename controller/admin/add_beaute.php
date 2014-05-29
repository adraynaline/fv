<?php
	include_once('model/admin/beaute.php');
	if(isset($_POST['title'])){
		add_beaute($_POST['title'],$_POST['description'],$_POST['link'],$_POST['photo'],$_POST['photo2']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>