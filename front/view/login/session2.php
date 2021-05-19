<?php
// Initialize the session
session_start();
 
// Check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== false){
    
    
    ?>
 <h2 style="color:white">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></21>
 <a href="login/logout.php"><h2 style="color:white" align="right"> LogOut</h2></a>
 

    <?php
    
    
    
}
else{
   
    header("location: ..\loginadmin\login.php");


}

?>
