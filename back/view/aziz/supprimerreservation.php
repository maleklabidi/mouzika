<?PHP
	include "../../controller/reservationC.php";

	$artisteC=new reservationC();
	
	if (isset($_POST["id_reservation"])){
		$artisteC->supprimerreservation($_POST["id_reservation"]);
		header('Location:affichagereservation.php');
	}

?>