<?php
require 'functions.php';
$produk = query("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy</title>
</head>

<body>

    <h1>Halaman Utama</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Button</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($produk as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <?= $row["nama_produk"]; ?>
                </td>
                <td><?= $row["keterangan"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["jumlah"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>||
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>


    </table>
    <br>
    <a href="tambah.php">Insert</a>
</body>

</html>