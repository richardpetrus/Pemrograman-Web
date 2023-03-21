<?php
include ('connect.php') ?>
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
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM employees");
                                            while($data = mysqli_fetch_array($ambil)){
                                                echo "<option value=$data[employeeNumber]> $data[employeeNumber] </option>";
                                            }
                                        ?>
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
                            mysqli_query($koneksi, "INSERT INTO customers set
                            customerNumber = '$_POST[nomor]',
                            customerName = '$_POST[nama]',
                            contactLastName = '$_POST[akhir]',
                            contactFirstName = '$_POST[awal]',
                            phone = '$_POST[telp]',
                            addressLine1 = '$_POST[alamat_1]',
                            addressLine2 = '$_POST[alamat_2]',
                            city = '$_POST[kota]',
                            state = '$_POST[prov]',
                            postalCode = '$_POST[kodpos]',
                            country = '$_POST[negara]',
                            salesRepEmployeeNumber = '$_POST[nomor_pegawai]',
                            creditLimit = '$_POST[limit]'");

                            echo "Tambah data customer berhasil";
                        }
                    ?>
</body>
</html>