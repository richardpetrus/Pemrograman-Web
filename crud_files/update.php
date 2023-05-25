<?php 
    require('fungsi.php');
    if(isset($_POST['kirim'])){
        
        if($_POST['file_baru']!==""){
            define('DB','Rincian_buku.txt');

            if(!file_exists(DB)){
                saveTxt(DB,"kodeBuku|judulBuku|pengarang|tahunTerbit|jumlahHalaman|penerbit|kategori|cover|".PHP_EOL,'a');
            }

            $Kode=$_GET['id'];
            $Kode=$_POST['Kode'];
            $Judul=$_POST['Judul'];
            $pengarang=$_POST['Pengarang'];
            $thn_terbit=$_POST['Tahun_terbit'];
            $jml_halaman=$_POST['jmlh_halaman'];
            $penerbit=$_POST['penerbit'];
            $kategori=$_POST['kategori'];
            $cover_baru=$_POST['file_baru'];

            $ubah=ubah($_GET['id']);
            $data=str_replace($ubah,"$Kode|$Judul|$pengarang|$thn_terbit|$jml_halaman|$penerbit|$kategori|$cover_baru|",file_get_contents(DB));
            saveTxt(DB,$data,'w'); 
        } else {
            define('DB','Rincian_buku.txt');

            if(!file_exists(DB)){
                saveTxt(DB,"kodeBuku|judulBuku|pengarang|tahunTerbit|jumlahHalaman|penerbit|kategori|cover|".PHP_EOL,'a');
            }

            $Kode=$_GET['id'];
            $Kode=$_POST['Kode'];
            $Judul=$_POST['Judul'];
            $pengarang=$_POST['Pengarang'];
            $thn_terbit=$_POST['Tahun_terbit'];
            $jml_halaman=$_POST['jmlh_halaman'];
            $penerbit=$_POST['penerbit'];
            $kategori=$_POST['kategori'];
            $cover_baru=$_POST['cover'];

            $ubah=ubah($_GET['id']);
            $data=str_replace($ubah,"$Kode|$Judul|$pengarang|$thn_terbit|$jml_halaman|$penerbit|$kategori|$cover_baru|",file_get_contents(DB));
            saveTxt(DB,$data,'w'); 
        }
            
        header('location:succed.php' );
    }
if(!empty($_GET['id'])){
	$rincian=ubah($_GET['id']);
	$rincian_buku=explode('|',$rincian);
                                       
    $Kode = $rincian_buku[0];
    $Judul = $rincian_buku[1];
    $pengarang = $rincian_buku[2];
    $thn_terbit = $rincian_buku[3];
    $jml_halaman = $rincian_buku[4];
    $penerbit = $rincian_buku[5];
    $kategori = $rincian_buku[6];
    $cover = $rincian_buku[7];
	
}
function ubah($id){
	$file1 = 'Rincian_buku.txt';
	$proses = @file($file1, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

	foreach ($proses as $rincian){
		$rincian_buku=explode('|',$rincian);
		$kode=$rincian_buku[0];
		if($kode==$id){
			$keluar=$rincian;
			break;
		}else{
			$keluar=null;
		}
	}
return $keluar;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
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
        <h2><u>Update Data</u></h2>
            <form action="" method="POST">
                <fieldset>
                    <legend>Form Data Buku</legend>
                    <table>
                        <tr>
                            <td>Kode Buku : </td>
                            <td><input type="text" name="Kode" value="<?=$Kode;?>" required></td>
                        </tr>
                        <tr>
                            <td>Judul Buku : </td>
                            <td><input type="text" name="Judul" value="<?=$Judul;?>" required></td>
                        </tr>
                        <tr>
                            <td>Pengarang : </td>
                            <td><input type="text" name="Pengarang" value="<?=$pengarang;?>" required></td>
                        </tr>
                        <tr>
                            <td>Tahun Terbit : </td>
                            <td><input type="text" name="Tahun_terbit" value="<?=$thn_terbit;?>" required></td>
                        </tr>
                        <tr>
                            <td>Jumlah Halaman : </td>
                            <td><input type="text" name="jmlh_halaman" value="<?=$jml_halaman;?>" required></td>
                        </tr>
                        <tr>
                            <td>Penerbit : </td>
                            <td><input type="text" name="penerbit" value="<?=$penerbit;?>" required></td>
                        </tr>
                        <tr>
                            <td>Kategori : </td>
                            <td><input type="text" name="kategori" value="<?=$kategori;?>" required></td>
                        </tr>
                        <tr>
                            <td>Cover : </td>
                            <td><input type="file" name="file_baru" /><input type="text" name="cover" value="<?=$cover;?>" required readonly></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Ubah" name="kirim"></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
</body>
</html>