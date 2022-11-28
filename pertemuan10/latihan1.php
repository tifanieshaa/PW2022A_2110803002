<?php 
$mahasiswa = ["Tifanie Shalsabila Imaniah", "2110803002", "Sistem Informasi", "tifanieshlsa30@gmail.com"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coba Array</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <li><?php print $mhs; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>