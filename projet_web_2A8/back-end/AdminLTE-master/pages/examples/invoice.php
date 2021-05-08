<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');

$pdoStat = $objetPdo->prepare('SELECT * FROM formulaire');

$executeIsOk = $pdoStat->execute();
$formulaires = $pdoStat->fetchAll()




?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
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

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
