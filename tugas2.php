<?php
$nama =$_POST['nama'];
$produk =$_POST['produk'];
$jumlah_beli =$_POST['jumlah_beli'];

switch ($produk) {
    case 'Kaos':
        $harga = 800000;
        break;

    case 'Hoodie':
        $harga = 150000;
        break;

    case 'Sepatu':
        $harga = 200000;
        break;

    case 'Topi':
        $harga = 500000;
        break;

    case 'Celana':
        $harga = 300000;
        break;
    
    default:
        $harga = 0;
        break;
}

$total_belanja = $harga * $jumlah_beli;
$diskon = 0.20 * $total_belanja;
$ppn = 0.10 * ($total_belanja - $diskon);
$bayar = ($total_belanja - $diskon) + $ppn;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tugas2-PHP</title>
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center mb-4">Form Thrift Shop</h2>
        <div class="w-50 bg-secondary bg-gradient rounded-3 p-5 mb-3">
            <form action="tugas2.php" method="POST">
                <label for="nama">Nama Pembeli</label>
                <input id="nama" name="nama" type="text" class="form-control mb-3" required>

                <label for="produk">Produk</label>
                <select id="produk" name="produk" class="form-select mb-3" aria-label="Default select example" required>
                    <option selected>-- Pilih Produk --</option>
                    <option value="Kaos">Kaos</option>
                    <option value="Hoodie">Hoodie</option>
                    <option value="Sepatu">Sepatu</option>
                    <option value="Topi">Topi</option>
                    <option value="Celana">Celana</option>
                </select>

                <label for="jumlah_beli">Jumlah Beli</label>
                <input id="number" name="jumlah_beli" type="number" class="form-control mb-3" required>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
        </div>
        <div>
            <p>Nama Pelanggan : <?= $nama  ?></p>
            <p>Produk : <?= $produk  ?></p>
            <p>Jumlah Beli : <?= $jumlah_beli  ?></p>
            <p>Harga Satuan : Rp <?= ($harga) ?></p>
            <p>Total Belanja : Rp <?= ($total_belanja) ?></p>
            <p>Diskon : Rp <?= ($diskon) ?></p>
            <p>PPN : Rp <?= ($ppn) ?></p>
            <p>Harga Bayar : Rp <?= ($bayar) ?></p>
        </div>
    </div>
</body>
<!-- Tag JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>