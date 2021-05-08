<?php
include_once "../config.php";
class Reservation
{
        private $id_reservation,$id_utilisateur,$id_artiste,$lieu,$date,$type;

        function __construct($id_utilisateur,$id_artiste,$lieu,$date,$type)
 {
        $this->id_artiste=$id_artiste;
        $this->id_utilisateur=$id_utilisateur;
        //$this->id_reservation=$id_reservation;
        $this->lieu=$lieu;
        $this->date=$date;     
        $this->type=$type; 
    }
    public function get_type()
    {
        return $this->type;
    }  
    
    public function get_id_artiste()
    {
        return $this->id_artiste;
    }

    public function get_id_utilisateur()
    {
        return $this->id_utilisateur;
    }

    public function get_id_reservation()
    {
        return $this->id_reservation;
    }

    public function get_lieu()
    {
        return $this->lieu;
    }

    public function get_date()
    {
        return $this->date;
    }

}
//                                               SETTERS ↓↓↓

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
}
}
