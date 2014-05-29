<?php
	include_once('model/admin/issue.php');
	if(isset($_POST['photo'])){
		issue_to_zero();
		add_issue($_POST['nom'],$_POST['photo']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>