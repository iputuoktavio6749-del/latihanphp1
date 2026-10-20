<?php
$nim = "250030027";
$nama = "I Putu Oktavio Widnyana Putra";
$kodeJurusan = "SI";
$angkatan = 2025;
$umur = 20;
$gender = "Laki-laki";
$hobi = ["Bermain game MLBB"];

echo "Biodata Mahasiswa<br>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Kode Jurusan: $kodeJurusan<br>";
echo "Angkatan: $angkatan<br>";
echo "Umur: $umur tahun<br>";
echo "Gender: $gender<br>";
echo "Hobi: " . implode(", ", $hobi);
?>