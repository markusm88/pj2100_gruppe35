<?php

class Connection {
   
    public function dbConnection(){
        
        $db_host = "localhost";
        $db_name = "Login";
        $db_user = "root";
        $db_pass = "";
        
        return new PDO ("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    }
}

//try{ }
//catch(PDOException $e){
//   echo $e->getMessage();}

?>

