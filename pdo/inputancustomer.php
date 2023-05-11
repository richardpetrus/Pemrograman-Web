<?php
include ('connect.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<form action="" method="post">
                        <fieldset>
                            <legend>Form input Customer</legend>
                            <table>
                                <tr>
                                    <td>Nomor Customer</td>
                                    <td> : </td>
                                    <td><input type="text" name="nomor"></td>
                                </tr>
                                <tr>
                                    <td>Nama Customer</td>
                                    <td> : </td>
                                    <td><input type="text" name="nama"></td>
                                </tr>
                                <tr>
                                    <td>Nama belakang</td>
                                    <td> : </td>
                                    <td><input type="text" name="akhir"></td>
                                </tr>
                                <tr>
                                    <td>Nama Depan</td>
                                    <td> : </td>
                                    <td><input type="text" name="awal"></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td> : </td>
                                    <td><input type="text" name="telp"></td>
                                </tr>
                                <tr>
                                    <td>Alamat 1</td>
                                    <td> : </td>
                                    <td><input type="text" name="alamat_1"></td>
                                </tr>
                                <tr>
                                    <td>Alamat 2</td>
                                    <td> : </td>
                                    <td><input type="text" name="alamat_2"></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td> : </td>
                                    <td><input type="text" name="kota"></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td> : </td>
                                    <td><input type="text" name="prov"></td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td> : </td>
                                    <td><input type="text" name="kodpos"></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td> : </td>
                                    <td><input type="text" name="negara"></td>
                                </tr>
                                <tr>
                                    <td>Nomor Pegawai</td>
                                    <td> : </td>
                                    <td><select name="nomor_pegawai">
                                        <option>--Pilih--</option>
                                        <?php
                                            $no = 1;
                                            $tampilNomorPegawai = $koneksi->query("SELECT * FROM employees");
                                            while($data = $tampilNomorPegawai->fetch(PDO::FETCH_ASSOC)):
                                        ?>
                                        <?php echo "<option>$data[employeeNumber]</option>"; ?>
                                            <?php endwhile ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Limit</td>
                                    <td> : </td>
                                    <td><input type="text" name="limit"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Simpan" name="kirim">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
    <?php
        if(isset($_POST['kirim'])){
            $nomor = $_POST['nomor'];
            $nama = $_POST['nama'];
            $akhir = $_POST['akhir'];
            $awal = $_POST['awal'];
            $telp = $_POST['telp'];
            $alamat_1 = $_POST['alamat_1'];
            $alamat_2 = $_POST['alamat_2'];
            $kota = $_POST['kota'];
            $prov = $_POST['prov'];
            $kodpos = $_POST['kodpos'];
            $negara = $_POST['negara'];
            $nomor_pegawai = $_POST['nomor_pegawai'];
            $limit = $_POST['limit'];

            $inputanCustomer = $koneksi->prepare("INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) 
                                        VALUES(:nomor, :nama, :akhir, :awal, :telp, :alamat_1, :alamat_2, :kota, :prov, :kodpos, :negara, :nomor_pegawai, :limit)");
            $inputanCustomer->bindParam(':nomor',$nomor);
            $inputanCustomer->bindParam(':nama',$nama);
            $inputanCustomer->bindParam(':akhir',$akhir);
            $inputanCustomer->bindParam(':awal',$awal);
            $inputanCustomer->bindParam(':telp',$telp);
            $inputanCustomer->bindParam(':alamat_1',$alamat_1);
            $inputanCustomer->bindParam(':alamat_2',$alamat_2);
            $inputanCustomer->bindParam(':kota',$kota);
            $inputanCustomer->bindParam(':prov',$prov);
            $inputanCustomer->bindParam(':kodpos',$kodpos);
            $inputanCustomer->bindParam(':negara',$negara);
            $inputanCustomer->bindParam(':nomor_pegawai',$nomor_pegawai);
            $inputanCustomer->bindParam(':limit',$limit);

            if ($inputanCustomer->execute()) {
                echo "Data customer berhasil diinput";
            } else {
                echo "Data customer gagal diinput";
            }
        }
    ?>
</body>
</html>