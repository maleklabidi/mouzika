<?php
include_once "../loginadmin/session.php";

?>
<?php
	include "../../controller/adminC.php";
	include_once '../../Model/admin.php';

	$adminC = new adminC();
	$error = "";
	
	if (
		isset($_POST["username"]) && 
       
        
        isset($_POST["password"]) 
        
        
	){
		if (
            !empty($_POST["username"]) && 
            
            
            !empty($_POST["password"]) 
           
           
        ) {
            $admins = new admin(
                $_POST['username'],
               
                
                $_POST['password']
                
                
			);
			
            $adminC->updateadmin($admins, $_GET['id']);
            header('refresh:5;url=showadmin.php');
        }
        else
            $error = "Missing information";
	}
    
    
?>
<?php
include_once "header.php";
?>


<html>
	<head>
        <style>
            a{
                text-decoration:none;
                color:black;
            }
        </style>
		<title>update admin</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$admins = $adminC->recupereradmin($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center" class="styled-table">
                <tr>
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $admins['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="username">Username:
						</label>
					</td>
					<td>
						<input type="text" name="username" id="username" maxlength="20" value = "<?php echo $admins['username']; ?>">
					</td>
				</tr>
                
                
               
               
                <tr>
					<td>
						<label for="password">password:
						</label>
					</td>
					<td>
						<input type="text" name="password" id="password"  value = "<?php echo $admins['password']; ?> "  >
					</td>
				</tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input class="filsa" type="submit" value="Update" name = "modifer"> 
                    </td>
                    <td>
                    <button class="filsa"><a  href="showadmin.php">Cancel</a></button>
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>

       <?php
       include_once "footer.php";
       ?>