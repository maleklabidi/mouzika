<?php
	include "../controller/promotionC.php";

	$P = new promotionC();

	if(isset($_POST["id_promo"])){
		echo "2";
		$P->supprimerpromotion($_POST["id_promo"]);
		header('Location:afficherpromotion.php');
	}
 ?>









 