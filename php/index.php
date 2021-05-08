<?php
$link=mysqli_connect("localhost","root","","2a8");
if(mysqli_connect_error())
{
    die("there was an error connecting to the database");
}
$query="SELECT * from utilisateur";
if($result=mysqli_query($link,$query)){
    $row=mysqli_fetch_array($result);
    echo "your name is ".$row[2]." ".$row[1]." and ur email is ".$row[3]." "."and ur age is ".$row[4]." "."and ur password is ".$row[5];
}
?>