<?php
include 'prisijungimasPrieDB.php';

if(isset($_POST['pateikti'])){
    $k_1= $_POST['klausimas_1'];
    $k_2= $_POST['klausimas_2'];
    $k_3= $_POST['klausimas_3'];
    $k_4= $_POST['klausimas_4'];
    $k_5= $_POST['klausimas_5'];
    
    $vid = ($k_1 + $k_2 + $k_3 + $k_4 + $k_5) / 5;
    
    $sql2 = "SELECT id FROM vartotojai WHERE vardas LIKE '".$_COOKIE['vartotojas']."'";
    $result2 = mysqli_query($link, $sql2);
    if ($result2) 
    {
    while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
    {
    $vartotojo_id = $row2['id'];
    }
    }
    
    $sql13 = "INSERT INTO vertinimas (vartotojo_id, vidurkis) VALUES ('".$vartotojo_id."', '".$vid."')";
    mysqli_query($link, $sql13);
    

    
} else {
    header("Location: vidus.php");
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
                <div class="col-12 pt-3 pb-3 bg-primary text-white">
                    <h1 class="text-uppercase">Testas</h1>
                </div>
            </div>
            
            
            <main class="row p-3 d-flex align-items-center text-center">
            
                <h2 class="text-primary">Vidurkis: <?php echo $vid; ?> </h2>
                <a href="vidus.php" class="btn btn-primary">Vidus</a>
            </main>
       
      </div>
  
    </body>
</html>