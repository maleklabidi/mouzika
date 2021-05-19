<?php
// Initialize the session
session_start();
 
// Check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== false){
    
    ?>
 <h1 style="color:white">Welcome User</h2>
 <a href="login/login.php"><h2 style="color:white" align="right"> Login</h2></a>
 

    <?php
    
    
    
}
else{
   
   

?>
<?php
?>
 <h1 style="color:white">Welcome User</h2>
 <?php
}

?>
