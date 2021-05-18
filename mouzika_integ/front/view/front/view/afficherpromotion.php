<?PHP
include "../controller/promotionC.php";

	$promotionC=new promotionC();
	$listepromotion=$promotionC->afficherpromotion(); 

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste promotion </title>
    </head>
    <body>
		<a href="ajouterpromotion.php">Ajouter une promotion</a>
		<hr> <table border="1">
			
			<?PHP
				foreach($listepromotion as $promotion){
			?>
				<tr>
					 <td><?PHP echo $promotion['id_promo']; ?></td>
					<td><?PHP echo $promotion['id_artiste']; ?></td>
					<td><?PHP echo $promotion['id_produit']; ?></td>
					<td><?PHP echo $promotion['reduction']; ?></td>
                    <td><?PHP echo $promotion['duree']; ?></td>
                    <td><?PHP echo $promotion['description']; ?></td>
                    <td><?PHP echo $promotion['image']; ?></td>
				
			      
					<td>
						<form method="POST" action="supprimerpromotion.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $promotion['id_promo']; ?> name="id_promo">
						</form>
					</td>
					<td>
						<a href="modifierpromotion.php?id_promo=<?PHP echo $promotion['id_promo']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>


	</body>
	</html>