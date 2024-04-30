<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmi</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
 <div class="andai">
    <form action="hasil.php" method="POST">
         <div> 
             <label for="nama" >Namamu</label>
            <input type="text" name="nama">
         </div>
         <div> 
             <label for="tinggi" >Tinggi Badanmu (cm)</label>
               <input type="number" name="tinggi">
        </div>
         <div> 
          <label for="berat" >Berat Badanmu (kg)</label>
          <input type="number" name="berat">
         </div>
    <input type="submit" value="kirim">

    </form>

    <a href="index.php">home </a>
 <a href="BMI.php">BMI </a>
 <a href="bangun_segitiga.php">Segi3</a>
 <a href="bangun_persegi.php">persegi</a>
 <a href="bangun_persegipanjang.php">persegi p</a>
 <a href="lingkaran.php">lingkaran</a>
 </div> 
    
</body>
</html>