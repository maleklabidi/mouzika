<?php 
//goes to model
class Single {
//attributes
	private  $id = null ;
	private  $artist = null;
	private  $single_name= null;
  private  $artist_image = null;
	private  $audio = null;
  private  $release_date = null;
  private  $rate = null;
  private  $genre = null;
//construct
function __construct( int $id, string $artist, string $single_name, string $artist_image, string $audio, string $release_date, int $rate, string $genre){
			
	$this->id = $id;
	$this->artist = $artist;
	$this->single_name=$single_name;
	$this->artist_image=$artist_image;
    $this->audio=$audio;
    $this->release_date=$release_date;
    $this->rate=$rate;
    $this->genre=$genre;
		}
		
		//getters
		function get_id(): int{
			return $this->id;
		}
		function get_artist(): string{
			return $this->artist;
		}
		function get_single_name(): string{
			return $this->single_name;
		}
		function get_artist_image(): string{
			return $this->artist_image;
		}
		function get_audio(): string{
			return $this->audio;
		}
    function get_release_date(): string {
      return $this->release_date;
    }
    function get_rate(): int {
      return $this->rate;
    }
    function get_genre(): string {
      return $this->genre; 
    }

//setters
    function set_id(int $id): void{
			$this->id=$id;
		}
		function set_artist(string $artist): void{
			$this->artist=$artist;
		}
		function set_single_name(string $single_name): void{
			$this->single_name=$single_name;
		}
		function set_artist_image(string $artist_image): void{
			$this->artist_image=$artist_image; 
    }
        function set_audio(string $audio): void{
			$this->audio=$audio;
		}
    function set_release_date(string $release_date): void{
			$this->release_date=$release_date;
		}
    function set_rate(int $rate): void{
			$this->rate=$rate;
		}
    function set_genre(string $genre): void{
			$this->genre=$genre;
		}



}



?>