<?php

include "../function/barang.php";

if (isset($_GET['key'])) {
    $data_row = SearchData($_GET['key']);
} else {
    $data_row = ShowData();
}

?>

<!DOCTYPE html>

<head>
    <title>Show Data Siswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="navbar">
        <div class="bar">
            <h3>Menu Aplikasi</h3>
            <hr>
            <a href="../index.php" class="green">
                <button>Home</button>
            </a>
            <a href="../barang/index.php" class="blue">
                <button>Barang</button>
            </a>
            <a href="../kategori/index.php" class="green">
                <button>Kategori</button>
            </a>
        </div>
    </div>
    <div class="content" >
        <div class="add">
            <h3>Tabel Barang</h3>
            <hr>
            <div class="header">
                <form action="" method="GET" class="cr">
                    <input type="text" name="key" placeholder="Search" required>
                    <button type="submit">Cari</button>
                </form>

                <div class="tombol">
                    <?php if (isset($_GET['key'])) { ?>
                        <a href="index.php" class="yellow">
                            <button>Tampilkan Semua Data</button>
                        </a>
                    <?php } ?>
                    <a href="create.php" class="green">
                        <button>Tambah Data</button>
                    </a>
                </div>
            </div>

            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Type</th>
                    <th>Stok Produk</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($data_row as $row) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['kode_produk'] ?></td>
                        <td><?php echo $row['nama_produk'] ?></td>
                        <td><?php echo $row['nama_kategori'] ?></td>
                        <td><?php echo $row['stok'] ?> Barang</td>
                        <td>
                            <a href="detail.php?kode=<?= $row['kode_produk'] ?>" class="blue">
                                <button>Detail</button>
                            </a>
                            <a href="update.php?kode=<?= $row['kode_produk'] ?>" class="yellow">
                                <button>Update</button>
                            </a>
                            <a href="hapus.php?id=<?php echo $row['id_produk'] ?>" class="red">
                                <button>Hapus</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>