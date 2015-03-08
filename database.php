<?php
//$mysqli = new mysqli($db_server,$db_user,$db_pass);



$db = @mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$db) { exit('Impossibile connettersi al server ' . DB_SERVER); }

if (!@mysql_select_db(DB_DATABASE)) { exit('Impossibile trovare il database '. DB_DATABASE); }



// ---


interface CredentialI {
	

}

class Credential implements CredentialI {
	public $name;
	public $password;
	private $id;


	public getId() {
		return $this->id;
	}
	public function __construct($name,$password) {
		$this->name = $name;
		$this->password = $password;
	}

	public isEmpty() {
		return empty($this->name) || empty($this->password);
	}
}

// $io = new credential("pippo","segeto");
// $qa = new db("asd","127...",$io);
class Db {
	public $connection = null;

	function __construct($name,$host,CredentialI  $credential) {
		try {
			if(!$credential->isEmpty())) throw new Exception("Connessione al db fallitai credenziali vuote");
			$this->connection = mysql_connect($host,$credential->name, $credential->password);
		} catch (Exception $e) {
			echo "Error " . $e->getMessage();
		}
	}

}


class Admin extends Credential implements CredentialI {
	public $role = "Admin"; 

}




class AppleUser extends Credential implements CredentialI {
	public $iCloudName;

	public function __construct($name,$password)
	{
		$parent::__construct($name,$password);
		$this->iCloudName = $name . "@apple.com";
	
	} 
}
