<?php 
include 'prisijungimasPrieDB.php';

if(isset($_COOKIE['vartotojas'])){
    header("Location: vidus.php");
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prisijungimas</title>
    </head>
    <body>
       
  <form action="peradresavimas.php" method="post">
  <div class="container" style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, 0);">
    <label for="vartotojo_vardas"><b>Vartotojo vardas:</b></label><br>
    <input type="text"  name="vartotojo_vardas" style="width: 200px; height:25px; border: 3px solid black;">
    <br><br>
    <label for="slaptazodis"><b>Slaptažodis:</b></label><br>
    <input type="password" name="slaptazodis" style="width: 200px; height:25px; border: 3px solid black;">
    <br><br>
    <button type="submit" name="prisijungti" style="width: 100px; height: 40px; background: black; color: white; font-weight: bold; text-transform: uppercase; float: right;">Prisijungti</button>
  </div>  
</form>
    </body>
</html>
