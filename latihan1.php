    <?php
    //komentar
    echo '<p> Selamat Pagi</p>';
    echo "Saya senang Belajar PHP";
    echo '<br>';
    print "Belajar MySQL";
    echo '<hr>';

    //variabel user
    $nama="Adama";
    $alamat="Banyuwangi";
    $umur=30;  //data integer
    $berat=50.5;  //data float
    $_pekerjaan="Karyawan BUMN"; //data string 


    echo $nama;
    echo $alamat;
    echo $umur;
    echo $berat;
    echo $_pekerjaan;
    echo "<br>";
    echo 'nama saya ' .$nama.' alamat di ' .$alamat;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <!-- cetal di html -->
    <h2>Nama Saya: <?php echo $nama ?> </h2>
    <h2>Pekerjaan Saya: <?php echo $_pekerjaan ?> </h2>
</body>
</html>

<?php
//variabel system
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];


//variabel konstanta
//define untuk memanggil variabel
define('PELAJARAN','PHP Dasar');
echo "Ini MataKuliah:", PELAJARAN;

echo "<hr>";

//operator aritmatika
$a=100;
$b=50;
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
echo $a%$b.'<br>';  //modulus(%) sisa pembagian
echo $a**$b.'<br>';
echo pow ($a,$b).'<br>';
echo pow(2,3);
echo "<hr>";

//SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2

define('PHI',3.14);
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

//cetak
echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>';

//tipedata string
$itungstring="Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo '<br>';

//mengetahui variabel
$huruf="Dono";
$hasil=gettype($huruf);
echo $hasil;
echo '<br>';

$bil=100;
$hasil=gettype($bil);
echo $hasil;
echo '<br>';

//cetak dengan menggunakan stle css
echo "<style text color:blue >";
echo $nama;
?>