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
$nama = $_POST["nama"];
$tinggi = $_POST["tinggi"] / 100;
$berat = $_POST["berat"];

$bmi = $berat / ( $tinggi * $tinggi );
?>
<h3>Nilai BMImu Adalah : <?=$bmi?> </h3>

<?php


if ($bmi < "18")
{
  $tanda = "Kudu maem Seng Akeh Ya!!!!!!";
}
 else if ($bmi <=22.9)
{
  $tanda = "Normal";
}
else if ($bmi <=29.9)
{
  $tanda = "Kakean Maem!!!!!";
}
else
{
  $tanda = "Kelemon We";
}
?>
<p>katane ibuk nek nilai bmi mu  : <?= $bmi?> tandane awamu <?= $tanda ?> </p>
</body>
</html>