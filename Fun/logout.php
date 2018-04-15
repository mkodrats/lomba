<?php

    include 'koneksi.php';

    session_start();

    if ($_SESSION['id']) {
        session_destroy();
        header('location: ../view/login.php');
    }