<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'koneksi.php';

if (!isset($_COOKIE['username'])) {
    // echo "kosong";
    $a = 0;
} else {
    $username    = ($_COOKIE['username']);
    $query    = mysqli_query($koneksi, "select waktu from login where username='$username'");

    while ($query1 = mysqli_fetch_array($query)) {
        // echo "Hai $username, waktu login anda " . $query1['waktu'];
        $a = "Hai $username, waktu login anda " . $query1['waktu'];
    }
}
echo json_encode($a);
