<?php
session_start();
if(!$_SESSION['user']){
    header('location:latihan6.php');
}
?> 

<h1> Selamat Datang Di HomePage Admin <?php echo $_SESSION['user']; ?></h1>

<br>
<form method="POST">
    <input type="submit" name="logout" value="logout">
</form>

<?php
if(isset($_POST['logout'])){
    session_destroy();
    header('location:latihan6.php');
}
?>