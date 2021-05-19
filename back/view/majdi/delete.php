<?php
include "../../controller/masterclassC.php";

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mouzika");
$id=$_GET["id"];
mysqli_query($link, "DELETE FROM cours WHERE id=$id" );
?>

<script type="text/javascript">
window.location="display_item.php";
</script>