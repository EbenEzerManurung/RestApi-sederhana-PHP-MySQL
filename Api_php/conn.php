<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "api_php1";

$conn = mysqli_connect($servername, $username, $password, $databasename);
 if(!$conn) {
    die("koneksi tidak berhasil");
}

?>