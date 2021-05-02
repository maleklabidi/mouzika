<?php
include '../controller/ForumM.php';


$var=new Commentaire($_POST['comment']);
$var2=new ForumManage();
$var2->ajouterCommentaire($var,$_POST['id_client'],$_POST['id_post'],$_POST['nom']);
?>