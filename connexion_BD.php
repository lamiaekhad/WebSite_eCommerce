<?php

class DataBaseConnectionManager{

private $serverName="localhost";
private $userName="root";
private $password="";
private $dbName="projet_final";
private $conn;

function __construct(){}

public function getConnection(){
    
    try
    {
        $conn = new mysqli("localhost", $this->userName, $this->password, $this->dbName);
        $conn->set_charset("utf8");
        if($conn->connect_error)
        {
            die("Connection failed: ".mysqli_connect_error());
        }
       
    }
    catch(Exception $e)
    {
        echo "erreur connection"; 
    }
    return $conn;
}
}
?>