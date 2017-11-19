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
          
          $a = $_POST["zahl"];
          $is_prime = true;
          
          for ($b = 2; $b < $a; $b++) {
              if ($a % $b == 0) {
                  $is_prime = false;
                  break;
              }
          }
          
          if ($is_prime) {
              echo "$a is a prime number.";
          } else {
              echo "$a is not a prime number.";
          }
          
      ?>
  </body>
</html>