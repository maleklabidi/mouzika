<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');

$pdoStat = $objetPdo->prepare('SELECT * FROM formulaire');

$executeIsOk = $pdoStat->execute();
$formulaires = $pdoStat->fetchAll()




?>

<script>
  window.addEventListener("load", window.print());
</script>

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
</body>
</html>