<?php
include('koneksi.php');
session_start();

$user_check = $_SESSION['id'];
$ses_sql = mysqli_query($koneksi,"select id from users where id = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['id'];
if(!isset($_SESSION['id'])){
    echo '<script> alert("Anda Belum Login") </script>';
}