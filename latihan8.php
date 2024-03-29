<?php 
//Looping
//perhitungan 1 s.d 10
for($x=1; $x<=10; $x=$x+1){
    echo "SAYA BELAJAR PHP GUYS <br> ";
}
echo"<hr>";
//Looping
//perhitungan 10 s.d 1
for ($y = 10; $y >= 1; $y--) {
    echo "$y<br>";
}
echo"<hr>";

// looping while
$j=1;
while($j<=10){
    echo "$j <br>";
    $j++;
}

?>
<form>
    Jumlah Siswa:
    <?php 
    for($z=1; $z<=10; $z=$z+1){
        echo ' <input type="radio" name="jk" value="$z">'.$z;
    }
    ?>

</form>