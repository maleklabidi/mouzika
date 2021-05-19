<?php
include "../../../config.php";
require_once "../../model/Reservation.php";

class reservationC
{
    function ajouterreservation($reservation){
        
        $sql="INSERT INTO reservation (id_utilisateur, id_artiste, lieu, date, type) VALUES (:id_utilisateur, :id_artiste, :lieu, :date, :type)";
        $db = config::getConnexion();
        try
        {   $query = $db->prepare($sql);
           
            $query->execute([
                'id_utilisateur'=> $reservation->getidutilisateur(),
                'id_artiste'=> $reservation->getidartiste(),
                'lieu'=> $reservation->getlieu(),
                'date'=> $reservation->getdate(),
                'type'=> $reservation->gettype(),
                ]);		
        }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }			
        }

public function afficherreservation(){
			
    $sql="SELECT * FROM reservation";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
public function supprimerreservation($id){
    $sql="DELETE FROM reservation WHERE id_reservation= :id";
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
public function modifierreservation($reservation,$id_reservation){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE reservation SET 
                id_utilisateur = :id_utilisateur,
                id_artiste = :id_artiste,
                lieu = :lieu,
                date = :date,
                type = :type
        WHERE id_reservation = :id_reservation'
        );
            $query->bindvalue(':id_reservation',$id_reservation);
            $query->bindvalue(':id_utilisateur',$reservation->getidutilisateur());
            $query->bindvalue(':typea',$reservation->getidartiste());
            $query->bindvalue(':mdp',$reservation->getlieu());
            $query->bindvalue(':descr',$reservation->getdate());
            $query->bindvalue(':img',$reservation->gettype());

        $query->execute();
       
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

public function recupererreservation($id){
    $sql="SELECT * from reservation where id_reservation=:id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->bindvalue(':id',$id);
        $query->execute();

        $reservation=$query->fetch(PDO::FETCH_OBJ);
        return $reservation;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


}