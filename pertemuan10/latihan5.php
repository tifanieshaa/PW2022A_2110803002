<?php 
    $mahasiswa = [
      [
        "nama" => "Tifanie Shalsabila",
        "NIM" => "2110803002",
        "Jurusan" => "Sistem Informasi",
        "email" => "tifanieshlsa30@gmail.com"
      ],
      [
        "nama" => "Chintia",
        "NIM" => "211080300",
        "Jurusan" => "Sistem Informasi",
        "email" => "chintia@gmail.com"
      ],
      [
        "nama" => "Indah",
        "NIM" => "211080300",
        "Jurusan" => "Sistem Informasi",
        "email" => "bella@gmail.com"
      ]
    ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
      <ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NIM : <?php echo $mhs["NIM"]; ?></li>
        <li>Jurusan : <?php echo $mhs["Jurusan"]; ?></li>
        <li>E-mail : <?php echo $mhs["email"]; ?></li>
      </ul>
    <?php } ?>
</body>
</html>