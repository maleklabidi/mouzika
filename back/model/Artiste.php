<?php

class artiste
{

    private   $id_artiste = null ;
    private  $nomprenom = null;
    private  $typea= null;
    private  $mdp = null;
    private  $descr = null;
    private  $img = null;
    private  $birth = null;
    private  $prix = null;
    private  $adresse = null;
    private  $mail = null;

    function __construct(string $nomprenom,string $typea,string $mdp,string $descr,string $img,string $birth,float $prix,string $adresse,string $mail)
    {
        //$this->$id_artiste=$id_artiste;
        $this->nomprenom=$nomprenom;
        $this->typea=$typea;
        $this->mdp=$mdp;
        $this->descr=$descr;
        $this->img=$img;
        $this->birth=$birth;
        $this->prix=$prix;
        $this->adresse=$adresse;
        $this->mail=$mail;
    }

    //                                          GETTERS
    function getidartiste():int
    {
        return $this->id_artiste;
    }

     function getnomprenom():string
    {
        return $this->nomprenom;
    }

     function gettypea():string
    {
        return $this->typea;
    }

    function getmdp():string
    {
        return $this->mdp;
    }

    function getdescr():string
    {
        return $this->descr;
    }

    function getimg():string
    {
        return $this->img;
    }

    function getbirth():string
    {
        return $this->birth;
    }

     function getprix():float
    {
        return $this->prix;
    }

     function getadresse():string
    {
        return $this->adresse;
    }

     function getmail():string
    {
        return $this->mail;
    }
    //                                               SETTERS ↓↓↓
    /*public function setid_artiste ($id_artiste){
        $this->id_artiste = $id_artiste;
    }
    
    public function setnomprenom ($nomprenom){
        $this->nomprenom = $nomprenom;
    }

    public function settypea ($typea){
        $this->typea = $typea;
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
*/
    
    
}