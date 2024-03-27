<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2  align="center">Form Input Nilai</h2>
<form method="POST" action="latihan5.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" placeholder="masukan nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="value">---PILIHAN MATAKULIAH---</option>
        <option value="Javascript">Java Script</option>
        <option value="Databases">Databases</option>
        <option value="PHP">PHP</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
      <button name="unproses" type="reset" class="btn btn-danger">Batal</button>
    </div>
  </div>
</form>

<?php 

$siswa = $_POST['nama'];
$matakuliah = $_POST['matkul'];
$nilai = $_POST['nilai']; 
$proses = $_POST['proses']; 

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
if(isset($proses)){   // sebagai proses pencegah error handling
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
    <h3>Nama Siswa : <?= $siswa ?></h3>
    <h3>Mata Kuliah : <?= $matakuliah ?></h2>
    <h3>Nilai : <?= $nilai ?></h3>
    <h3>Keterangan : <?= $ket ?></h3>
    <h3>Grade : <?= $grade ?></h3>
    <h3>Predikat : <?= $predikat ?></h3>
</body>
</html>
<?php } ?>