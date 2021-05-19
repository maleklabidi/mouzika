<?php
include_once "../loginadmin/session.php";
	include '../../controller/singlesC.php'; 

	$S = new singlesC();

	if(isset($_POST["id"])){
		echo "2";
		$S->supprimersingle($_POST["id"]);
		header('Location:http://localhost/mouzika_integ/back/view/Malek/singles_web.php');
	}
 ?>

