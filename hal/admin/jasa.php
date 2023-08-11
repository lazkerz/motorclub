<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa</title>
    <!-- Jangan lupa untuk memasukkan skrip Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../stylesheet.css">
</head>
<body>
    <section class="jasa-section">
    <div class="container popular-product">
        <h3>Product</h4>
        <!-- <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">Tambah Produk</button> -->
            <div class="product">
                <div class="product-list">
                    <div class="product-image">
                        <img src="../../docs/assets/images/helm.webp">
                    </div>
                    <div class="product-name">
                    <?php
                    require("../../koneksi.php");

                    $query = "SELECT nama_brg, deskripsi FROM produk";
                    $result = mysqli_query($koneksi, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                    echo '<h4>' . $row['nama_brg'] . '</h4>';
                    echo '<p>' . $row['deskripsi'] . '</p>';
                    break; // Keluar dari perulangan setelah baris pertama
                    }
                    ?>
                    
                    </div>
                </div>
                    <div class="product-list">
                        <div class="product-image">
                            <img src="../../docs/assets/images/glove.webp">
                        </div>
                        <div class="product-name">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<h4>' . $row['nama_brg'] . '</h4>';
                        break; // Keluar dari perulangan setelah baris kedua
                        }
                        ?>
                        <p>Gloves Urban Riders adalah pasangan setia Anda dalam setiap petualangan motor.</p>
                    </div>
                    </div>
                        <div class="product-list">
                            <div class="product-image">
                                <img src="../../docs/assets/images/tire.webp">
                            </div>
                            <div class="product-name">
                                <h4>Tire and Wheels</h4>
                                    <p>Tire and Wheels Urban Riders adalah kunci keandalan Anda di setiap perjalanan. Seperti detak jantung yang kuat, roda ini membawa Anda melintasi jalanan dengan ketenangan pikiran. </p>
                                </div>
                            </div>
                            <div class="product-list">
                                <div class="product-image">
                                    <img src="../../docs/assets/images/jacket.webp">
                                </div>
                                <div class="product-name">
                                    <h4>Jacket</h4>
                                        <p>Jacket Urban Riders adalah lapisan perlindungan yang menggabungkan keselamatan dan gaya dalam harmoni. Dirancang untuk menahan angin dan cuaca buruk, jacket kami memberikan perlindungan yang tak tertandingi. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Produk Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="tambah_produk.php" method="post">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
                    </section>

<section class="jasa-section">
    <div class="container popular-product">
        <h3>Service</h4>
            <div class="product">
                <div class="product-list">
                    <div class="product-image">
                        <img src="../../docs/assets/images/pelatihan.webp">
                    </div>
                    <div class="product-name">
                        <h4>Pelatihan Motor</h4>
                            <p>Belum pernah berkendara? Tenang. Cari tahu apa yang diperlukan untuk menjadi pengendara baru dan rasakan kenyamanan saat menunggangi motor.  Pelajari keterampilan yang Anda butuhkan untuk berkendara dengan percaya diri.</p>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="product-image">
                            <img src="../../docs/assets/images/sewa.webp">
                        </div>
                        <div class="product-name">
                            <h4>Sewa Motor</h4>
                                <p>Rasakan petualangan berkendara terbaik dengan menyewa motor dari penyewaan resmi Urban Riders®  Authorized Rentals serta EagleRider Rentals and Tours. Liburan, reuni, perjalanan bisnis.</p>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-image">
                                <img src="../../docs/assets/images/modif.webp">
                            </div>
                            <div class="product-name">
                                <h4>Modification</h4>
                                    <p>Sepatu ini dapat menunjang penampilan sehari-harimu dengan tampilan yang stylish dan nyaman untuk digunakan. </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section class="offer-section">
                        <div class="container-offer">
                            <h1>Dapatkan diskon 10%</h1>
                            <p>Dapatkan penawaran pada pembelian pertama melalui website ini sebesar 10%.</p>
                            <button class="btn-offer">Belanja Sekarang</button>
                        </div>
                    </section>
</section>
</body>
</html>