<?php
include_once "../loginadmin/session.php";
include '../../controller/ForumM.php';

$image="img/blog/general.png";

$var=new Forum($_POST['texte']);
$var2=new ForumManage();
$var2->ajouterquestion($var);	
?>  