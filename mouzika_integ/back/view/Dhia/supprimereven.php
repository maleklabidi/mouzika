<?php
include_once "../loginadmin/session.php";
	include '../../controller/evenementC.php'; 

	$P = new evenementC();

	if(isset($_POST["id_even"])){
		echo "2";
		$P->supprimerevenement($_POST["id_even"]);
		header('Location:affichereven.php');
	}
 ?>









 