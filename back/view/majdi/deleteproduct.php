<?PHP
	include "../../controller/productC.php";

	$productC=new productC();
	
	if (isset($_POST["id"])){
		$productC->deleteproduct($_POST["id"]);
		header('Location:showproduct.php');
	}

?>