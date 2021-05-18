<?PHP
	include "../../controller/adminC.php";

	$adminC=new adminC();
	
	if (isset($_POST["id"])){
		$adminC->deleteadmin($_POST["id"]);
		header('Location:showadmin.php');
	}

?>