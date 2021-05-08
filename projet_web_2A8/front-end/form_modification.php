<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');
$pdoStat = $objetPdo->prepare('SELECT * FROM formulaire WHERE id = :num');
$pdoStat->bindValue(':num', $_GET['numformulaire'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();

$formulaire = $pdoStat->fetch();

?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<h1>liste des formulaires</h1>

<div><br><br><br>
				
				<form method="POST" action="modifier.php">
					<h3 class="text-heading">modification du formulaire </h3>

<input type="hidden " name="numformulaire" value="<?= $formulaire['id'] ?>">

<p> 

<label for="nom">Nom</label>
<input id="nom" type="text" name="firstName" value="<?= $formulaire['nom'];?>">


</p>

<p>

	<label for="prenom">Prenom</label>
	<input type="text" id="prenom" name="LastName"value="<?= $formulaire['prenom'];?>">

</p>
<p>
    <label for="date">date de naissance</label>
	<input type="text" id="birthdate" name="date"value="<?= $formulaire['birthdate'];?>">

</p>


<p>
    <label for="gsm">Numéro de téléphone</label>
	<input type="text" id="gsm" name="tel"value="<?= $formulaire['gsm'];?>">

</p>
<p>

    <label for="mel">veuillez indiquer votre adresse mail</label>
	<input type="email" id="mail" name="mel"value="<?= $formulaire['mail'];?>" placeholder="aa@aa.aa" required><br><br>

</p>


<p><input type="submit" value="Enregistrer les modifications"></p>

</form>
 
</body>
</html>