<?php 
    require('fungsi.php');
    if(isset($_POST['kirim'])){
        define('DB','Rincian_buku.txt');
        if(!file_exists(DB)){
            saveTxt(DB,"kodeBuku|judulBuku|pengarang|tahunTerbit|jumlahHalaman|penerbit|kategori|cover|".PHP_EOL,'a');
        }

        $proses = @file(DB, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
        $kode=$_POST['Kode'];
        $judul=$_POST['judul'];
        $pengarang=$_POST['pengarang'];
        $tahun_terbit=$_POST['Tahun_terbit'];
        $jmlh_halaman=$_POST['jmlh_halaman'];
        $penerbit=$_POST['Penerbit'];
        $jenis_buku=$_POST['kategori'];
        $cover=$_POST['cover'];
        saveTxt(DB,"$kode|$judul|$pengarang|$tahun_terbit|$jmlh_halaman|$penerbit|$jenis_buku|$cover|".PHP_EOL,'a');
        
        header('location:succed.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
</head>
<body>
    <h1>DATA BUKU</h1>
    <?php
    $file1 = "Rincian_buku.txt";
    $data = file($file1);
    $hitung = count($data);
    echo "Jumlah data = ".$hitung-1; 
    ?>
    <ol>
        <li>
            <a href="view.php">TAMPILKAN DATA</a>
        </li>
        <li>
            <a href="add.php">TAMBAHKAN DATA</a>
        </li>
        <li>
            <a href="viewUpdate.php">UPDATE DATA</a>
        </li>
        <li>
            <a href="viewDelete.php">HAPUS</a>
        </li>
    </ol>
    <h2><u>TAMBAHKAN DATA</u></h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Form</legend>
            <table>
                <tr>
                    <td>Kode : </td>
                    <td><input type="text" name="Kode" required></td>
                </tr>
                <tr>
                    <td>Judul : </td>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <td>Pengarang : </td>
                    <td><input type="text" name="pengarang" required></td>
                </tr>
                <tr>
                    <td>Tahun Terbit : </td>
                    <td><input type="text" name="Tahun_terbit" required></td>
                </tr>
                <tr>
                    <td>Jmlh Halaman : </td>
                    <td><input type="text" name="jmlh_halaman" required></td>
                </tr>
                <tr>
                    <td>Penerbit : </td>
                    <td><input type="text" name="Penerbit" required></td>
                </tr>
                <tr>
                    <td>Kategori : </td>
                    <td><input type="text" name="kategori" required></td>
                </tr>
                <tr>
                    <td>cover : </td> 
                    <td><input type="file" name="cover" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Tambahkan" name="kirim" ></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>