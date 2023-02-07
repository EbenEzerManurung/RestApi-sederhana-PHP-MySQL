<?php
//koneksi ke database mysql
include "conn.php";


// $id_pegawai = isset($_POST["id_pegawai"]) ? $_POST['id_pegawai'] : "";
//mendapatkan variable post
$kode_pegawai = isset($_POST["kode_pegawai"]) ? $_POST["kode_pegawai"] : "";
//nama pegawai
$nama_pegawai = isset($_POST['nama_pegawai']) ? $_POST['nama_pegawai'] : "";
//alamat
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";

//query menambahkan data
$sql = "INSERT INTO `pegawai` (`kode_pegawai`, `nama_pegawai`, `alamat`)
VALUES ('".$kode_pegawai."', '".$nama_pegawai."', '".$alamat."');";
// echo $sql;
$sql= "INSERT INTO `pegawai` (`kode_pegawai`, `nama_pegawai`, `alamat`) 
VALUES ('".$kode_pegawai."', '".$nama_pegawai."', '".$alamat."');";

//running Query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "simpan data pegawai berhasil";
}else{
    $msg = "simpan data pegawai gagal";
}

// echo $msg;

$response = array(
    'status'=>'okey',
    'pesan'=>$msg
);

echo json_encode($response);

?>
