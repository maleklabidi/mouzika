<?php
	include '../Controller/albumsC.php'; 

	$A = new albumsC();

	if(isset($_POST["id"])){
		echo "2";
		$A->supprimeralbum($_POST["id"]);
		header('Location:albums_web.php');
	}
 ?>

