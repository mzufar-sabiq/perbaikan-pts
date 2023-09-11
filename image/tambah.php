<?php
require 'function.php';

if( isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan!');
        documen.location.href = 'lat-pts.php';
        </script>  
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan!');
        documen.location.href = 'lat-pts.php';
        </script>  
        ";
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <style>
        .container {
            width: 500px;
            height: 500px;
            background-color: grey;
            margin: auto;
            border: 3px solid black;
        }
        form ul input{
            width: 250px;
            height: 20px;
            margin-left: 100px;
            margin-top: 20px;
            margin-left: 80px;
            border-radius: 0.5em;
        }
        .btn {
            margin-left: 180px;
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <h1 style="text-align: center;">Tambah data alumni</h1>
        <form method="post">
            <ul style="list-style: none;">
                <li>
                    <label></label>
                    <input type="text" name="Nama_alumni" id="Nama_alumni" placeholder="Masukkan nama alumni" required>
                </li>
                <li>
                    <label></label>
                    <input type="text" name="Jurusan" id="Jurusan" placeholder="Jurusan" required>
                </li>
                <li>
                    <label></label>
                    <input type="text" name="Tahun_lulus" id="Tahun_lulus" placeholder="Masukkan tahun lulus" required>
                </li>
                <li>
                    <label></label>
                    <input type="text" name="Pasca_lulus" id="Pasca_lulus" placeholder="Masukkan pasca lulus" required>
                </li>
            </ul>
            <div class="btn">
                <button type="submit" name="submit" style="background-color: green; color: white;">Tambah</button>
                <button type="button" style="background-color: blue;"><a href="lat-pts.php" style="text-decoration: none;  color: white;">Kembali</a></button>
            </div>
        </form>
    </div>
</body>
</html>