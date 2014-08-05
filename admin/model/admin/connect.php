<?php 

function connect_user($login, $password){
	
	try{	
		global $connexion;
		
		$password =  md5($password);

		$sql = $connexion->prepare("SELECT * FROM admin WHERE login = :login AND password = :password ");
		
		$sql->bindParam(':login', $login, PDO::PARAM_STR);
		$sql->bindParam(':password', $password, PDO::PARAM_STR);
		
					
		$sql->execute();
		$verif = $sql->rowCount();
		$rows = $sql->fetchAll();

		
		
		foreach($rows as $row) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['password'] = $row['password'];
			
		}
		
		
	}

	catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
}
?>