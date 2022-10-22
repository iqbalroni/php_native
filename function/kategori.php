<?php

include "koneksi.php";

function ShowKategori()
{
    global $koneksi;
    $query = mysqli_query($koneksi, "SELECT * FROM kategori");

    $result = [];
    $nomor = 1;
    while ($data = mysqli_fetch_assoc($query)) {
        $result[] = $data;
    };

    return $result;
}

function AddKategori($data)
{
    global $koneksi;

    $kategori = htmlspecialchars($data['kategori']);
    $singkatan = strtoupper(htmlspecialchars($data['singkatan']));

    mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori,singkatan) 
    VALUES ('$kategori','$singkatan')");

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location:index.php');
    } else {
        echo (mysqli_error($koneksi));
    }
}

function DetailKategori($id)
{
    global $koneksi;

    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori.id_kategori = '$id' ");

    $result = mysqli_fetch_assoc($query);

    return $result;
}

function DeleteKategori($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM kategori WHERE kategori.id_kategori = '$id' ");

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location:index.php');
    } else {
        echo (mysqli_error($koneksi));
    }
}

function UpdateKategori($data, $id)
{
    global $koneksi;

    $kategori = htmlspecialchars($data['kategori']);
    $singkatan = strtoupper(htmlspecialchars($data['singkatan']));

    mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$kategori',singkatan='$singkatan' WHERE kategori.id_kategori = '$id'");

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location:index.php');
    } else {
        echo (mysqli_error($koneksi));
    }
}
