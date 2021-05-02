<?php
include 'controller/ForumM.php';



$var2=new ForumManage();
$var2->supprimerPost($_GET['id']);
?>