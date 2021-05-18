<?PHP
	class Admin{
		private  $id = null;
		private  $username = null;
		
		private  $password = null;
		
		function __construct(string $username, string $password){
			
			$this->username = $username;
			
			$this->password=$password;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getUsername(): string{
			return $this->username;
		}
		
		
		
		function getPassword(): string{
			return $this->password;
		}

		function setUsername(string $username): void{
			$this->username=$username;
		}
		
		
		function setPassword(string $password): void{
			$this->password=$password;
		}
	}
?>