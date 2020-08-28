<?php
// mengaktifkan session
session_start();


include('koneksi.php');
$username = $_SESSION['username'];

mysqli_query($koneksi, "update login set statusLogin='logout' where username='$username'");


// menghapus semua session
session_destroy();
setcookie('username', '', 0, '/');

// mengalihkan halaman sambil mengirim pesan logout
header("location:../front end/index.html", true);
