<?php
    $main = "localhost";
    $pengguna = "root";
    $pass = "";
    $dabase ="project";

    try{
        $koneksi = new PDO("mysql:host=$main;dbname=$dabase", $pengguna, $pass);
        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $error){
        $error->getMessage();
    }

?>

