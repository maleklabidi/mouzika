<?php 

class evenement {

	private  $id_even = null ;
	private  $nom = null;
	private  $emplacement= null;
    private  $capacite = null;
	private  $date = null;
    private  $artiste = null;
    private  $image = null;

function __construct( string $nom, string $emplacement, string $capacite, string $date, string $artiste, string $image){
			
			$this->nom = $nom;
			$this->emplacement = $emplacement;
			$this->capacite=$capacite;
			$this->date=$date;
            $this->artiste=$artiste;
            $this->image=$image;
		}
		
		
		function getid_even(): int{
			return $this->id_even;
		}
		function getno(): string{
			return $this->nom;
		}
		function getemp(): string{
			return $this->emplacement;
		}
		function getcap(): string{
			return $this->capacite;
		}
		function getdate(): string{
			return $this->date;
		}
        function getar(): string {
            return $this->artiste;
        }
        function getima(): string {
            return $this->image; 
        }


    function setida(string $nom): void{
			$this->nom=$nom;
		}
		function setprod(string $emplacement): void{
			$this->emplacement=$emplacement;
		}
		function setno(string $capacite): void{
			$this->capacite=$capacite;
		}
		function setred(string $date): void{
			$this->date=$date; 
        }
        function setdur(string $artiste): void{
			$this->artiste=$artiste;
		}
        function setima(string $image): void{
			$this->image=$image;
		}

}



?>