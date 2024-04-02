<?php
require './mahasiswa.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $universitas = $_POST['universitas'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new mahasiswa($nim, $name, $universitas, $matkul, $nilai);
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 5 - Form Nilai Ujian</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body class="container">
        <h1 class="text-center ">Daftar Nilai Ujian Mahasiswa</h1>
        <button class="btn btn-success mt-3 " type="button"> <a href="form.php"><-Kembali</a></button>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kuliah</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        <?php
                        echo $mahasiswa->nim;
                        ?>
                    </td>
                    <td scope="row">
                        <?php
                        echo $mahasiswa->name;
                        ?>
                    </td>
                    <td scope="row">
                        <?php
                        echo $mahasiswa->universitas;
                        ?>
                    </td>
                    <td scope="row">
                        <?php
                        echo $mahasiswa->matkul;
                        ?>
                    </td>
                    <td scope="row">
                        <?php
                        echo $mahasiswa->nilai;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $mahasiswa->nilGrade();
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $mahasiswa->nilPredikat($mahasiswa->nilGrade());
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $mahasiswa->nilStatus();
                        ?>
                    </td>

                </tr>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
}
?>