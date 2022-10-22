<?php

include "koneksi.php";

function ShowData()
{
    global $koneksi;
    $query = mysqli_query($koneksi, "SELECT * FROM produk 
    JOIN kategori ON produk.type = kategori.id_kategori");

    $result = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $result[] = $data;
    };

    return $result;
}

function SearchData($key)
{
    global $koneksi;
    $query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON 
    produk.type = kategori.id_kategori WHERE nama_produk LIKE '%$key%'");

    $result = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $result[] = $data;
    };

    return $result;
}

function DetailData($kode)
{
    global $koneksi;
    // $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE
    // produk.kode_produk = '$kode' ");
    $query = mysqli_query($koneksi, "SELECT * FROM produk 
    JOIN kategori ON produk.type = kategori.id_kategori WHERE produk.kode_produk = '$kode' ");

    $hasil = mysqli_fetch_assoc($query);

    // if (count($hasil) <= 0) {
    //     header('Location:index.php');
    // }

    return $hasil;
}

function DeleteData($id)
{
    global $koneksi;
    $query = mysqli_query($koneksi, "DELETE FROM produk WHERE produk.id_produk = '$id' ");

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location:index.php');
    } else {
        echo (mysqli_error($koneksi));
    }
}

function CreateData($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data['nama_barang']);
    $stok = htmlspecialchars($data['stok_barang']);
    $harga = htmlspecialchars($data['harga_barang']);
    $type = htmlspecialchars($data['type']);
    $desk = htmlspecialchars($data['desk']);
    $kode = strtoupper(substr(md5(microtime()), rand(0, 26), 6)); // generate random code

    mysqli_query($koneksi, "INSERT INTO produk (nama_produk,stok,harga,type,kode_produk,deskripsi) 
    VALUES ('$nama','$stok','$harga','$type','$kode','$desk') ");

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location:index.php');
    } else {
        echo (mysqli_error($koneksi));
    }
}

function updateData($data, $kode)
{
    global $koneksi;

    $nama = htmlspecialchars($data['nama_barang']);
    $stok = htmlspecialchars($data['stok_barang']);
    $harga = htmlspecialchars($data['harga_barang']);
    $type = htmlspecialchars($data['type']);
    $desk = htmlspecialchars($data['desk']);

    mysqli_query($koneksi, "UPDATE produk SET 
    nama_produk = '$nama',stok = '$stok',harga = '$harga',type = '$type' , deskripsi = '$desk'
    WHERE produk.kode_produk = '$kode' ");

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location:index.php');
    } else {
        echo (mysqli_error($koneksi));
    }
}
