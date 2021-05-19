<?php 
//goes to model
class Album {
//attributes
	private  $id = null ;
	private  $artist = null;
	private  $title= null;
  private  $number_of_songs = null;
	private  $release_date = null;
  private  $length = null;
  private  $genre = null;
  private  $cover_image = null;
//construct
function __construct( int $id, string $artist, string $title, int $number_of_songs, string $release_date, string $length, string $genre, string $cover_image){
			
			$this->id = $id;
			$this->artist = $artist;
			$this->title=$title;
			$this->number_of_songs=$number_of_songs;
      $this->release_date=$release_date;
      $this->length=$length;
      $this->genre=$genre;
      $this->cover_image=$cover_image;
		}
		
		//getters
		function get_id(): int{
			return $this->id;
		}
		function get_artist(): string{
			return $this->artist;
		}
		function get_title(): string{
			return $this->title;
		}
		function get_number_of_songs(): int{
			return $this->number_of_songs;
		}
		function get_release_date(): string{
			return $this->release_date;
		}
    function get_length(): string {
      return $this->length;
    }
    function get_genre(): string {
      return $this->genre;
    }
    function get_cover_image(): string {
      return $this->cover_image; 
    }

//setters
    function set_id(int $id): void{
			$this->id=$id;
		}
		function set_artist(string $artist): void{
			$this->artist=$artist;
		}
		function set_title(string $title): void{
			$this->title=$title;
		}
		function set_number_of_songs(int $number_of_songs): void{
			$this->number_of_song=$number_of_songs; 
    }
        function set_release_date(string $release_date): void{
			$this->release_date=$release_date;
		}
    function set_length(string $length): void{
			$this->length=$length;
		}
    function set_genre(string $genre): void{
			$this->genre=$genre;
		}
    function set_cover_image(string $cover_image): void{
			$this->cover_image=$cover_image;
		}



}



?>