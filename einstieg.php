<!doctype html>
<html lang="de">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Einstieg php</title>
   </head>
   <body>
      <form action="ausgabe.php" method="post">
         <h1>Eingabe des Namens</h1>
         <label for="vorname">Vorname</label> 
         <input type="text" name="vorname" id="vorname" maxlength="30">
         
         <label for="zuname">Zuname</label>  
         <input type="text" name="zuname" id="zuname" maxlength="40">
         
         <button type="reset">Eingaben zurücksetzen</button>
         <button type="submit">Eingaben absenden</button>
      </form>
  </body>
</html>
