<?php

include "../function/barang.php";

$detail = DetailData($_GET['kode']);

?>

<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>

<body>
    <div class="content">
        <div class="add">
            <h3>Detail <?= $detail['nama_produk'] ?></h3>
            <hr>
            <img src="../assets/image.png">

            <div class="text">
                <div class="qrcode" id="qrcode"></div>
                <h3>Nama Barang :</h3>
                <h4><?= $detail['nama_produk'] ?></h4>
                <h3>Stok Barang :</h3>
                <h4>Total <?= $detail['stok'] ?> Barang Keseluruhan</h4>
                <h3>Harga Barang :</h3>
                <h4>Rp.<?= $detail['harga'] ?></h4>
                <h3>Type Barang :</h3>
                <h4><?= $detail['nama_kategori'] ?> | <?= $detail['singkatan'] ?></h4>

                <h3>Deskripsi :</h3>
                <h4><?= $detail['deskripsi'] ?></h4>
                <hr>
                <h3>Total Harga Semua Stok Rp.<?= $detail['stok'] * $detail['harga'] ?></h3>

                <p id="kode" hidden>Kode : <?= $detail['kode_produk'] ?> | Nama : <?= $detail['nama_produk'] ?></p>
            </div>
            <br>
            <a href="index.php" class="blue">
                <button>Kembali</button>
            </a>
        </div>
    </div>
</body>
<script type="text/javascript">
    var isi = document.getElementById("kode").innerHTML;
    new QRCode(document.getElementById("qrcode"), isi);
</script>

</html>