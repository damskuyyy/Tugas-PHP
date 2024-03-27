<?php
session_start();  //sesi tangkap login
?>

<form method="POST">
    <label for="" >Username</label>
    <input type="text" name="username" placeholder="masukan nama"> <br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="masukan password"> <br>
    <input type="submit" name="masuk" value="login">
</form>

<?php 
if(isset($_POST['masuk'])){
$username = $_POST['username'];
$password = $_POST['password'];

//jika user dab password cocok maka dapat login
// selain itu ditolak
if($username == 'admin' && $password == 'rahasia'){
    $_SESSION['user'] = $username;
    header('location: beranda.php');
} else {
    echo "<script>alert('Password Anda Salah, Coba Lagi!!!') </script>";
}
}  
?>

  
