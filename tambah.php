<?php
require 'functions.php';
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'index.php'
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Produk</h1>
    <div>
        <form action="" method="POST">

            <li>
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk">
            </li>
            <br>
            <li>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan">
            </li>
            <br>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga">
            </li>
            <br>
            <li>
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>

        </form>
    </div>

</body>

</html>