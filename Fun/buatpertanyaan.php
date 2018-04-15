<?php
    include 'koneksi.php';
    $judul      = $_POST['judul'];
    $deskripsi  = $_POST['deskripsi'];
    $foto       = $_FILES['foto'];
    $video      = $_FILES['video'];
    $file       = $_FILES['files'];
    $key        = $_POST['key'];

    if ($key == 'buatpertanyaan'){
        $sql = "INSERT INTO pertanyaan VALUE $judul, $deskripsi, $foto, $video, $file";
        $sql = mysqli_query($koneksi, $sql);
    }

    if ($key == 'updatepertanyaan') {
        $id = $_POST['id'];
        $sql = "UPDATE pertanyaan SET
                judul = $judul,
                deskripsi = $deskripsi,
                foto      = $foto,
                video     = $video,
                file      = $file
                WHERE id = $id;
                ";
        $sql = mysqli_query($koneksi, $sql);
    }

    if($key == 'hapus'){
        $id = $_POST['id'];
        $sql = "DELETE FROM pertanyaan WHERE id= $id";
    }
