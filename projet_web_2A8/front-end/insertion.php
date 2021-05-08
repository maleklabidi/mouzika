<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');

$pdoStat = $objetPdo->prepare('INSERT INTO formulaire VALUES (NULL , :nom, :prenom, :birthdate, :gsm, :mail)');

$pdoStat->bindValue(':nom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['LastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':birthdate', $_POST['date'], PDO::PARAM_STR);
$pdoStat->bindValue(':gsm', $_POST['tel'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mel'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();

if($insertIsOk){

    $message = 'Le contact a été ajouté dans la base de donnée';
}

else{

    $message ='Echec de l\insertion';
}
 
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<h1>Insertion des formulaires</h1>

<p><?php echo $message ?></p>

</body>
</html>
