<?php require "server/config.php";?>
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
   <link href="css/normalize.css" rel="stylesheet" type="text/css" />

   
   
   <title>WESTERDALS - UTVALG</title>
</head>

<body>
   <div class="container row">
      
      
   <!-- INNHOLD -->
   
   <!-- HEADER -->
   <?php include_once 'header.php';?>
   
   <!-- MAIN -->
   <div class="row gutters">
   <div class="col span_8 slider"><h1>Slider</h1></div>
   <div class="col span_4 newsfeed clr"><h2>Newsfeed</h2></div>
   </div><!--Row_close - for slider og newsfeed-->

   <ul class="row gutters row1">
      <li class="col span_3 utvalg1"><h3>Utvalg1</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg2</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg3</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg4</h3></li>
      <div class="clr"></div>
   </ul><!--Row1_close - for de forskjellige utvalgene-->
   
    <ul class="row gutters row2">
      <li class="col span_3 utvalg1"><h3>Utvalg5</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg6</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg7</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg8</h3></li>
      <div class="clr"></div>
   </ul><!--Row2_close - for de forskjellige utvalgene-->

   <ul class="row gutters row3">
      <li class="col span_3 utvalg1"><h3>Utvalg9</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg10</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg11</h3></li>
      <li class="col span_3 utvalg1"><h3>Utvalg12</h3></li>
       <div class="clr"></div>
   </ul><!--Row3_close - for de forskjellige utvalgene-->
   
   
   <!-- FOOTER -->
   <?php include_once 'footer.php';?>
   </div><!--container_close-->
</body>
</html>
