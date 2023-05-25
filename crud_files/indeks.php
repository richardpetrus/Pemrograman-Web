<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
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
</body>
</html>