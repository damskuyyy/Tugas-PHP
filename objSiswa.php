<?php
//sertakan file classnya
require_once 'Siswa.php';

//ciptakakan objek
$ns1 = new Siswa('Jamal', 40, 'PHP');
$ns2 = new Siswa('Dono', 90, 'UIUX');
$ns3 = new Siswa('Tina', 70, 'LARAVEL');
$ar_siswa = [$ns1,$ns2,$ns3];
//cetak
foreach ($ar_siswa as $sis){   
    echo $sis->nama.'<br>';
    echo $sis->nilai.'<br>';
    echo $sis->pelajaran.'<br>'; 
}
echo "<hr>";
?>
<h2 align="center">Daftar Nilai Siswa</h2>
<table border="1" width="50%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pelajaran</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        foreach ($ar_siswa as $sis){   
          echo '<tr>';
          echo '<td>'. $no .'</td>';
          echo '<td>'. $sis->nama .'</td>';
          echo '<td>'. $sis->pelajaran .'</td>';
          echo '<td>'. $sis->nilai .'</td>';
          echo '<td>'. $sis->getHasil() .'</td>';
          echo '</tr>';
        $no++;  
        }
    ?>    
    </tbody>
</table>