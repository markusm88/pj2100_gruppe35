<?php
include_once('config_db.php');

// Thanks for tutorial @ http://creativitytuts.org/

class User {
    
    private $db;
    
    public function __construct(){
        $this->db = new Connection();
        $this->db = $this->db->dbConnection();
    }
    
    public function Login($name, $pass){
        if(!empty($name) && !empty($pass)){
            $st = $this->db->prepare("select * from User where name=? and pass=?");
            $st->bindParam(1, $name);
            $st->bindParam(2, $pass);
            $st->execute();
            
            // Hvis brnavn og passord er riktig gi tilgang. 
            if($st->rowCount() == 1){
                //Her må det legges til en phpside som adder poster(newsfeeds)
                echo "<script type='text/javascript'>alert('Tilgang gitt. Velkommen.')</script>";
                
                
            }else{
                 echo "<script type='text/javascript'>
                 alert('Feil brukernavn og passord.')
                 window.history.back(-1);
                 </script>";
                 
            }
            
        }else{
            echo "<script type='text/javascript'>
            alert('Feil brukernavn og passord.')
            window.history.back(-1);
            </script>";
        }
}
}

?>