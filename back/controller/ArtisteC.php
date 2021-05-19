<?php
include "../../../config.php";
require_once "../../model/Artiste.php";

class artisteC
{
    function ajouterartiste($artiste){
        
        $sql="INSERT INTO artiste (nomprenom, typea, mdp, descr, img, birth, prix, adresse, mail) VALUES (:nomprenom, :typea, :mdp, :descr, :img, :birth, :prix, :adresse, :mail)";
        $db = config::getConnexion();
        try
        {   $query = $db->prepare($sql);
           
            $query->execute([
                'nomprenom'=> $artiste->getnomprenom(),
                'typea'=> $artiste->gettypea(),
                'mdp'=> $artiste->getmdp(),
                'descr'=> $artiste->getdescr(),
                'img'=> $artiste->getimg(),
                'birth'=> $artiste->getbirth(),
                'prix'=> $artiste->getprix(),
                'adresse'=> $artiste->getadresse(),
                'mail'=> $artiste->getmail(),
                ]);		
        }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }			
        }

public function afficherartiste(){
			
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
public function supprimerartiste($id){
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
public function modifierartiste($artiste, $id_artiste){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE artiste SET 
                nomprenom = :nomprenom,
                typea = :typea,
                mdp = :mdp,
                descr = :descr,
                img = :img,
                birth = :birth,
                prix = :prix,
                adresse = :adresse,
                mail = :mail,
        WHERE id_artiste = :id_artiste'
        );
            $query->bindvalue(':id_artiste',$id_artiste);
            $query->bindvalue(':nomprenom',$artiste->getnomprenom());
            $query->bindvalue(':typea',$artiste->gettypea());
            $query->bindvalue(':mdp',$artiste->getmdp());
            $query->bindvalue(':descr',$artiste->getdescr());
            $query->bindvalue(':img',$artiste->getimg());
            $query->bindvalue(':birth',$artiste->getbirth());
            $query->bindvalue(':prix',$artiste->getprix());
            $query->bindvalue(':adresse',$artiste->getadresse());
            $query->bindvalue(':mail',$artiste->getmail());
        $query->execute();
       
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

public function recupererartiste($id){
    $sql="SELECT * from artiste where id_artiste=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $artiste=$query->fetch(PDO::FETCH_OBJ);
        return $artiste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


}
/* 'nomprenom' => $artiste->getnomprenom(),
        'typea' => $artiste->gettypea(),
        'mdp' => $artiste->getmdp(),
        'descr' => $artiste->getdescr(),
        'img' => $artiste->getimg(),
        'birth' => $artiste->getbirth(),
        'prix' => $artiste->getprix(),
        'adresse' => $artiste->getadresse(),
        'mail' => $artiste->getmail(),
        'id_artiste' => $id_artiste
        ]);*/