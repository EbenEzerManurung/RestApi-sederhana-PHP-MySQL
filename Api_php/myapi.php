<?php

//koneksi ke database mysql
include "conn.php";



//membuat query/sql untuk mengambil seluruh data pegawai
$sql = "SELECT * FROM pegawai";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query) ){

// echo $data["kode_pegawai"]."";

$item[] = array(
    'kode_pegawai' =>$data["kode_pegawai"],
    'nama_pegawai'=>$data["nama_pegawai"],
    'alamat'=>$data["alamat"]

);

}



$response = array(
    'status'=>'Okay',
    'item'=>$item

);

echo json_encode($response);




?>