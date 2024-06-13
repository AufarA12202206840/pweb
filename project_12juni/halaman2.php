<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="halaman2.css" rel="stylesheet">
    <title>Document</title>
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
        <!-- Menu_kanan -->
        <div class="col-md-3">
            <h3>Muhammad Aufar Ramadhan - 06840</h3>
            <ul class="list-group">
                <a href="halaman1.php" class="list-group-item">Halaman 1</a>
                <a href="Biodata.php" class="list-group-item">Biodata</a>
                <a href="Jadwal Kuliah.php" class="list-group-item">Jadwal Kuliah</a>
                <a href="logout.php" class="list-group-item">Logout</a>
                
            </ul>
        </div>
   <!-- Konten Beranda -->
   <div class="col-md-9">
            <h1>HALAMAN 2</h1>
            <section class="mt-4">
                <h2>Sejarah Singkat UDINUS</h2>
                <p>Pada tahun 1986, didirikan sebuah lembaga kursus komputer IMKA yang berlokasi di kota Semarang. 
                    Karena kegigihannya dalam membuka dan menciptakan peluang pasar serta ketahanannya dalam menghadapi pelbagai rintangan, 
                    IMKA berhasil tumbuh dan berkembang serta menyebar ke beberapa kota besar di Pulau Jawa, seperti Semarang, Surakarta, Yogyakarta, Surabaya, Bandung dan Jakarta. 
                    Disamping itu, karena mutu dan kualitas pendidikannya yang baik, pada tahun 1989, IMKA diangkat sebagai Ketua Subkonsorsium Komputer, Pengawas dan Penguji Ujian Nasional Pendidikan Komputer.
                     </p>
            </section>
            <img src="UDINUS.jpeg">
        </div>
    </div>
</div>
    
</body>
</html>