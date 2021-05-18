<?php
//goes to controller
	include "../../../config.php";
	require_once "../../Model/albums.php"; 

	class albumsC {

		function ajouteralbum($album) {
			$sql = "INSERT INTO albums (id, title, cover_image, number_of_songs, release_date, genre, artist,length) VALUES (:id, :title, :cover_image, :number_of_songs, :release_date, :genre, :artist,:length)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'id'=>$album->get_id(),
					'title'=> $album->get_title(),
					'cover_image'=> $album->get_cover_image(),
                    'number_of_songs'=> $album->get_number_of_songs(),
                    'release_date'=> $album->get_release_date(),
                    'genre'=> $album->get_genre(),
                    'artist'=> $album->get_artist(),
                    'length'=> $album->get_length(),
                    
				]);
			}
			catch(Exception $e) {
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficheralbum() {
			$sql="SELECT * FROM albums";
			$db = config::getConnexion();
			try{
				$listealbum = $db->query($sql);
				return $listealbum;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimeralbum($id) {
			$sql = "DELETE FROM albums WHERE id = :id";
			$db = config::getConnexion();
			$req = $db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}	
        function modifieralbum($album,$id){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare('UPDATE albums SET 
						id = :id,
						title = :title,
						number_of_songs = :number_of_songs,
                        release_date = :release_date,
                        artist = :artist,
                        length = :length,
                        cover_image = :cover_image,
                        genre = :genre

						
					WHERE id = :id'
				);

				$query->bindValue(':id',$id);
				$query->bindValue(':title',$album->get_title());
				$query->bindValue(':number_of_songs',$album->get_number_of_songs());
				$query->bindValue(':release_date',$album->get_release_date());
                $query->bindValue(':artist',$album->get_artist());
                $query->bindValue(':length',$album->get_length());
                $query->bindValue(':cover_image',$album->get_cover_image());
                $query->bindValue(':genre',$album->get_genre());
				$query->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


        function recupereralbum($id){
			$sql="SELECT * from albums where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$album=$query->fetch(PDO::FETCH_OBJ);
				return $album;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}    
	}
 ?>