<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h3>Form Login</h3>
    <form action="latihan4.php" method="POST">
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tgl">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="Laki-Laki">Laki Laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
        </div>
        <div>
            <input type="submit" value="SUBMIT">
        </div>
    </form>
</body>
</html>
<hr>

<!-- tag php  -->
<?php
// error_reporting(0); menghilangkan pesan error
echo'Nama:'.$_POST['nama'] . '<br>';
echo'Email:'.$_POST['email'] . '<br>';
echo'Password:'.$_POST['pass'] .'<br>';
echo'Tanggal Lahir:'.$_POST['tgl'] . '<br>';
echo'Jenis Kelamin:'.$_POST['jk'] . '<br>';

?>
