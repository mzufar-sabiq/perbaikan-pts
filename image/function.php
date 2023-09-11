<?php
$conn = mysqli_connect("localhost", "root", "", "db_alumni");

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

    $Nama_alumni = $data["Nama_alumni"];
    $Jurusan = $data["Jurusan"];
    $Tahun_lulus = $data["Tahun_lulus"];
    $Pasca_lulus = $data["Pasca_lulus"];

    $query = "INSERT INTO tb_alumni VALUES 
    ('', '$Nama_alumni', '$Jurusan', '$Tahun_lulus', '$Pasca_lulus' )";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_alumni WHERE id = $id");
    mysqli_affected_rows($conn);

}
?>