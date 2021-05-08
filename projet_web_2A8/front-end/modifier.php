<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');

$pdoStat = $objetPdo->prepare('UPDATE formulaire set nom=:nom, prenom=:prenom, birthdate=:birthdate, gsm=:gsm, mail=:mail WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numformulaire'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['LastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':birthdate', $_POST['date'], PDO::PARAM_STR);
$pdoStat->bindValue(':gsm', $_POST['tel'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mel'], PDO::PARAM_STR);


$insertIsOk = $pdoStat->execute();

if($insertIsOk){

    $message = 'Le formulaire a été mis à jour';
}

else{

    $message ='Echec de la mise à jour du formulaire';
}
 
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<h1>modification des formulaires</h1>

<p><?= $message ?></p>

</body>
</html>