<?php
  $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


  $censura = $_GET["censura"];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>BadWords</title>
   </head>
   <body>
     <h1>Testo originale</h1>
     <p><?php echo "Lunghezza: ".strlen($testo)."<br>"." Testo: ".$testo ?></p>
     <h1>Testo censurato</h1>
     <p><?php echo "Lunghezza: ".strlen(str_replace($censura, "***", $testo))."<br>"." Testo: ".str_replace($censura, "***", $testo) ?></p>
   </body>
 </html>
