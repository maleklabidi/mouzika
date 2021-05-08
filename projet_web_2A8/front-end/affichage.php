<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');

$pdoStat = $objetPdo->prepare('SELECT * FROM formulaire');

$executeIsOk = $pdoStat->execute();
$formulaires = $pdoStat->fetchAll()




?>


<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<h1>liste des formulaires</h1>

<ul>
    <?php foreach ($formulaires as $formulaire): ?>
        <li>
            <?= $formulaire['nom'] ?> <?= $formulaire['prenom'] ?> - <?= $formulaire['birthdate'] ?> - <?= $formulaire['gsm']?> - <?=$formulaire['mail'] ?>
           <a href="supprimer.php?numformulaire=<?=$formulaire['id']?>">Supprimer</a>
           <a href="form_modification.php?numformulaire=<?=$formulaire['id']?>">Modifier</a>
    </li>
<?php endforeach; ?>
    </ul>   

    <div class="row no-print">
<div class="row no-print">
                <div class="col-12">
                  <a href="affichage-print.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  
                  
                </div>
</body>
</html>