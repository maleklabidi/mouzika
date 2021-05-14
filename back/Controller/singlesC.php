<?php
//goes to controller
	include "../../config.php";
	require_once "../Model/singles.php"; 

	class singlesC {

		function ajoutersingle($single) {
			$sql = "INSERT INTO singles (id, artist, single_name, artist_image, audio, release_date, rate,genre) 
            VALUES (:id, :artist, :single_name, :artist_image, :audio, :release_date, :rate,:genre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'id'=>$single->get_id(),
					'artist'=> $single->get_artist(),
					'single_name'=> $single->get_single_name(),
                    'artist_image'=> $single->get_artist_image(),
                    'audio'=> $single->get_audio(),
                    'release_date'=> $single->get_release_date(),
                    'rate'=> $single->get_rate(),
                    'genre'=> $single->get_genre(),
                    
				]);
			}
			catch(Exception $e) {
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function affichersingle() {
			$sql="SELECT * FROM singles";
			$db = config::getConnexion();
			try{
				$listesingle = $db->query($sql);
				return $listesingle;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimersingle($id) {
			$sql = "DELETE FROM singles WHERE id = :id";
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
        function modifiersingle($single,$id){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare('UPDATE singles SET 
						id = :id,
						artist = :artist,
						single_name = :single_name,
                        artist_image = :artist_image,
                        audio = :audio,
                        release_date = :release_date,
                        rate = :rate,
                        genre = :genre

						
					WHERE id = :id'
				);

				$query->bindValue(':id',$id);
				$query->bindValue(':artist',$single->get_artist());
				$query->bindValue(':single_name',$single->get_single_name());
				$query->bindValue(':artist_image',$single->get_artist_image());
                $query->bindValue(':audio',$single->get_audio());
                $query->bindValue(':release_date',$single->get_release_date());
                $query->bindValue(':rate',$single->get_rate());
                $query->bindValue(':genre',$single->get_genre());
				$query->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


        function recuperersingle($id){
			$sql="SELECT * from singles where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$single=$query->fetch(PDO::FETCH_OBJ);
				return $single;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}    
	}
 ?>