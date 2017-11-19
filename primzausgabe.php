<!doctype html>
<html lang="de">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ausgabe</title>
   </head>
   <body>
      <h1>Ausgabe</h2>
      <?php
          
          $zahl = $_POST["zahl"];
          $primz = true;
          
          for ($zahlenb = 2; $zahlenb < $zahl; $zahlenb++) {
              if ($zahl % $zahlenb == 0) {
                  $primz = false;
                  break;
              }
          }
          
          if ($primz == true) {
              echo "$zahl ist eine Primzahl.";
          } else {
              echo "$zahl ist keine Primzahl";
          }
          
      ?>
  </body>
</html>