<?php
include_once 'webmenu.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dams</title>
</head>
<body>
    <h2 align="center" bgcolor="gray">Web Rental Studio</h2>

    <div style="text-align:center; background-color:khaki; color:blue">
    <!-- Home  |  Produk  |  Pesan  | Galeri  |   Gesbuk -->
    <?php 
    foreach($menu_atas as $key => $value){
        // echo "$key $value <br>" ;
        echo "<a href='index.php?hal=$key'>$value</a>   |  ";
    }
    ?>
    </div>