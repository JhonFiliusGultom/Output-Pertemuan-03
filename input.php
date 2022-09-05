<h1> Hasil Inputan pengisian Data Mahasiswa </h1> 
<?php
session_start();
echo "Data Sudah Diterima <br>"; 
$d1 = $Nama = $_POST["namalengkap"];
$d2 = $NIM = $_POST["nim"];
$d3 = $jk = $_POST["kelamin"];

echo "Nama  =", $Nama,"<br>";
echo "NIM =", $NIM,"<br>";
echo "Jenis Kelamin =", $jk,"<br>";
?>