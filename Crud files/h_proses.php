<?php 
require('fungsi.php');

if(!empty($_GET['id'])){
	dell($_GET['id']);
	header('location:hapus.php');
    
}else{
	header('location:hapus.php');
}

function dell($id){
	$db = 'Rincian_buku.txt';
	$proses = @file($db, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	foreach ($proses as $rincian){
		$rincian_buku = explode('|',$rincian);
		$kode = $rincian_buku[0];
		if($kode==$id){
			$keluar = $rincian;
			$Dell = str_replace($keluar.PHP_EOL,'',file_get_contents($db));
			saveTxt($db,$Dell,'w');
			break;
		}else{
			$keluar = null;
		}
		
	}
	
return $keluar;
}
?>