<?php

include "../function/barang.php";
include "../function/kategori.php";

$kode = $_GET['kode'];

$detail = DetailData($kode);
$kategori = ShowKategori();

if (isset($_POST['simpan'])) {
    updateData($_POST, $kode);
}

?>

<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="content">
        <form action="" method="POST" class="add">
            <h3>Edit Barang</h3>
            <hr>
            <img src="../assets/image-2.jpg">
            <label>Nama barang</label>
            <input value="<?= $detail['nama_produk'] ?>" type="text" name="nama_barang" placeholder="Nama Barang" required>
            <label>Stok barang</label>
            <input value="<?= $detail['stok'] ?>" type="number" name="stok_barang" placeholder="Stok Barang" required>
            <label>Harga barang</label>
            <input value="<?= $detail['harga'] ?>" type="number" name="harga_barang" placeholder="Harga" required>
            <label>Type barang</label>
            <select name="type" required>
                <option value="<?= $detail['type'] ?>"><?= $detail['nama_kategori'] ?></option>
                <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
                <?php endforeach ?>
            </select>
            <label>Deskripsi</label>
            <textarea name="desk" id="" cols="30" rows="3" placeholder="Deskripsi"><?= $detail['deskripsi'] ?></textarea>
            <div class="green">
                <button type="submit" name="simpan">Simpan Data</button>
            </div>
        </form>
    </div>
</body>

</html>