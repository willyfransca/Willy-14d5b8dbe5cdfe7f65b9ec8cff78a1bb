<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

$data = mysqli_query($koneksi, "select * from login where username='$username'");
$cek = mysqli_num_rows($data);
if ($cek == 0) {
    if ($password == $password1) {
        $data = mysqli_query($koneksi, "insert into login values('$username','$password','','')");
        header("location:../front end/login.html");
    } else {
        header("location:../front end/register.html");
    }
} else {
    header("location:../front end/register.html");
}
