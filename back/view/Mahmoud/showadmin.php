<?php
include_once "../loginadmin/session.php";
include_once "header.php";

?>

          <?PHP
	include "../../controller/adminC.php";

	$adminC=new adminC();
	$listeadmin=$adminC->afficheradmins();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des admins </title>
    </head>
    <body>
    
		<hr>
		<table class="styled-table">
            <thead>
			<tr class="active-row">
				<th>Id</th>
				<th>Username</th>
				
				
			</tr>
            </thead>
            <tbody>
			<?PHP
				foreach($listeadmin as $admins){
			?>
				<tr>
					<td><?PHP echo $admins['id']; ?></td>
					<td><?PHP echo $admins['username']; ?></td>
					
					<tr>
					<td>
						<form method="POST" action="deleteadmin.php">
						<input class="filsa" type="submit" name="delete" value="Delete">
						<input type="hidden" value=<?PHP echo $admins['id']; ?> name="id">
						</form>
					</td>
					
					<td>
						<a href="updateadmin.php?id=<?PHP echo $admins['id']; ?>"> Update </a>
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