<?PHP
	class Utilisateur{
		private  $id = null;
		private  $username = null;
		private  $email = null;
		private  $password = null;
		
		function __construct(string $username,string $email, string $password){
			
			$this->username = $username;
			$this->email=$email;
			$this->password=$password;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getUsername(): string{
			return $this->username;
		}
		
		
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}

		function setUsername(string $username): void{
			$this->username=$username;
		}
		
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
	}
?>