<?php
	include_once('model/admin/content_article.php');
	if(isset($_POST['textarea_content'])){
		add_content_article($_POST['id_article'],$_POST['textarea_content']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>