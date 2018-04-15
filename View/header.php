<?php 
    session_start();
    include '../fun/session.php'; 
?>
<!doctype html>
<html lang="en">

<head>
    <title>Portal Belajar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#74b9ff">
        <a class="navbar-brand" href="#">Portal Belajar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" id="beranda" href="home.php">Beranda
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="notifikasi" href="notifikasi.php">Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pesan" href="pesan.php">Pesan</a>
                </li>
            </ul>
            <a class="btn btn-secondary" href="buatpertanyaan.php">Buat Pertanyaan</a> &nbsp;
                <a class="btn btn-light"  href="../fun/logout.php">Logout</a>
        </div>
    </nav>