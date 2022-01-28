<?php
include 'prisijungimasPrieDB.php';

if(!isset($_COOKIE['vartotojas'])){
    header("Location: prisijungimas.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parduotuve</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <style>
         *{
                font-family: 'Open Sans', sans-serif;
          }
        </style>
    </head>
    <body>
       
        <div class="container border border-3 border-primary">
            <div class="row">
                <div class="col-9 pt-3 pb-3 bg-primary text-white">
                    <h1 class="text-uppercase">Testas</h1>
                </div>
                 <div class="col-3 pt-3 pb-3 bg-primary text-white d-flex align-items-center justify-content-center">
                     <a href="vidus.php" class="pe-auto text-white">
                     <span style="font-size: 20px;">Grįžti į parduotuvę</span>
                     </a>
                </div>
            </div>
            
            
            <main class="row p-3 d-flex align-items-center text-center">
            <form action="galutinis.php" method="POST">
            <label for="klausimas_1">Kaip vertinate prekių kokybę:</label>
            <select name="klausimas_1" required>
              <option value="">Pasirinkite įvertinimą</option>
              <option value="1">1 - Labai Blogai</option>
              <option value="2">2 - Blogai</option>
              <option value="3">3 - Vidutiniskai</option>
              <option value="4">4 - Gerai</option>
              <option value="5">5 - Labai gerai</option>
            </select><br><br>
            <label for="klausimas_2">Kaip vertinate prekių pristatymą:</label>
            <select name="klausimas_2" required>
              <option value="">Pasirinkite įvertinimą</option>
              <option value="1">1 - Labai Blogai</option>
              <option value="2">2 - Blogai</option>
              <option value="3">3 - Vidutiniskai</option>
              <option value="4">4 - Gerai</option>
              <option value="5">5 - Labai gerai</option>
            </select>
            <br><br>
            <label for="klausimas_3">Kaip vertinate puslapio funkcionalumą:</label>
            <select name="klausimas_3" required>
              <option value="">Pasirinkite įvertinimą</option>
              <option value="1">1 - Labai Blogai</option>
              <option value="2">2 - Blogai</option>
              <option value="3">3 - Vidutiniskai</option>
              <option value="4">4 - Gerai</option>
              <option value="5">5 - Labai gerai</option>
            </select><br><br>
            <label for="klausimas_4">Kaip vertinate klientų aptarnavima:</label>
            <select name="klausimas_4" required>
              <option value="">Pasirinkite įvertinimą</option>
              <option value="1">1 - Labai Blogai</option>
              <option value="2">2 - Blogai</option>
              <option value="3">3 - Vidutiniskai</option>
              <option value="4">4 - Gerai</option>
              <option value="5">5 - Labai gerai</option>
            </select><br><br>
            <label for="klausimas_5">Kaip vertinate prekių kainas:</label>
            <select name="klausimas_5" required>
              <option value="">Pasirinkite įvertinimą</option>
              <option value="1">1 - Labai Blogai</option>
              <option value="2">2 - Blogai</option>
              <option value="3">3 - Vidutiniskai</option>
              <option value="4">4 - Gerai</option>
              <option value="5">5 - Labai gerai</option>
            </select><br><br>
            <input type="submit" class="btn btn-primary" value="Pateikti" name="pateikti">
          </form>
                
            </main>
       
      </div>
  
    </body>
</html>