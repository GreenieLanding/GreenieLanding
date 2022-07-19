<?php

class ConnectionManager {

  public function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "root";  
    $dbname = "greenieweb";

    // PDO class is a built-in class provided by PHP
    
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
  }
 
}
?>