<?php
include_once "../loginadmin/session.php";

?>
<?php
	include "../../controller/UtilisateurC.php";
	include_once '../../Model/Utilisateur.php';

	$utilisateurC = new UtilisateurC();
	$error = "";
	
	if (
		isset($_POST["username"]) && 
       
        isset($_POST["email"]) &&
        isset($_POST["password"]) 
        
        
	){
		if (
            !empty($_POST["username"]) && 
            
            !empty($_POST["email"]) &&
            !empty($_POST["password"]) 
           
           
        ) {
            $user = new Utilisateur(
                $_POST['username'],
               
                $_POST['email'],
                $_POST['password'],
                
                
			);
			
            $utilisateurC->updateUtilisateur($user, $_GET['id']);
            header('refresh:5;url=showusers.php');
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
		<title>update Utilisateur</title>
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
				$user = $utilisateurC->recupererUtilisateur($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center" class="styled-table">
                <tr>
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="username">Username:
						</label>
					</td>
					<td>
						<input type="text" name="username" id="username" maxlength="20" value = "<?php echo $user['username']; ?>">
					</td>
				</tr>
                
                
                <tr>
                    <td>
                        <label for="email">Email :
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user['email']; ?>">
                    </td>
                </tr>
               
                <tr>
					<td>
						<label for="password">password:
						</label>
					</td>
					<td>
						<input type="password" name="password" id="password"  value = "<?php echo $user['password']; ?> " >
					</td>
				</tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input class="filsa" type="submit" value="Update" name = "modifer"> 
                    </td>
                    <td>
                    <button class="filsa"><a  href="showusers.php">Cancel</a></button>
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