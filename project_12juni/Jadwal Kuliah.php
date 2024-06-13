<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Kuliah</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="Jadwal Kuliah.css" rel="stylesheet">
</head>
<body>
<?php
        session_start();
        if($_SESSION['is_logged_in'] != TRUE)
        {
            header('Location: form_login.php');
            exit();
        }

        echo $_SESSION['nama'];
    ?>
<div class="container mt-5">
    <div class="row">
        <!-- Menu Kiri -->
        <div class="col-md-3">
            <h3>Muhammad Aufar Ramadhan - 06840</h3>
            <ul class="list-group">
            <a href="halaman1.php" class="list-group-item">Halaman1</a>
                <a href="halaman2.php" class="list-group-item">Beranda</a>
                <a href="Biodata.php" class="list-group-item">Biodata</a>
                <a href="logout.php" class="list-group-item">logout</a>
            </ul>
        </div>
        <!-- Konten Jadwal Kuliah -->
        <div class="col-md-9">
            <h1>Jadwal Perkuliahan Semester 4</h1>
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Mata Kuliah</th>
                            <th>Ruang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>07.00 - 09.30</td>
                            <td>PSSI</td>
                            <td>H.5.8</td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>08.40 - 10.20</td>
                            <td>Pemrograman Web</td>
                            <td>H.4.6</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>18.30 - 20.10</td>
                            <td>Pemrograman Berorientasi Obyek</td>
                            <td>D.2.K</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>10.20 - 12.00</td>
                            <td>Pemrograman Web </td>
                            <td>D.2.B</td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>07.00 - 09.30</td>
                            <td>PSDP</td>
                            <td>H.4.5</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>16.20 - 18.00</td>
                            <td>Pemrograman Berorientasi Obyek</td>
                            <td>H.4.12</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>12.30 - 15.00</td>
                            <td>Manajemen Rantai Pasok</td>
                            <td>H.4.8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>