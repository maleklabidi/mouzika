<?php
include 'controller/ForumM.php';

$image="img/blog/general.png";

$var=new Forum($_POST['titre'],$_POST['categorie'],$_POST['msg'],$image,$_POST['id_client']);
$var2=new ForumManage();
$var2->ajouterPost($var);	
?> 