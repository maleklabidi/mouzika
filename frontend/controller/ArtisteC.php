<?php
include "../config.php";
require_once '../model/Artiste.php';
class ArtisteC
{
    function ajouterartiste($artiste){
$sql="INSERT INTO artiste (nomprenom, type, mdp, descr, img, birth, prix, adresse, mail)
VALUES (:nomprenom, :type, :mdp, :descr, :img, :birth, :prix, :adresse, :mail)";
$db = config::getConnexion();
try{
    $query = $db->prepare($sql);
    $query->execute([
        'nomprenom' => $artiste->getnomprenom(),
        'type' => $Utilisateur->gettype(),
        'mdp' => $Utilisateur->getmdp(),
        'descr' => $Utilisateur->getdescr(),
        'img' => $Utilisateur->getimg(),
        'birth' => $Utilisateur->getbirth(),
        'prix' => $Utilisateur->getprix(),
        'adresse' => $Utilisateur->getadresse(),
        'mail' => $Utilisateur->getmail()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}

function afficherartiste(){
			
    $sql="SELECT * FROM artiste";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function supprimerartiste($id){
    $sql="DELETE FROM artiste WHERE id_artiste= :id";
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
function modifierartiste($artiste, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE artiste SET 
                nom = :nom, 
                prenom = :prenom,
                email = :email,
                login = :login,
                password = :password
            WHERE id_artiste = :id'
        );
        $query->execute([
            'nom' => $Utilisateur->getNom(),
            'prenom' => $Utilisateur->getPrenom(),
            'email' => $Utilisateur->getEmail(),
            'login' => $Utilisateur->getLogin(),
            'password' => $Utilisateur->getPassword(),
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}




