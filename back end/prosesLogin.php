<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    setcookie('username', $username, time() + (60 * 60 * 24 * 15), '/');
    $tgl = date("h:i:sa");
    mysqli_query($koneksi, "update login set waktu='$tgl', statusLogin='login' where username='$username'");
    header("location:../front end/home.html");
} else {
    header("location:../front end/login.html?pesan=gagal");
}
