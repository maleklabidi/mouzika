<?php
include_once "../loginadmin/session.php";
include_once "header.php";

?>

          <?PHP
	include "../../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Utilisateurs </title>
    </head>
    <body>
    
		<hr>
		<table class="styled-table">
            <thead>
			<tr class="active-row">
				<th>Id</th>
				<th>Username</th>
				<th>Email</th>
				
			</tr>
            </thead>
            <tbody>
			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['username']; ?></td>
					<td><?PHP echo $user['email']; ?></td>
					<tr>
					<td>
						<form method="POST" action="deleteusers.php">
						<input class="filsa" type="submit" name="delete" value="Delete">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					
					<td>
						<a href="updateusers.php?id=<?PHP echo $user['id']; ?>"> Update </a>
					</td>
					</tr>
				</tr>
                </tbody>
			<?PHP
            
				}
			?>
		</table>
	</body>
</html>

<?php

include_once "footer.php";

?>