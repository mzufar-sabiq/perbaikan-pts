<?php
$conn = mysqli_connect("localhost", "root", "", "db_simsa");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
    $rows [] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $Nama_dokumen = $data["Nama_dokumen"];
    $Jenis_dokumen = $data["Jenis_dokumen"];
    $Pembuat_dokumen = $data["Pembuat_dokumen"];

    $query = "INSERT INTO tb_dokumen VALUES 
    ('', '$Nama_dokumen', '$Jenis_dokumen', '$Pembuat_dokumen')";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_dokumen WHERE id = $id");
    mysqli_affected_rows($conn);

}
?>
