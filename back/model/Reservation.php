<?php
//include_once "../../../config.php";
class reservation
{
        private $id_reservation = null ;
        private $id_utilisateur = null ;
        private $id_artiste = null ;
        private $lieu = null ;
        private $date = null ;
        private $type = null ;

        function __construct(string $id_utilisateur,string $id_artiste, string $lieu,string $date,string $type)
        {
            $this->id_artiste=$id_artiste;
            $this->id_utilisateur=$id_utilisateur;
            //$this->id_reservation=$id_reservation;
            $this->lieu=$lieu;
            $this->date=$date;     
            $this->type=$type; 
         }
    public function gettype()
    {
        return $this->type;
    }  
    
    public function getidartiste()
    {
        return $this->id_artiste;
    }

    public function getidutilisateur()
    {
        return $this->id_utilisateur;
    }

    public function getidreservation()
    {
        return $this->id_reservation;
    }

    public function getlieu()
    {
        return $this->lieu;
    }

    public function getdate()
    {
        return $this->date;
    }

}
//   
/*                                            SETTERS ↓↓↓
public function setid_artiste ($id_artiste){
    $this->id_artiste = $id_artiste;
}

public function settype ($type){
    $this->type = $type;
}

public function setid_reservation ($id_reservation){
    $this->id_reservation = $id_reservation;
}

public function setid_utilisateur ($id_utilisateur){
    $this->id_utilisateur = $id_utilisateur;
}

public function setlieu ($lieu){
    $this->lieu = $lieu;
}

public function setdate ($date){
    $this->date = $date;
}

public function settype ($type){
    $this->type = $type;
} */

