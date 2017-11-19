<!doctype html>
<html lang="de">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Einstieg php</title>
   </head>
   <body>
      <h1>Ausgabe</h2>
      <?php
         echo "Hallo " ,$_POST["vorname"], " ", $_POST["zuname"];
         echo "<br>Wie geht es dir?";
      ?>
  </body>
</html>
