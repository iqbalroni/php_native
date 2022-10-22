<?php

include "../function/kategori.php";

$data_row = ShowKategori();

?>

<!DOCTYPE html>

<head>
    <title>Show Data Kategori</title>
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
            <a href="../barang/index.php" class="green">
                <button>Barang</button>
            </a>
            <a href="../kategori/index.php" class="blue">
                <button>Kategori</button>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="add">
            <h3>Tabel Kategori</h3>
            <hr>
            <div class="header">
                <div class="tombol">
                    <a href="create.php" class="green">
                        <button>Tambah Kategori</button>
                    </a>
                </div>
            </div>

            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Singkatan</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($data_row as $row) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama_kategori'] ?></td>
                        <td><?php echo $row['singkatan'] ?></td>
                        <td>
                            <a href="update.php?id=<?= $row['id_kategori'] ?>" class="yellow">
                                <button>Update</button>
                            </a>
                            <a href="hapus.php?id=<?php echo $row['id_kategori'] ?>" class="red">
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