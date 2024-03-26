<?php 
$umur = 23; // input
if ($umur > 20) {
    echo "Selamat Kamu Dapat Mengendarai Mobil";
} else {
    echo "Kamu Dilarang Mengendarai Mobil";
}
// else if ($umur >17){
//     echo "Selamat Kamu Dapat Naik Motor";
// }


echo "<hr>";

$nama ="Adama";
$keterangan="";
$umur = 21;

if($umur <40 && $umur>=17){
    $keterangan= "Dewasa";
}
elseif($umur <17 && $umur >=9){
    $keterangan= "Remaja";
}
elseif($umur <9 && $umur >=5){
    $keterangan= "Anak-anak";
}
elseif($umur <5 && $umur >=0){
    $keterangan= "Balita";
}
else{
    $keterangan= "TUA";
}
echo "Nama Saya $nama Umur $umur keterangan $keterangan";
echo "<hr>";

$nilai=8; //ubah nilai
if($nilai)
//cara ternary
echo $nilai>7 ? "Baik" : "Buruk";

?>