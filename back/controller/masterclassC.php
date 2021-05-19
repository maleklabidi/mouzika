<?PHP
	include "../../config.php";
	require_once '../../model/cours.php';

	class masterclassC {
		
		function ajoutercours($cours){
			$sql="INSERT INTO cours (nom_cours,type_cours,prix_cours,description_cours,photo_cours) 
			VALUES (:nom_cours,:type_cours,:prix_cours,:description_cours,:photo_cours)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_cours' => $cours->getnomcours(),
					'type_cours' => $product->gettypecours(),
					'prix_cours' => $product->getprixcours(),
                    'description_cours' => $product->getdescours(),
                    'photo_cours' => $product->getphotocours(),
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercours(){
			
			$sql="SELECT * FROM cours";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deletecours($id){
			$sql="DELETE FROM cours WHERE id= :id";
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
		function updateproduct($cours, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE cours SET 
						nom_cours = :nom_cours, 
						type_cours = :type_cours,
                        prix_cours = :prix_cours,
                        descritpion_cours = :descritpion_cours,
                        photo_cours = :photo_cours,
                    
                        
						
					WHERE id = :id'
				);
                $query->execute([
					'nom_cours' => $cours->getnomcours(),
					'type_cours' => $product->gettypecours(),
					'prix_cours' => $product->getprixcours(),
                    'description_cours' => $product->getdescours(),
                    'photo_cours' => $product->getphotocours(),
					'id' => $id
				]);
				//echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercours($id){
			$sql="SELECT * from cours where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$products=$query->fetch();
				return $cours;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recuperercours1($id){
			$sql="SELECT * from cours where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$products = $query->fetch(PDO::FETCH_OBJ);
				return $cours;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>