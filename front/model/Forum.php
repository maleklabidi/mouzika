<?php
include_once "../config.php";
class Forum
{
   private $titre,$categorie,$post,$image,$id_patient;

function __construct($titre,$categorie,$post,$image,$id_patient)
 {
        $this->titre=$titre;
        $this->categorie=$categorie;
        $this->post=$post;
        $this->image=$image;
        $this->id_patient=$id_patient;      
    }
 public function get_titre() 
    {
        return $this->titre;
    }   
    public function get_categorie() 
    {
        return $this->categorie;
    }   
    public function get_post() 
    {
        return $this->post;
    }   
    public function get_image()
    {
        return $this->image;
    }
    public function get_id_patient() 
    {
        return $this->id_patient;
    }   

}
    class Commentaire
{
   private $comment;

function __construct($comment)
 {
        $this->comment=$comment;        
    }
 public function get_comment() 
    {
        return $this->comment;
    }   
 }










?>