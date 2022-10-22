<?php

include "../function/kategori.php";

if (isset($_POST['simpan'])) {
    $data_row = AddKategori($_POST);
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
            <input type="text" name="kategori" placeholder="Kategori Barang" required>
            <label>Singkatan</label>
            <input type="text" name="singkatan" placeholder="singkatan" required>
            <div class="green">
                <button type="submit" name="simpan">Simpan Data</button>
            </div>
        </form>
    </div>
</body>

</html>