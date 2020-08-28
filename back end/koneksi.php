<?php
$koneksi = mysqli_connect("localhost", "root", "", "test"); //sesuaikan dengan password dan username mysql anda
if (mysqli_connect_errno()) {
    echo "koneksi gagal " . mysqli_connect_error();
}
