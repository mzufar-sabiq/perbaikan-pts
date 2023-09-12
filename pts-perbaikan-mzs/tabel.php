<?php
require 'functions.php';
$simsa = query("SELECT * FROM tb_dokumen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        .container {
            width: 900px;
            height: 700px;
            background-color: green;
            margin: auto;
            font-family: arial;
            border-radius: 0.5em;
        }
        .main form input {
            margin-left: 625px;
            height: 20px;
            padding:  5px 20px 5px 20px;
        }
        .main table {
            margin: auto;
            width: 900px
            text-align: center;
            border: 3px solid black;
            font-weight: bold;

        }
    </style>
</head>
<body>
<div class="container">
        <div class="main">
        <br>
        <h1 style="text-align: center;">Sistem Pendataan Dokumen SMKSA</h1>
        <br>
        <br>
        <table border="1" cellspacing="2" cellpadding="10" style="background-color: white;">
            <tr style="background-color: white;">
                <th>Id</th>
                <th>Nama_dokumen</th>
                <th>Jenis_dokumen</th>
                <th>Pembuat_dokumen</th>

                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($simsa as $ss) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $ss["nama_dokumen"]; ?></td>
                <td><?= $ss["jenis_dokumen"]; ?></td>
                <td><?= $ss["pembuat_dokumen"]; ?></td>
                <td><a href="hapuss.php?id=<?= $ss['Id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini');" style="text-decoration: none; background-color: blue; color: white; padding: 5px;">Hapus</a></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ; ?>
        </table>
        </div>

        <br><br>
        <button style="background-color: blue; width: 100px; height: 30px; border-radius: 0.5em; margin-left: 400px; "><a href="tambah-data.php" style="text-decoration: none; font-weight: bold; color: white;">Tambah data</a></button>
    </div>

</body>
</html>