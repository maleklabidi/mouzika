<?php
include 'controller/ForumM.php';

$val2=new ForumManage();
$val2->supprimerComment($_GET['id'],$_GET['id_post']);
?>  