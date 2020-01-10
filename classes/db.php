<?php
class DB{
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'mysql';
	private $db_name = 'gym';
	public $db;
	function __construct(){
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;
		try{
			$this->db = new PDO($dsn,$this->user,$this->password);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
}
?>