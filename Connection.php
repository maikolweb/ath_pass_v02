<?php
ini_set("display_errors", 1); 

class Connection {
	private static $instance= null;
	private $userName;
	private $password;
	private $host;
	private $db;
	
	public function __construct (){
		//Se llama el archivo donde estan las constantes de BD
		require_once '../config/database.php';
		
		$this-> userName =USERNAME;
		$this-> 
		
		
	}
	public function getUserName(){
		return $this-> numero;
	}
	public function setUserName($userName){
		$this-> userName= $userName;
	}
	
	public function prueba(){
		
		
		echo 'usuario : '.USERNAME;
	}
}
