<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
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
            <h2><u>Hapus Data</u></h2>
                <table border=1>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Jumlah Halaman</th>
                            <th>Penerbit</th>
                            <th>Kategori</th>
                            <th>Cover</th>
							<th>Pilih baris yg ingin dihapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('fungsi.php');
                        define('DB','Rincian_buku.txt');

                        if(!file_exists(DB)){
                            saveTxt(DB, "kode buku|judul buku|pengarang|tahun terbit|jumlah halaman|penerbit|kategori|cover|".PHP_EOL, 'a');
                        }

                        $proses = @file(DB, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                        $nomor = 1;
                        $a = 0;
                        foreach($proses as $rincian){
                            if($a == 0){} else {
                                $rincian_buku = explode('|',$rincian);
                                       
                                $Kode = $rincian_buku[0];
                                $Judul = $rincian_buku[1];
                                $pengarang = $rincian_buku[2];
                                $thn_terbit = $rincian_buku[3];
                                $jml_halaman = $rincian_buku[4];
                                $penerbit = $rincian_buku[5];
                                $kategori = $rincian_buku[6];
                                $cover = $rincian_buku[7];
                        ?>
                        <tr>
                            <td><?=$nomor;?></td>
                            <td><?=$Kode;?></td>
                            <td><?=$Judul;?></td>
                            <td><?=$pengarang;?></td>
                            <td><?=$thn_terbit;?></td>
                            <td><?=$jml_halaman;?></td>
                            <td><?=$penerbit;?></td>
                            <td><?=$kategori;?></td>
                            <td><a href="<?=$cover; ?>" target="_blank"><?=$cover;?></a></td>
							<td><a href="delete.php?id=<?=$Kode;?>">pilih</a></td>
                        </tr>
                        <?php 
                        $nomor++;
                        }
                        $a++;
                        } 
                        ?>
                    </tbody>
                </table>
</body>
</html>