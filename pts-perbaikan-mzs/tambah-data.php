<?php
require 'functions.php';

if( isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'tabel.php';
        </script>  
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'tabel.php';
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
            height: 300px;
            background-color: grey;
            margin: auto;
            border: 3px solid black;
        }
        form ul input{
            width: 250px;
            height: 30px;
            margin-left: 100px;
            margin-top: 20px;
            margin-left: 80px;
            border-radius: 0.5em;
        }
        select {
            width: 260px;
            height: 30px;
            margin-left: 100px;
            margin-top: 20px;
            margin-left: 80px;
            border-radius: 0.5em;
            font-weight: bold;
        }
        .btn {
            margin-left: 180px;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Tambah data dokumen</h1>
    <div class="container">
        <br>
        <form method="post">
            <ul style="list-style: none;">
                <li>
                    <label></label>
                    <input type="text" name="Nama_dokumen" id="Nama_dokumen" placeholder="Nama dokumen" required>
                </li>
                <li>
                    <label></label>
                    <select name="Jenis_dokumen" id="Jenis_dokumen" >
                        <option value="Dokumen kurikulum">Dokumen kurikulum</option>
                        <option value="Dokumen kesiswaan">Dokumen kesiswaan</option>
                        <option value="Dokumen humas">Dokumen humas</option>
                        <option value="Dokumen sarpras">Dokumen sarpras</option>
                    </select>
                </li>
                <li>
                    <label></label>
                    <input type="text" name="Pembuat_dokumen" id="Pembuat_dokumen" placeholder="Pembuat dokumen" required>
                </li>
            </ul>
            <div class="btn">
                <button type="submit" name="submit" style="background-color: green; color: white;">Tambah</button>
                <button type="button" style="background-color: blue;"><a href="tabel.php" style="text-decoration: none;  color: white;">Kembali</a></button>
            </div>
        </form>
    </div>
</body>
</html>