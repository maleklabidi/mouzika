<?php

include "../model/Forum.php";
require 'classSimpleMail.php';

class ForumManage
{
public function ajouterPost($post) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `post`(`titre`, `categorie`, `post`, `image`, `date_post`) VALUES (:titre,:categorie,:post,:image,now())";      
        $sql=$db->prepare($req);
        
        $sql->bindValue(':titre',$post->get_titre());
        $sql->bindValue(':categorie',$post->get_categorie());
        $sql->bindValue(':post',$post->get_post());
        $sql->bindValue(':image',$post->get_image());
      
      
         if($sql->execute())
         {
          $last_id = $db->lastInsertId();
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$last_id."\">"; 
               }
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter-post.php\">"; 	
       
    } 
    public function ajouterLike($id_post) 
    {
        $db=config::getConnexion();
        
        $req="UPDATE `post` SET `like_count`= like_count + 1 WHERE id=$id_post";

         $sql=$db->prepare($req);
  
      if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">";  
          
       
    } 
    public function ajouterCommentaire($comment,$id_patient,$id_post,$nom) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `commentaire`( `nom`,`comment`, `date_com`, `id_patient`, `id_post`) VALUES ('$nom',:comment,now(),$id_patient,$id_post)";
       
        $sql=$db->prepare($req);
        
        $sql->bindValue(':comment',$comment->get_comment());

      
         if($sql->execute())
         {
            $mail = new SimpleMail('smtp.gmail.com', 587, 'tls');
            $mail->auth('wissal.soudani@esprit.tn', '191JFTWISSAL');

            $mail->from('Contact@Mouzika.tn', 'Mouzika');
            // to->mail taa l admin
            $mail->to('wissal.tozeur@gmail.com', 'Admin');

            $mail->subject = 'Notification';
            $mail->message = '<h3>Comment</h3>
                  <b>'.$nom.' a commenté votre article </b> <p>'.strval($id_post).'</p>';

            if ($mail->send())
	            echo 'Mail sent successfully.';
            else
	            echo 'Error: ' . $mail->error;
            
                 
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">"; 
               }
            else
                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=login-client-inter.php\">"; 
        
       
    } 
     public function afficherPost()
    {
        $db=config::getConnexion();
        $result ="SELECT * FROM post";
        $sql=$db->query($result);
        return $sql;
    } 
    public function maxPost()
    {
        $db=config::getConnexion();
        $result ="SELECT max(id) as max_post FROM post";
        $sql=$db->query($result);
        return $sql;
       
    }
      public function minPost()
    {
        $db=config::getConnexion();
        $result ="SELECT min(id) as min_post FROM post";
        $sql=$db->query($result);
        return $sql;
       
    }
    function recupererCommentaire($id_post)
    {
        $db = config::getConnexion();
        $sql="SELECT * from commentaire where id_post=$id_post";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
      public function supprimerPost($id)
    {
         $db=config::getConnexion();
        $sql=$db->prepare("DELETE FROM post WHERE id= $id");
        if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 

    }
     public function supprimerComment($id,$id_post)
    {
         $db=config::getConnexion();
        $sql=$db->prepare("DELETE FROM commentaire WHERE id= $id");
        if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">"; 
            else
                   echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">"; 

    }
public function modifierPost($post,$id_post)
    {
       
      
        
        $db=config::getConnexion();
        
        $req="UPDATE `post` SET `titre`=:titre,`categorie`=:categorie,`post`=:post,`date_post`=now() WHERE id=$id_post";


         $sql=$db->prepare($req);
         $sql->bindValue(':titre',$post->get_titre());
        $sql->bindValue(':categorie',$post->get_categorie());
        $sql->bindValue(':post',$post->get_post());
  
      if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">"; 
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">";  
        
    }
    function recupererPost($id)
    {
        $db = config::getConnexion();
        $sql="SELECT * from post where id=$id";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function rechercher($input,$colonne) {
        if($colonne == "all") 
        {        $sql = "SELECT * from post WHERE ( titre LIKE \"%$input%\") OR ( categorie LIKE \"%$input%\") OR ( date_post LIKE \"%$input%\") ";
       } else {
   $sql = "SELECT * from post WHERE ( $colonne LIKE \"%$input%\")  "; }
   $db = config::getConnexion();
   try { $posts=$db->query($sql); 
    
       return $posts;
   }
   catch (PDOException $e) {
       $e->getMessage();
   }


}

function SendMail($to,$comment)
{
$mail = new SimpleMail('smtp.gmail.com', 587, 'tls');
$mail->auth('chiheb.chikhaoui@esprit.tn', '181JMT3508');

$mail->from('burt.johnson@hotmail.com', 'AL MAZAYA CARTHAGE');
$mail->to($to, 'John Smith');

$mail->subject = 'Notification';
$mail->message = '<h3>Comment </h3>
                  <b>Someone Cemmented on your post: </b> '.$comment;

if ($mail->send())
	echo 'Mail sent successfully.';
else
	echo 'Error: ' . $mail->error;
}

}












?>