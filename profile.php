<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Home</title>
</head>
<body>
<?php
  $user = "Nazhifa!";
  $nama = "Nazhifa Zahratunnisa";
  $TTL  = "Bandung, 10 November 2007";
  $kelas= "XI RPL 2";
  $sekolah="SMKN 2 Bandung";
?>

 <div>

  <div class="header"> 
    <header>
      <h1><?php echo"Welcome $user!"; ?></h1>
      <p>Have a look here!</p>
    </header>
  </div>

  <div class="left"> 
    
    <a href="index.php">Home<br></a>
    <a href="profile.php">Profile</a>
   
  </div>

  <div class="content"> 
    <h2>Profil diri</h2>
    <img src="aku.jpg">
    <p><?php echo"Nama : $nama<br>";
             echo"Tempat dan Tanggal Lahir : $TTL<br>";
             echo"Kelas : $kelas<br>"; ?></p>
    <h2>Pendidikan</h2>
    <p><?php echo"sekolah = $sekolah"; ?></p>

    </div>
    <div class="footer"> 
    <footer>
     <p>&copy; Nanazspace</p>
    </footer>
  </div>

</div>
</body>
</html>