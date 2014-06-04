<?php 
	include_once('model/admin/product.php');
	if(isset($_POST['id'])){
		add_product($_POST['id'],$_POST['photo'],$_POST['titre_pro'],$_POST['desc_pro'],$_POST['link_pro']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>