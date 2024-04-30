<?php
require 'hasil/lingkaran.php'
?>
<!DOCTYPE html>
<html lang="en" class = "back">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

<?php 
    $JARI =$_POST["jari"];
    $lingkaran = new lingkaran();
    $lingkaran -> r = $JARI;
    $luas = $lingkaran->luas();
    $keliling=$lingkaran->keliling();

?>
<h3> luas lingkaran dengan jari-jari <?$jari?> adalah <?php echo $luas?></h3>
<h3> keliling lingkaran dengan jari-jari <?$jari?> adalah <?php echo $keliling?></h3>
</body>
</html>