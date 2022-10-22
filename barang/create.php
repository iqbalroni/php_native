<?php

include "../function/barang.php";
include "../function/kategori.php";

if (isset($_POST['simpan'])) {
    CreateData($_POST);
}

$kategori = ShowKategori();

?>

<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="content">
        <form action="" method="POST" class="add">
            <h3>Tambah Barang</h3>
            <hr>
            <img src="../assets/image-1.jpg">
            <label>Nama barang</label>
            <input type="text" name="nama_barang" placeholder="Nama Barang" required>
            <label>Stok barang</label>
            <input type="number" name="stok_barang" placeholder="Stok Barang" required>
            <label>Harga barang</label>
            <input type="number" name="harga_barang" placeholder="Harga" required>
            <label>Type barang</label>
            <select name="type" required>
                <option value="">Pilih Type</option>
                <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
                <?php endforeach ?>
            </select>
            <label>Deskripsi</label>
            <textarea name="desk" id="" cols="30" rows="3" placeholder="Deskripsi"></textarea>
            <div class="green">
                <button type="submit" name="simpan">Simpan Data</button>
            </div>
        </form>
    </div>
</body>

</html>