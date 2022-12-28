<html>
<head><title>LUAS SEGITIGA</title></head>
<h1>UAS PEMROGRAMAN DAN PERANCANGAN WEB </h1>
<h3> MENGHITUNG LUAS SEGITIGA </h3>
<body>
<form actiton="" method="post">
<table border=0>
<tr>
    <td>Alas Segitiga
    <td>:
    <td><input type="text" name="alas"><br>
</tr>
<tr>
    <td>Tinggi Segitiga
    <td>:
    <td><input type="text" name="tinggi"><br>
</tr>
<tr>
    <td><input type="submit" name="input-data" value=Input>
               
</tr>
</table>
</form>
</body>
</html>
<h5> Hasil Perhitungan Luas Segitiga </h5>
<?php
if (isset ($_POST["input-data"]))
{
$alas=$_POST["alas"];
$tinggi=$_POST["tinggi"];
$luas= $alas*$tinggi*1/2;
echo "Alas Segitiga Adalah : $alas <br>";
echo "Tinggi Segitiga Adalah : $tinggi <br>";
echo "Rumus : 1/2 * $alas * $tinggi <br>";
echo "Hasil : $luas";
}
?>