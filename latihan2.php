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
echo"<hr>";

$baju='L';  //ukuran baju
// $baju = strtolower($baju);
switch ($baju){
    case "L":
    case "l":
        echo "Large";
        break;
    case "M" && "m":
        echo "Medium";
        break;
    default:
        echo "Small";
        
}
echo"<hr>";

$nilai = 40;
switch ($nilai){
    case $nilai <=40 : 
        echo "$nilai : Nilai Kurang";
        break;
    case $nilai <=40 : 
        echo "$nilai : Nilai Kurang";
        break;
        default :
        echo "null";
}
echo"<hr>";

$nilai2 = 50;
switch ($nilai2) {
    case $nilai2 >=0 && $nilai2 <35:
        echo "$nilai2: E";
        break;
    case $nilai2 >=35 && $nilai2 <60:
        echo "$nilai2: D";
        break; 
        default :
        echo "null";   
}

?>