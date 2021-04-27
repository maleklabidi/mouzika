<?php

	include "config.php";
	require_once "promotion.php";

	class promotionC {

		function ajouterpromotion($promotion) {
			$sql = "INSERT INTO promotion (id_artiste, id_produit, reduction, duree, description, image) VALUES (:id_artiste, :id_produit, :reduction, :duree, :description, :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'id_artiste' => $promotion->getida(),
					'id_produit' => $promotion->getprod(),
                    'reduction' => $promotion->getred(),
                    'duree'     => $promotion->getdur(),
                    'description'=> $promotion->getdesc(),
                    'image'     => $promotion->getima(),
				]);
			}
			catch(Exception $e) {
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherpromotion() {
			$sql="SELECT * FROM promotion";
			$db = config::getConnexion();
			try{
				$listepromotion = $db->query($sql);
				return $listepromotion;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerpromotion($id_promo) {
			$sql = "DELETE FROM promotion WHERE id_promo = :id_promo";
			$db = config::getConnexion();
			$req = $db->prepare($sql);
			$req->bindValue(':id_promo',$id_promo);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}	
        function modifierpromotion($promotion,$id_promo){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare('UPDATE promotion SET 
						id_artiste = :id_artiste,
						id_produit = :id_produit,
                        reduction = :reduction,
                        duree = :duree,
                        desciption = :desciption,
                        image = :image
						
					WHERE id_promo = :id_promo'
				);

				$query->bindValue(':id_promo',$id_promo);
				$query->bindValue(':id_artiste',$promotion->getida());
				$query->bindValue(':id_produit',$promotion->getprod());
                $query->bindValue(':reduction',$promotion->getred());
                $query->bindValue(':duree',$promotion->getdur());
                $query->bindValue(':description',$promotion->getdesc());
                $query->bindValue(':image',$promotion->getima());
				$query->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


        function recupererpromotion($id_promo){
			$sql="SELECT * from promotion where id_promo=$id_promo";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$promotion=$query->fetch(PDO::FETCH_OBJ);
				return $promotion;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}    
	}
 ?>