<?php
    include '../model/promotion.php';
    include '../controller/promotionC.php';

	$pp = new promotionC();
	$error = "";

	if (
		isset($_POST["id_artiste"]) &&
        isset($_POST["id_produit"]) && 
        isset($_POST["reduction"]) && 
        isset($_POST["duree"]) &&  
        isset($_POST["description"]) &&
        isset($_POST["image"])
	) {
        if (
            !empty($_POST["id_artiste"]) && 
            !empty($_POST["id_produit"]) &&
            !empty($_POST["reduction"]) &&
            !empty($_POST["duree"]) &&
            !empty($_POST["description"]) &&
            !empty($_POST["image"])
		) {
			$p = new promotion(
				$_POST['id_artiste'],
                $_POST['id_produit'],
                $_POST['reduction'],
                $_POST['duree'],
                $_POST['description'],
				$_POST['image']);
            $pp->modifierpromotion($p,$_GET["id_promo"]); 
            //header('Location:afficherpromotion.php');
        }
        else
       
            $error = "Missing information";
    }


?>
<html>
	<head>
		<title>Modifier promotion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherpromotion.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_promo'])){
                $p = $pp->recupererpromotion($_GET['id_promo']);
				
		?>
		<form  method="POST" action="">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>promotion</td>
                    <td>
                        <label for="id_artiste">id_artiste:
                        </label>
                    </td>
                    <td><input type="text" name="id_artiste" id="id_artiste"  value = "<?php echo $p->id_artiste; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_produit">id_produit:
                        </label>
                    </td>
                    <td><input type="text" name="id_produit" id="id_produit"  value = "<?php echo $p->id_produit; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="reduction">reduction:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="reduction" id="reduction"  value = "<?php echo $p->reduction; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="duree">duree:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="duree" id="duree" value="<?php echo $p->duree;?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input  name="description" id="description" rows="5" cols="33" value="<?php echo $p->description;?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">image:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="image" id="image" value="<?php echo $p->image;?>" >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer" onclick="alert('modification termine')"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>