<?php 
// array : sekumpulan data
// array numerik dan asosiatif
// untuk mencetak array memerlukan foreach

//1. array numerik
$ar_buah =['Pepaya','Mangga','Pisang','Melon','Jeruk'];

//cetak
echo $ar_buah[4];
echo "<hr>";

//tampilkan jumlah
$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

//lihat hasil data buah dengan foreach
foreach ($ar_buah as $value){
    echo "$value <br>";
}
echo "<hr>";

//2. array asosiatif
$ar_hewan = [10=> 'Babi Ngepet', 20=>'Bebek','Kucing', 30=> 'Harimau','Anjing Galak'];
echo $ar_hewan[10];
echo "<hr>";

//lihat hasil
foreach ($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}
echo "<hr>";

// 3. array multidimensi / array dalam array
$daftar_tahanan = [
["nama" => "Budi", "Alamat"=>"Depok","Telp"=>010101, "status"=>"Jomblo"],
["nama" => "Alif", "Alamat"=>"Bogor","Telp"=>020202, "status"=>"Duda"],
["nama" => "Jamal", "Alamat"=>"Mars","Telp"=>030303, "status"=>"Badut"],
];

foreach ($daftar_tahanan as $namax){
    echo "$namax[nama] <br>";
}


?>