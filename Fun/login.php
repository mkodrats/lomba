<?php
include 'koneksi.php';
$username = $_POST['id'];
$pass     = $_POST['password'];
session_start();

$sql = "SELECT id FROM users WHERE id = '$username' and password = '$pass'";
$result = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['id'];
$count = mysqli_num_rows($result);

if($count == 1) {
    $_SESSION['id'] = $username;
    header("location: ../view/home.php");  
}else {
    $error = "Your Login Name or Password is invalid";
}


