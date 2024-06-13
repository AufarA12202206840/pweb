<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="Biodata.css" rel="stylesheet">
    <link rel="stylesheet" href="gojo.jpg">
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
            <h3>    Muhammad Aufar Ramadhan - 06840</h3>
            <ul class="list-group">
            <a href="halaman1.php" class="list-group-item">halaman1</a>
                <a href="halaman2.php" class="list-group-item">Beranda</a>
                <a href="Jadwal Kuliah.php" class="list-group-item">Jadwal Kuliah</a>
                <a href="logout.php" class="list-group-item">logout</a>
            </ul>
        </div>

        <!-- Biodata -->
        <div class="col-md-9">
            <h1>Biodata</h1>
            <img src="om.jpeg">
            <section class="mt-4">
                <h2>Nama</h2>
                <p>Muhammad Aufar Ramadhan</p>
            </section>
            <section>
                <h2>Alamat, Tanggal Lahir</h2>
                <p>Semarang,11 November 2002</p>
            </section>
            <section class="mt-4">
                <h2>Alamat</h2>
                <p>Jalan Puri Anjasmoro No.19</p>
            </section>
            <section class="mt-4">
                <h2>Pendidikan</h2>
                <p>S1 Sistem Informasi, Universitas Dian Nuswantoro </p>
            <section>
                <h2>Hobi</h2>
                <p>Kerja</p>
            </section>
            <section>
                <h2>NIM</h2>
                <p>A12.2022.06840</p>
            </section>