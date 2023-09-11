<?php
require 'function.php';
$alumnisa = query("SELECT * FROM tb_alumni");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .container {
            width: 900px;
            height: 700px;
            background-color: green;
            margin: auto;
            font-family: arial;
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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
        <br>
        <h1 style="text-align: center;">Sistem Pendataan Alumni SMKSA</h1>
        <br>
        <br>
        <table border="1" cellspacing="2" cellpadding="10" style="background-color: white;">
            <tr style="background-color: white;">
                <th>Id</th>
                <th>Nama_alumni</th>
                <th>Jurusan</th>
                <th>Tahun_lulus</th>
                <th>Pasca_lulus</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($alumnisa as $alm) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $alm["Nama_alumni"]; ?></td>
                <td><?= $alm["Jurusan"]; ?></td>
                <td><?= $alm["Tahun_lulus"]; ?></td>
                <td><?= $alm["Pasca_lulus"]; ?></td>
                <td><a href="hapus.php?id=<?= $alm['Id'] ?>" oneclick="return confirm('Apakah anda yakin ingin menghapus data ini');" style="text-decoration: none; background-color: blue; color: white; padding: 5px; font-style: bold;">Hapus</a></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ; ?>
        </table>
        </div>

        <br><br>
        <button style="background-color: green; width: 100px; height: 30px; border-radius: 0.5em; margin-left: 400px; "><a href="tambah.php" style="text-decoration: none; font-style: bold; color: white;">Tambah data</a></button>
    </div>

</body>
</html>

<!-- <td><a href="hapus.php?id='<?= $alm['Id'] ?>'" onclick="confirm('yakin')">Hapus</a></td> -->