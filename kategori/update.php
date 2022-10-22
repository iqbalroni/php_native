<?php

include "../function/kategori.php";

$id = $_GET['id'];
$detail = DetailKategori($id);

if (isset($_POST['simpan'])) {
    UpdateKategori($_POST, $id);
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
            <h3>Kategori Barang</h3>
            <hr>
            <img src="../assets/image-1.jpg">
            <label>Kategori</label>
            <input value="<?= $detail['nama_kategori'] ?>" type="text" name="kategori" placeholder="Kategori Barang" required>
            <label>Singkatan</label>
            <input value="<?= $detail['singkatan'] ?>" type="text" name="singkatan" placeholder="singkatan" required>
            <div class="green">
                <button type="submit" name="simpan">Simpan Data</button>
            </div>
        </form>
    </div>
</body>

</html>