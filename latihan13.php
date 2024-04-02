<?php 
$str = 'Belajar PHP di Kampus Merdeka';
echo $str;

echo '<br>';

$str = strtoupper($str); //huruf kapital
echo $str;

echo '<br>';

$str = strtolower($str);  //huruf kecil
echo $str;

echo '<br>';

$str = ucwords($str);  
echo $str;

echo '<br>';

$str = ucfirst($str);  
echo $str;

echo '<br>';

$ar_buah = ['pepaya','mangga','pisang','jambu','apel'];
sort($ar_buah);  //A-Z, Z-Aarsort
foreach ($ar_buah as $buah){
    echo "$buah<br>";
}

echo '<hr>';

//fungsi tanpa argumen/parameter (?)
function salam(){
    echo "Selamat Pagi Semuanya..";
}
salam();  //cetak function

// 2. fungsi dengan parameter/argumen
function sapa($kawan){
    echo "Selamat Siang $kawan";
}
sapa("Dams");  //cetak1
echo '<br>';
$nama = 'Jamal';
sapa($nama);  //cetak2

// 3. fungsi dengan parameter/argumen beserta isinya
function kabar($kawan='Rizki'){
    echo "Hai Apa Kabar $kawan";
}
kabar();
echo '<br>';
kabar("Ahmad");
echo '<br>';

// fungsi dengan return
function hitung($x, $y){
    $z = $x + $y;
    echo $z;
}
hitung(50,30);

echo'<br>';

function tambah($a, $b){
    $c = $a + $b;
    return $c;
}
echo tambah (50,50);
echo '<hr>';

function hitungUmur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo hitungUmur(2003);
echo '<br>';
echo 'Umur saya sekarang'. hitungUmur(2003) . 'tahun.';
?>