<?php
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus sesi dari penyimpanan
session_destroy();

// Arahkan pengguna kembali ke halaman login
header('Location: index.php');
exit();
?>
