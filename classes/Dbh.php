<?php


class Dbh{

   private $host;
   Private $user;
   private $db;
   private $password;

   function connect(){
    
    $this->host = '127.0.0.1';
    $this->user = 'root';
    $this->db = 'zuriphp';
    $this->password = '';
    $conn = new mysqli($this->host,$this->user,$this->password, $this->db);
    if(!$conn){
         echo "Not connected";
     }
     return $conn;

   }
  

}

