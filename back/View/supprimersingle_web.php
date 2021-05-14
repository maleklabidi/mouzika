<?php
	include '../Controller/singlesC.php'; 

	$S = new singlesC();

	if(isset($_POST["id"])){
		echo "2";
		$S->supprimersingle($_POST["id"]);
		header('Location:singles_web.php');
	}
 ?>

