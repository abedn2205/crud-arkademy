<?php
//koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "arkademy";
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "INSERT INTO produk VALUES (
        '', '$produk', '$keterangan', '$harga', '$jumlah'
    )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "UPDATE produk SET
                nama_produk = '$produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
            WHERE id = $id ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
