<?php

include "../../../config.php";
	require_once "../../model/evenement.php"; 

	class evenementC {

		function ajouterevenement ($evenement) {
			$sql = "INSERT INTO evenement (nom, emplacement, capacite, date, artiste, image) VALUES (:nom, :emplacement, :capacite, :date, :artiste, :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'nom' => $evenement->getno(),
                    'emplacement' => $evenement->getemp(),
                    'capacite'     => $evenement->getcap(),
					'date'     => $evenement->getdate(),
                    'artiste'=> $evenement->getar(),
                    'image'     => $evenement->getima(),
				]);
			}
			catch(Exception $e) {
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherevenement () {
			$sql="SELECT * FROM evenement ";
			$db = config::getConnexion();
			try{
				$listeevenement  = $db->query($sql);
				return $listeevenement ;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function afficherevenement_nom () {
			$sql="SELECT * FROM evenement order by nom desc";
			$db = config::getConnexion();
			try{
				$listeevenement  = $db->query($sql);
				return $listeevenement ;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerevenement ($id_even) {
			$sql = "DELETE FROM evenement  WHERE id_even = :id_even";
			$db = config::getConnexion();
			$req = $db->prepare($sql);
			$req->bindValue(':id_even',$id_even);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}	
        function modifierevenement ($evenement ,$id_even){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare('UPDATE evenement  SET 
						id_even = :id_even,
						nom = :nom,
                        emplacement = :emplacement,
                        capacite = :capacite,
						date = :date,
                        artiste = :artiste,
                        image = :image
						
					WHERE id_even = :id_even'
				);

				$query->bindValue(':id_even',$id_even);
				$query->bindValue(':id_even',$evenement ->getida());
				$query->bindValue(':nom',$evenement ->getno());
                $query->bindValue(':emplacement',$evenement ->getred());
                $query->bindValue(':capacite',$evenement ->getdur());
				$query->bindValue(':date',$evenement ->getprod());
                $query->bindValue(':artiste',$evenement ->getdesc());
                $query->bindValue(':image',$evenement ->getima());
				$query->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


        function recupererevenement ($id_even){
			$sql="SELECT * from evenement  where id_even=$id_even";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$evenement =$query->fetch(PDO::FETCH_OBJ);
				return $evenement ;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}    
	}
 ?>