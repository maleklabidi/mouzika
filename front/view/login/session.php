<?php
// Initialize the session
session_start();
 
// Check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $_SESSION["username"]="user";
    ?>
 <h2 style="color:white">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></21>
 <a href="http://localhost/mouzika_integ/front/view/login/login.php"><h2 style="color:white" align="right"> Login</h2></a>
 

    <?php
    
    
    
}
else{
   
   
   
?>

<h2 style="color:white">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></21>
 <a href="http://localhost/mouzika_integ/front/view/login/logout.php"><h2 style="color:white" align="right"> Logout</h2></a>
 <?php
}

?>
