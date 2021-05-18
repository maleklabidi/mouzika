<?php
include_once "../loginadmin/session.php";
include_once "header.php";

?>
<h1>Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
<?php

include_once "footer.php";

?>
