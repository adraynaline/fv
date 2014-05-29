<?php
	include_once('model/admin/pub.php');
	if(isset($_POST['photo'])){
		pub_to_zero();
		add_pub($_POST['nom'],$_POST['photo']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>