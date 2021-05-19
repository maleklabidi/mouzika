<?PHP
	class cours{
		private  $id = null;
		private  $nom_cours = null;
		private  $type_cours = null;
		private  $prix_cours = null;
        private  $description_cours = null;
		private  $photo_cours = null;
		
		
		
		function __construct(string $nom_cours,string $type_cours, int $prix_cours, string $description_cours,string $photo_cours ){
			
			$this->nom_cours = $nom_cours;
			$this->type_cours=$type_cours;
            $this->prix_cours=$prix_cours;
			$this->description_cours=$description_cours;
            $this->photo_cours=$photo_cours;
         
            
		}
		
		function getId(): int{
			return $this->id;
		}
		function getnom_cours(): string{
			return $this->nom_cours;
		}
		
		
		function gettype_cours(): int{
			return $this->type_cours;
		}
		function getprix_cours(): int{
			return $this->prix_cours;
		}
        function getdescription_cours(): string{
			return $this->description_cours;
		}
       

		function setnom_cours(string $nom_cours): void{
			$this->nom_cours=$nom_cours;
		}
		
		function settype_cours(int $type_cours): void{
			$this->type_cours=$type_cours;
		}
		function setprix_cours(int $prix_cours): void{
			$this->prix_cours=$prix_cours;
		}
        function setdescription_cours(string $description_cours): void{
			$this->description_cours=$description_cours;
		}
        function setphoto_cours(string $photo_cours): void{
			$this->photo_cours=$photo_cours;
		}
   
	}
?>