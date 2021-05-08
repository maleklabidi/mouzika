<?php
include "../config.php";
class Artiste
{

    private $id_artiste,$nomprenom,$type,$mdp,$descr,$img,$birth,$prix,$adresse,$mail;
    function __construct($nomprenom,$type,$mdp,$descr,$img,$birth,$prix,$adresse,$mail)
    {
        //$this->$id_artiste=$id_artiste;
        $this->$nomprenom=$nomprenom;
        $this->$type=$type;
        $this->$mdp=$mdp;
        $this->$descr=$descr;
        $this->$img=$img;
        $this->$birth=$birth;
        $this->$prix=$prix;
        $this->$adresse=$adresse;
        $this->$mail=$mail;
    }

    //                                          GETTERS
    public function get_id_artiste()
    {
        return $this->id_artiste;
    }

    public function get_nomprenom()
    {
        return $this->nomprenom;
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_mdp()
    {
        return $this->mdp;
    }

    public function get_descr()
    {
        return $this->descr;
    }

    public function get_img()
    {
        return $this->img;
    }

    public function get_birth()
    {
        return $this->birth;
    }

    public function get_prix()
    {
        return $this->prix;
    }

    public function get_adresse()
    {
        return $this->adresse;
    }

    public function get_mail()
    {
        return $this->mail;
    }
    //                                               SETTERS ↓↓↓
    public function setid_artiste ($id_artiste){
        $this->id_artiste = $id_artiste;
    }
    
    public function setnomprenom ($nomprenom){
        $this->nomprenom = $nomprenom;
    }

    public function settype ($type){
        $this->type = $type;
    }

    public function setmdp ($mdp){
        $this->mdp = $mdp;
    }

    public function setdescr ($descr){
        $this->descr = $descr;
    }

    public function setimg ($img){
        $this->img = $img;
    }

    public function setbirth ($birth){
        $this->birth = $birth;
    }

    public function setprix ($prix){
        $this->prix = $prix;
    }

    public function setadresse ($adresse){
        $this->adresse = $adresse;
    }

    public function setmail ($mail){
        $this->mail = $mail;
    }

    
    
}