<?php
require("../../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST["nama_produk"];
    $deskripsi_produk = $_POST["deskripsi_produk"];
    
    $query = "INSERT INTO produk (nama_brg, deskripsi) VALUES ('$nama_produk', '$deskripsi_produk')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman yang ditampilkan setelah menambah data
        header("Location: index.php?p=produk");
        exit;
    } else {
        // Handling jika terjadi kesalahan
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
