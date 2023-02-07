<?php
//include koneksi database
include "conn.php";

// echo "update pegawai";

//menangkap variable parameter get
$id = $_GET['id'];
// echo $id;

//Bagian yang mau diupdate
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];

$sql = "UPDATE `pegawai` SET `nama_pegawai` = '".$nama_pegawai."', 
`alamat` = '".$alamat."'
WHERE `pegawai`.`id_pegawai` = ".$id.";";
    echo $sql;

//Running Query
$query = mysqli_query($conn, $sql);
if($query){
    if($query){
        $msg = "update data pegawai berhasil";
    }else{
        $msg = "update data pegawai gagal";
    }
    
}

$response = array(
    'status'=>'okey',
    'pesan'=>$msg
);

echo json_encode($response);
?>