<?php

class SingletonDB
{
    // 1 staticka private promeljiva
private static $instance = null;


private $conn;
private $host = "localhost";
private $user = "root";
private $pass = "";
private $dbName = "probabaza";

// 2 publik static kostruktor
private function __construct(){
$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
}

// 3 publik static metoda getInstance
public static function getInstance(){
 if(self::$instance == null){
   self::$instance = new SingletonDB();
}
return self::$instance;
}


public function getConnection()
{
return $this->conn;
}   
} 


?>