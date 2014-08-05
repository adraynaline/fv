<?php 
	include_once('model/admin/product.php');
	if(isset($_POST['id'])){
		delete_product($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>