<?php 
require 'functions.php';

$id = $_GET["id"];

$pro = query("SELECT * FROM produk WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "<script>
        alert('Data Berhasil di ubah');
        document.location.href = 'index.php'
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal di ubah');
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
<h1>Form Ubah Produk</h1>
    <div>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $pro["id"]; ?>">

            <li>
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" required value="<?= $pro["nama_produk"]; ?>">
            </li>
            <br>
            <li>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" required value="<?= $pro["keterangan"]; ?>">
            </li>
            <br>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" required value="<?= $pro["harga"]; ?>">
            </li>
            <br>
            <li>
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah" required value="<?= $pro["jumlah"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>

        </form>
    </div>
</body>
</html>