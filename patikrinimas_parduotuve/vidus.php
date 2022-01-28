<?php
include 'prisijungimasPrieDB.php';
if(!isset($_COOKIE['vartotojas'])){
    header("Location: prisijungimas.php");
}


$krepselisNeTuscias = false;

$sql2 = "SELECT id FROM vartotojai WHERE vardas LIKE '".$_COOKIE['vartotojas']."'";
    $result2 = mysqli_query($link, $sql2);
    if ($result2) 
    {
        while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
        {
            $vartotojo_id = $row2['id'];
        }
    }  

for($i = 1; $i <= 8; $i++){
if(isset($_POST["".$i]))
{

    $sql3 = "INSERT INTO cart_userid (prekes_id, vartotojo_id) VALUES ('".$i."', '".$vartotojo_id."')";
    mysqli_query($link, $sql3); 
}
}

$sqll4 = "SELECT * FROM cart_userid WHERE vartotojo_id = '$vartotojo_id' ";
$result4 = mysqli_query($link, $sqll4);
if(mysqli_num_rows($result4) > 0){
$krepselisNeTuscias = true;
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
                    <h1 class="text-uppercase">Parduotuve</h1>
                </div>
            </div>
            
            <div class="row pt-3 pb-3 text-center border-bottom border-3 border-primary">
                <div class="col-3">
                    <span>Preke</span>
                </div>
                <div class="col-3">
                    <span>Kaina</span> 
                </div>
                <div class="col-3">
                    <span>Nuotrauka</span>
                </div>
            </div>
            
            <main class="row p-3 d-flex align-items-center text-center">
                <?php
                $sql = "SELECT * FROM prekes";
                $res = mysqli_query($link, $sql);

                if($res){
                   while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
                   {
                      echo "<div class='row d-flex align-items-center'>";
                      echo "<div class='col-3'>";
                      echo "<span>" . $row["id"] . ". " . $row["pavadinimas"] . "</span>";
                      echo "</div>";
                      echo "<div class='col-3'>";
                      echo "<span class='text-danger'>" . $row["kaina"] . " €" ."</span>";
                      echo "</div>";
                      echo "<div class='col-3'>";
                      echo "<img class='img-fluid' width='30%' src='" . $row["nuotrauka"] . "'>";
                      echo "</div>";
                      echo "<div class='col-3'>";
                      echo "<form action='vidus.php' method='POST'>";
                      echo "<input type='submit' value='įdėti į krepšelį' class='btn btn-primary' name='" . $row['id'] . "'>";
                      echo "</form>";
                      echo "</div>";
                      echo "</div>";
                   }
                   echo "<div class='row'>";
                   echo "<div class='col-6 p-2'>";
                   echo "<a href='testas.php' class='btn btn-primary'>Atlikti testa</a>";
                   echo "</div>";
                   echo "<div class='col-6'>";
                   if($krepselisNeTuscias){
                   echo "<a href='krepselis.php' class='btn btn-primary'>Baigti apsipirkimą</a>";   
                   }
                   echo "</div>";
                   echo "</div>";
                }
                ?>
            </main>
       
      </div>
  
    </body>
</html>


