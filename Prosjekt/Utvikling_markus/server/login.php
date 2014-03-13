<?php

include_once('user.php');


if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $pass = $_POST['pass'];
    
    $object = new User();
    $object->Login($name, $pass);
}

?>
<!DOCTYPE html>

<html>
<head>
   <meta charset="UTF-8">
      <!-- IE = edge betyr IE b¿r bruke den nyeste (edge) versjon av sin rendering motoren 
      Chrome = 1 betyr IE b¿r bruke Chrome rendering motoren hvis den er installert-->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         
   <!-- HOVED CSS-->      
   <link href="../css/main_style.css" rel="stylesheet" type="text/css" />
   <!-- RESPONSIVE-GRID CSS--> 
   <link href="../css/responsive_grid.css" rel="stylesheet" type="text/css" />
   
   <title>WESTERDALS - UTVALG</title>
</head>

<body>
      
   <!-- INNHOLD -->
   <!-- HEADER -->
   <?php include_once '../header.php';?>

   <div class="container row">
    
    
      <div class="col span_12 size960"><h2>Logg inn med Westerdals brukernavn og passord</h2></br><h4>Eller admin / admin.</h4></div>
      
    <div class="col span_12 size960 loginPage">
        
        <form method="post" action="login.php">
            Brukernavn:</br><input type="text" name="user""/>
          </br>
            Passord:</br><input type="text" name="pass"/>
            </br>
            <input type="submit" name="submit" value="Login"/>
        </form>
    </div>
    
    
   <!-- FOOTER -->
   <?php include_once '../footer.php';?>
   </div><!--container_close-->
</body>
</html>



