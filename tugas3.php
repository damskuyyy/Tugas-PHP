<?php 

$a1 = ['nama_mhs'=>'Udil Surbakti','nim'=>10101,'nilai'=>95];
$a2 = ['nama_mhs'=>'Julian Leomurphy','nim'=>10102,'nilai'=>80];
$a3 = ['nama_mhs'=>'Celiboy','nim'=>10103,'nilai'=>85];
$a4 = ['nama_mhs'=>'Ahmad Maungzy','nim'=>10104,'nilai'=>70];
$a5 = ['nama_mhs'=>'Pai Alvareza','nim'=>10105,'nilai'=>76];
$a6 = ['nama_mhs'=>'Nino Syauki','nim'=>10106,'nilai'=>55];
$a7 = ['nama_mhs'=>'Rasy Arga','nim'=>10107,'nilai'=>100];
$a8 = ['nama_mhs'=>'Delwyn','nim'=>10108,'nilai'=>65];
$a9 = ['nama_mhs'=>'Santos','nim'=>10109,'nilai'=>25];
$a10 = ['nama_mhs'=>'Godiva','nim'=>101010,'nilai'=>50];

$ar_mahasiswa = [$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10];

$ar_header = ['No','Nama Mahasiswa','NIM','Nilai','Keterangan','Grade','Predikat'];

function keterangan($nilai)
{
    return $nilai >= 65 ? 'Lulus' : 'Gagal';
}

function grade($nilai)
{
    if ($nilai >= 85) {
        return 'A';
    } elseif ($nilai >= 75) {
        return 'B';
    } elseif ($nilai >= 65) {
        return 'C';
    } elseif ($nilai >= 55) {
        return 'D';
    } else {
        return 'E';
    }
}

function predikat($grade)
{
    switch ($grade) {
        case 'A':
            return 'Memuaskan';
            break;
        case 'B':
            return 'Bagus';
            break;
        case 'C':
            return 'Cukup';
            break;
        case 'D':
            return 'Kurang';
            break;
        case 'E':
            return 'Buruk';
            break;
        default:
            return '';
            break;
    }
}

$nilai = array_column($ar_mahasiswa,'nilai');
$nilai_tertinggi = max($nilai);
$nilai_terendah = min($nilai);
$jumlah_mhs = count($ar_mahasiswa);
$jumlah_keseluruhan_nilai = array_sum($nilai); 
$nilai_rata2 = $jumlah_keseluruhan_nilai / $jumlah_mhs;

$keterangan = [
    'Nilai Tertinggi'=>$nilai_tertinggi,
    'Nilai Terendah'=>$nilai_terendah,
    'Nilai Rata Rata'=>$nilai_rata2,
    'Jumlah Mahasiswa' =>$jumlah_mhs,
    'Jumlah Keseluruhan Nilai' =>$jumlah_keseluruhan_nilai
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
        <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" align="center" width="100%">
        <thead>
            <tr bgcolor="lightgray" >
        <?php foreach($ar_header as $header){ ?>
            <th> <?= $header ?></th>
       <?php } ?>
       </tr>
        </thead>

        <tbody>
        <?php foreach($ar_mahasiswa as $key => $mahasiswa): ?>
                <tr align="center">
                    <td><?= $key + 1 ?></td>
                    <td><?= $mahasiswa['nama_mhs'] ?></td>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['nilai'] ?></td>
                    <td><?= keterangan($mahasiswa['nilai']) ?></td>
                    <td><?= grade($mahasiswa['nilai']) ?></td>
                    <td><?= predikat(grade($mahasiswa['nilai'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
        <?php 
            foreach($keterangan as $ket => $hasil) {
             ?>
             <tr>
                <th colspan="2"><?= $ket ?></th>
                <th colspan="6"><?= $hasil ?></th>
             </tr>
            <?php }?>
        <tr>
        <td bgcolor="lightgray" colspan="7" align="center">
            <p>&copy; 2024 Copyright by Faqihul Muqoddam</p>
        </td>
        </tr>
        </tfoot>

    </table>
    
</body>
</html>