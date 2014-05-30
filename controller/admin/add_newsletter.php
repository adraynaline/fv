<?php
	include_once('model/admin/coming.php');
	if(isset($_POST['mail'])){
		$verif_mail_exist = verif_mail_exist($_POST['mail']);

		if($verif_mail_exist == 0){
		add_newsletter($_POST['mail']);
		$reponse = 'ok';
		}
		else {
			$reponse = 'serie existe deja';
		}	
}
$array['reponse'] = $reponse;
		echo json_encode($array);