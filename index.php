<?php

include "function/barang.php";
include "function/kategori.php";

$total_barang = count(ShowData());
$total_kategori = count(ShowKategori());

?>

<!DOCTYPE html>

<head>
    <title>Show Data Kategori</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar">
        <div class="bar">
            <h3>Menu Aplikasi</h3>
            <hr>
            <a href="#" class="blue">
                <button>Home</button>
            </a>
            <a href="barang/index.php" class="green">
                <button>Barang</button>
            </a>
            <a href="kategori/index.php" class="green">
                <button>Kategori</button>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="add">
            <h3>Dashboard Aplikasi</h3>
            <hr>
            <div class="row">
                <div class="box" style="background-color: #f96666;">
                    <h1><?= $total_barang ?></h1>
                    <h3>Total Barang Yang Terdaftar</h3>
                    <a href="barang/index.php" class="blue">
                        <button>Selengkapnya</button>
                    </a>
                </div>
                <div class="box" style="background-color: #ffb200;">
                    <h1><?= $total_kategori ?></h1>
                    <h3>Kategori Yang Terdaftar</h3>
                    <a href="kategori/index.php" class="blue">
                        <button>Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>