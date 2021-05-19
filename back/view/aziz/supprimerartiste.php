<?PHP
	include "../../controller/artisteC.php";

	$artisteC=new artisteC();
	
	if (isset($_POST["id_artiste"])){
		$artisteC->supprimerartiste($_POST["id_artiste"]);
		header('Location:affichageartiste.php');
	}

?>