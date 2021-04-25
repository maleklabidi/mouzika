<?php 

class promotion {

	private  $id_promo = null ;
	private  $id_artiste = null;
	private  $id_produit= null;
    private  $reduction = null;
    private  $duree = null;
    private  $description = null;
    private  $image = null;

function __construct( string $id_artiste, string $id_produit, float $reduction, string $duree, string $description, string $image){
			
			$this->id_artiste=$id_artiste;
			$this->id_produit=$id_produit;
			$this->reduction=$reduction;
            $this->duree=$duree;
            $this->description=$description;
            $this->image=$image;

		}
		function getid_promo(): string{
			return $this->id_promo;
		}
		function getida(): string{
			return $this->id_artiste;
		}
		function getprod(): string{
			return $this->id_produit;
		}
		function getred(): float{
			return $this->reduction;
		}
        function getdur(): string {
            return $this->duree;
        }
        function getdesc(): string {
            return $this->description;
        }
        function getima(): string {
            return $this->image; 
        }


    function setida(string $id_artiste): void{
			$this->id_artiste=$id_artiste;
		}
		function setprod(string $id_produit): void{
			$this->id_produit=$id_produit;
		}
		function setred(int $reduction): void{
			$this->reduction=$reduction; 
        }
        function setdur(string $duree): void{
			$this->duree=$duree;
		}
        function setdesc(string $description): void{
			$this->description=$description;
		}
        function setima(string $image): void{
			$this->image=$image;
		}




}



?>