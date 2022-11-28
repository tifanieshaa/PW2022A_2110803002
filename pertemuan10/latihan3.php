<?php 
$mahasiswa = [["Tifanie Shalsabila", "2110803002", "Sistem Informasi", "tifanieshlsa30@gmail.com"], 
              ["Chintia", "211080300", "Sistem Informasi", "chintia@gmail.com",],
              ["Bella", "211080300", "Sistem Informasi", "bella@gmail.com",],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) {?>
    <ul>
      <li><?php echo $mhs[0]; ?></li>
      <li><?php echo $mhs[1]; ?></li>
      <li><?php echo $mhs[2]; ?></li>
      <li><?php echo $mhs[3]; ?></li>
    </ul>
  <?php } ?>
</body>
</html>