<?php
$main = "localhost";
$pengguna = "root";
$pass = "";
$dabase ="project";

$koneksi = mysqli_connect($main,$pengguna,$pass);
if($koneksi){
    $open = mysqli_select_db($koneksi,$dabase);
    echo "Database terhubung";
    if (!$koneksi){
        echo"Koneksi gagal";
    }
} else {
    echo "MySQL tidak terhubung";
}
?>
