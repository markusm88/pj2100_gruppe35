<?php
include_once "server/config_db.php";

?>
<!DOCTYPE html>

<html>
<head>
   <meta charset="UTF-8">
      <!-- IE = edge betyr IE bør bruke den nyeste (edge) versjon av sin rendering motoren 
      Chrome = 1 betyr IE bør bruke Chrome rendering motoren hvis den er installert-->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         
   <!-- HOVED CSS-->      
   <link href="css/main_style.css" rel="stylesheet" type="text/css" />
   <!-- RESPONSIVE-GRID CSS--> 
   <link href="css/responsive_grid.css" rel="stylesheet" type="text/css" />
   <!-- RESETTING AV BROWSER CSS--> 
   <link href="css/normalize2.css" rel="stylesheet" type="text/css" />

   
   
   <title>WESTERDALS - UTVALG</title>
</head>

<body>
      
   <!-- INNHOLD -->
   
   <!-- HEADER -->
   <?php include_once 'header.php';?>

   <div class="container row">
   
   <!-- MAIN -->
   <div class="size960">
   <div class="row gutters">
   <div class="col span_8 slider"><h1>Slider</h1></div>
   <div class="col span_4 newsfeed clr"><h2>Newsfeed</h2></div>
   </div><!--Row_close - for slider og newsfeed-->
   </div><!--size960_close-->
   
   
   <div id="mainWrap">
   <div class="size960">
   <ul class="row gutters row1">
      <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
      <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/AUG.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/KIT.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/UFF_logo.jpg"></img></a></div></li>
      <div class="clr"></div>
   </ul><!--Row1_close - for de forskjellige utvalgene-->
   
    <ul class="row gutters row2">
      <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
      <div class="clr"></div>
   </ul><!--Row2_close - for de forskjellige utvalgene-->

   <ul class="row gutters row3">
      <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>
	  <li class="col span_3"><div class="utvalg1"><a href="pus.php"><img class="picture" src="Img/PUS.jpg"></img></a></div></li>

       <div class="clr"></div>
   </ul><!--Row3_close - for de forskjellige utvalgene-->
   
   </div><!--size960_close-->
   </div><!--mainWrap_close-->
   
   <!-- FOOTER -->
   <?php include_once 'footer.php';?>
   </div><!--container_close-->
</body>
</html>
