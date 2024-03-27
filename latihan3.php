<?php 
$siswa = 'Budi Santoso';
$matakuliah = 'PHP';
$nilai = 100 ;  //nilai diinput

//Ternary
$ket = ($nilai >=60) ? 'Lulus' : 'Gagal';

//IF ELSE
if ($nilai >= 85 && $nilai <=100) $grade='A';
else if ($nilai >=75 && $nilai <=85) $grade='B';
else $grade='';

//SWITCH CASE
switch($grade){
    case 'A' :
        $predikat='Memuaskan';
        break;
    case 'B' :
        $predikat='Bagus';
        break;
    default:
    $predikat='';
}
echo"<hr>";

?>
<!-- // cetak dihtml -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nama Siswa : <?= $siswa ?></h2>
    <h2>Mata Kuliah : <?= $matakuliah ?></h2>
    <h2>Nilai : <?= $nilai ?></h2>
    <h2>Keterangan : <?= $ket ?></h2>
    <h2>Grade : <?= $grade ?></h2>
    <h2>Predikat : <?= $predikat ?></h2>
</body>
</html>

<!-- NAMA MAHASISWA: BUdi Santoso => variabel
Mata Kuliah: PHP
Nilai : 80 => IF/ELSE
Keterangan : Lulus => Ternary
Grade : B => IF/ELSE
Predikat : Bagus -->
