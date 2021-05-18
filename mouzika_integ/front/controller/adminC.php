<?PHP
	include "../../config.php";
	require_once '../../Model/Admin.php';

	class AdminC {
		
		function ajouterAdmin($admin){
			$sql="INSERT INTO admin (username, password) 
			VALUES (:username,:password)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'username' => $admin->getUsername(),
					
					'password' => $admin->getPassword()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherAdmins(){
			
			$sql="SELECT * FROM admin";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deleteAdmin($id){
			$sql="DELETE FROM admin WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage()); 
			}
		}
		function updateAdmin($admin, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE admin SET 
						username = :username, 
					
						password = :password
					WHERE id = :id'
				);
				$query->execute([
					'username' => $admin->getUsername(),
					
					'password' => $admin->getPassword(),
					'id' => $id
				]);
				//echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAdmin($id){
			$sql="SELECT * from admin where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$admins=$query->fetch();
				return $admins;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererAdmin1($id){
			$sql="SELECT * from admin where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$admins= $query->fetch(PDO::FETCH_OBJ);
				return $admins;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>