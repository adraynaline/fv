<?php
	include_once('model/article/index.php');
	if(isset($_POST['photographer'])){
		add_complementary_info($_POST['id'],$_POST['photographer'],$_POST['stylist'],$_POST['makeup'],$_POST['hair'],$_POST['description']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>