<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_POST["id"])){
		$utilisateurC->deleteUtilisateur($_POST["id"]);
		header('Location:showusers.php');
	}

?>