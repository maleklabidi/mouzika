<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=masterclass','root','');

$pdoStat = $objetPdo->prepare('DELETE FROM formulaire WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numformulaire'], PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

if($executeIsOk){

$message ='le formulaire a été supprimé';


}
else{
    $message ='echec de la suppression';

}
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<h1>suppression</h1>

<p><?= $message ?></p>

</body>
</html>
