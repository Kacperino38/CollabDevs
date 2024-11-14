<html>
 <head>
   <title>Cookies - a normal page</title>
   <?php
   if (isset($_COOKIE["selectedStyle"])) { // if style has been set
     $style = $_COOKIE["selectedStyle"];
   } else { // if style not yet set, default to 0
     $style = 0;
   }
   ?>
   
  <link rel="stylesheet" href="style<?= $style; ?>.css">
 </head>
 <body>
   <h1>This is the colour of a heading number 1</h1>
   <p>This is any page of your website - the style of this page is taken from a cookie, if it has been set</p>
   <p><a href="changestyle.php">This is a link to a page where you can Change The Style</a></p>
 </body>
</html>