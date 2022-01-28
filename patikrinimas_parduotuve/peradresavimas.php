<?php
include 'prisijungimasPrieDB.php';

if(isset($_POST['prisijungti'])){
    $vardas = $_POST['vartotojo_vardas'];
    $slaptazodis = $_POST['slaptazodis'];
    
    $sql = "SELECT vardas, slaptazodis FROM vartotojai WHERE vardas LIKE '$vardas' AND slaptazodis LIKE '$slaptazodis' ";
    $result = mysqli_query($link, $sql);

    
    
    if(mysqli_num_rows($result) == 1){

    setcookie("vartotojas", $vardas, time() + 60 * 60 * 4);
    header("Location: vidus.php");
    }
  
    if(mysqli_num_rows($result) == 0){
    echo "<h1>Blogi prisijungimo duomenys</h1>";
    }
    

    
}