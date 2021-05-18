<?php
	include '../../controller/albumsC.php'; 

	$A = new albumsC();

	if(isset($_POST["id"])){
		echo "2";
		$A->supprimeralbum($_POST["id"]);
		header('Location:http://localhost/mouzika_integ/back/view/Malek/albums_web.php');
	}
 ?>

