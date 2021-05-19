<?php
	include_once '../model/promotion.php';
	include_once '../controller/promotionC.php';

	$error = "";
	$promotion = null;

	$promotionC = new promotionC();
	if (
		isset($_POST["id_artiste"]) &&
        isset($_POST["id_produit"]) && 
        isset($_POST["reduction"]) && 
        isset($_POST["duree"]) &&  
        isset($_POST["description"]) &&
        isset($_POST["image"])
	) {
		if (!empty($_POST["id_artiste"]) && 
            !empty($_POST["id_produit"]) &&
            !empty($_POST["reduction"]) &&
            !empty($_POST["duree"]) &&
            !empty($_POST["description"]) &&
            !empty($_POST["image"])
		) {
			$promotion = new promotion(
				$_POST['id_artiste'],
                $_POST['id_produit'],
                $_POST['reduction'],
                $_POST['duree'],
                $_POST['description'],
				$_POST['image'],
			);
			$promotionC->ajouterpromotion($promotion);
			header('Location:afficherpromotion.php');
		}
		else
			$error = "Missing information";
	}
 ?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajouter Promotion</title>
</head>
<body>

	<div id="error">
		<?php echo $error; ?>
	</div>
	
		<form action="" method="POST">
			<h1><b>Nouvelle Promotion</b></h1>
			<label for="id_artiste">id_artiste:</label><br>
			<input type="text" name="id_artiste" id="id_artiste" maxlength="50"><br>
			<label for="id_produit">id_produit:</label><br>
			<input type="text" name="id_produit" id="id_produit" maxlength="50"><br>
			<label for="reduction">Reduction:</label><br>
			<input type="float" name="reduction" id="reduction"  min="01.0" max="99.0" step="0.5"><br>
			<label for="duree">Duree:</label><br>
			<input type="date" name="duree" id="duree" maxlength="50"><br>
			<label for="description">desciption:</label><br>
			<input type="text" name="description" id="description" maxlength="50"><br>
			<label>Image:</label>
			<input type="file" name="image" id="image">
			<br><br>
			<tr> <td> <input type="submit" name="Confirmer" value="Confirmer"></td></tr>

		</form>
</body>
</html>

