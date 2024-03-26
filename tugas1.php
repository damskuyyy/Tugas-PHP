<?php
$nama="Faqihul Muqoddam";
$no_wa='082172519703';
$instagram='muqod_dam_';
$email='muqoddam2711@gmail.com';
$alamat="Desa Badean, Kec Blimbingsari, Kab Banyuwangi, Jawa Timur, Indonesia";
$smp="MTS NURUL HUDA Badean";
$sma="MA NURUL HUDA Badean";
$kuliah="Politeknik Negeri Banyuwangi";
$hobi1="Olahraga";
$hobi2="Sepak Bola";
$hobi3="Editor";
$hobi4="Fotografi & Videografi";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Portofolio </title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
      <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body bgcolor="lightgray">
    <!-- contoh link untuk tujuan text -->
    <p align="right" id="atas"><a href="#bawah">kebawah</a></p>
    <h1 align="center">
        Welcome To My Biodata
    </h1>
    <p style="text-align: center; color: brown;"> <!-- berikut adalah css inline--> 
        <img src="./img/images.jpeg" alt="gambar profile" width="10%" align="left" hspace="10">
        Hallo Everyone, Salam saya <b>Faqihul Muqoddam</b> seorang mahasiswa aktif di Politeknik Negeri Banyuwangi saya sedang menempuh program studi D4 Teknologi Rekayasa Perangkat Lunak di Jurusan Bisnis dan Informatika, 
        Saya mempunyai ketertarikan dan mempelajari di dunia teknologi bidang pengembangan perangkat lunak baik tentang pengembangan website, bahasa pemograman  dan framework,
         Selain itu saya juga mempunyai keahlian dibidang Digital Creative Seperti Fotografi, Videografi dan Design.
         Saya juga memiliki kemampuan untuk bekerja secara mandiri maupun dalam tim yang terstruktur dan saya senang belajar hal hal baru serta mengikuti perkembangan teknologi dan trending terkini.
    </p>
    <p style="text-align: center; color: rgb(10, 10, 10);">  
        " Setiap Detik dalam hidup adalah Perjalanan, dan Setiap Perjalanan adalah Pelajaran "
        </p>
        <p align="center" id="paragraph"> 
            "My Quotes"
        </p>
    <h3 align="left">Tentang Saya</h3>   
    <ol type="A">
        <li> Kontak Saya </li> 
            <ul type="square">
                <li>Nama : <?= $nama ?></li>
                <li><a href="https://wa.me/+6282172519703">WA : +6282172519703</a></li>
                <li><a href="https://www.instagram.com/muqod_dam_"> Instagram : muqod_dam_</a></li>
                <li>Email : <?= $email ?></li></li>
                <li>Alamat : <?= $alamat ?></li></li>
           </ul>
        <li> Pendidikan </li>
        <ul type="square">
            <li>SMP</li>
            <ul type="disc">
                <li><?=$smp ?></li>
            </ul>
            <li>SMA</li>
            <ul type="disc">
                <li><?=$sma ?></li>
            </ul>
            <li>KULIAH</li>
            <ul type="disc"> 
                <li><?=$kuliah ?></li>
            </ul>
        </ul>
        <li> Hobby & Skills </li>
        <ul type="disc">
            <li> <?=$hobi1 ?></li>
            <li> <?=$hobi2 ?></li>
            <li> <?=$hobi3 ?></li>
            <li> <?=$hobi4 ?></li>
        </ul>
            
    </ol>
</fieldset>
    <p align="right" id="bawah"><a href="#atas">keatas</a></p>
</body>
<footer class="d-flex flex-wrap justify-content-between align-items-center px-4 py-3 my-4 border-top border-dark">
        <div class="col-md-5 d-flex align-items-center">
            <a href="/" class="mb-3 me-1 mb-md-0 text-body-secondary text-decoration-none">
                <i class="bi bi-code-slash"></i>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary fw-bold">&copy; 2024 <?= $nama ?> Copyright By, Inc</span>
        </div>

        <ul class="nav col-md-5 justify-content-end list-unstyled d-flex gap-4">
            <li class="ms-3"><a class="text-primary" href="#"><i class="bi bi-twitter 53"></i></a></li>
            <li class="ms-3"><a class="text-primary" href="#"><i class="bi bi-instagram h5"></i></a></li>
            <li class="ms-3"><a class="text-primary" href="#"><i class="bi bi-linkedin h5"></i></a></li>
        </ul>
    </footer>
     <!-- JS Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
