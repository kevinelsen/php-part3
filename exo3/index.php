<?php
   $first = 100;
   $second = 20;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
     <p>
       <?php
       while ($first >= 10 ) {
         echo  $first * $second;
         $first--;
       }
       ?>
     </p>
  </body>
</html>
