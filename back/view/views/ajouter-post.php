<?php
include_once "../loginadmin/session.php";
include '../../controller/ForumM.php';


$var=new Forum($_POST['titre'],$_POST['categorie'],$_POST['msg'],"../../../front/view/img/blog/".$_POST['image'],$_POST['id_client']);
$var2=new ForumManage();
$var2->ajouterPost($var);	
?>   