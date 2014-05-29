<?php
	include_once('model/admin/pub.php');
	if(isset($_POST['id'])){
		pub_to_zero();
		change_pub($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>