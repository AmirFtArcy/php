<?php
require 'hasil/persegi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hasil_luas.php" method="POST">
         <div> 
             <label for="sisi" >sisi(cm)</label>
             <input type="number" name="sisi">
         </div>
        
         
    <input type="submit" value="send">

    </form>
    <a href="index.php">home </a>
 <a href="BMI.php">BMI </a>
 <a href="bangun_segitiga.php">Segi3</a>
 <a href="bangun_persegi.php">persegi</a>
 <a href="bangun_persegipanjang.php">persegi p</a>
 <a href="lingkaran.php">lingkaran</a>
    
</body>
</html>