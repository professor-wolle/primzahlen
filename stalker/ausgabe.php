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
		$Alter = $_POST["Alter"];
		$Ort = $_POST ["Ort"];
		$waifu = $_POST ["waifu"];
		
         echo "<br>Hallo " ,$_POST["vorname"], " ", $_POST["zuname"];
		 echo "<br> Du bist $Alter Jahre alt und befindest dich in $Ort und das weiﬂ ich, weil ich dich stalke.";
		 echo "<br> Ich habe gehˆrt, dass du auf $waifu stehst und hab sie/ihn/es dir ausgespannt.";
      ?>
  </body>
</html>
