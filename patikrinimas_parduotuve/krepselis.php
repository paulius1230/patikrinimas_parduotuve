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
                <div class="col-12 pt-3 pb-3 bg-primary text-white">
                    <h1 class="text-uppercase">Krepšelis</h1>
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
            
                $sql2 = "SELECT id FROM vartotojai WHERE vardas LIKE '".$_COOKIE['vartotojas']."'";
                $result2 = mysqli_query($link, $sql2);
                if ($result2) 
                {
                    while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
                    {
                        $vartotojo_id = $row2['id'];
                    }
                }
            
                $sql = "SELECT prekes.pavadinimas, prekes.kaina, prekes.nuotrauka FROM prekes JOIN cart_userid ON prekes.id = cart_userid.prekes_id JOIN vartotojai ON vartotojai.id = cart_userid.vartotojo_id WHERE vartotojai.id = '".$vartotojo_id."'";
                $res = mysqli_query($link, $sql);

                if($res){
                   while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
                   {
                      echo "<div class='row d-flex align-items-center'>";
                      echo "<div class='col-3'>";
                      echo "<span>" . $row["pavadinimas"] . "</span>";
                      echo "</div>";
                      echo "<div class='col-3'>";
                      echo "<span class='text-danger'>" . $row["kaina"] . " €" ."</span>";
                      echo "</div>";
                      echo "<div class='col-3'>";
                      echo "<img class='img-fluid' width='30%' src='" . $row["nuotrauka"] . "'>";
                      echo "</div>";
                      echo "</div>";
                   }
                   $sql4 = "SELECT SUM(prekes.kaina) as galutineKaina FROM prekes JOIN cart_userid ON prekes.id = cart_userid.prekes_id JOIN vartotojai ON vartotojai.id = cart_userid.vartotojo_id WHERE vartotojai.id = '".$vartotojo_id."' ";
                   $result4 = mysqli_query($link, $sql4);
                   if($result4){
                    while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) 
                    {
                        $galutine_kaina = $row4['galutineKaina'];
                    }
                   }
                   echo "<div class='col-12 text-end text-danger'>";
                   echo "<span>Galutine kaina: " . round($galutine_kaina, 2) . "€ </span>";
                   echo "</div>";
                }
                ?>
                         <a href="vidus.php" class="btn btn-primary pt-2">Vidus</a>
            </main>
       
      </div>
  
    </body>
</html>

<?php 

$sql5 = "DELETE FROM cart_userid WHERE vartotojo_id = '$vartotojo_id' ";
mysqli_query($link, $sql5);

?>