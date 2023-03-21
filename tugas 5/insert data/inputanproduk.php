<?php
include('connect.php')?>
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
                            <legend>Input Produk</legend>
                            <table>
                                <tr>
                                    <td>Kode</td>
                                    <td> : </td>
                                    <td><input type="text" name="kode"></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td> : </td>
                                    <td><input type="text" name="nama"></td>
                                </tr>
                                <tr>
                                    <td>Product Line</td>
                                    <td> : </td>
                                    <td><select name="prod_line">
                                        <option>--Pilih--</option>
                                        <?php
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM productlines");
                                            while($data = mysqli_fetch_array($ambil)){
                                                echo "<option value=$data[productLine]> $data[productLine] </option>";
                                            }
                                        ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>skala</td>
                                    <td> : </td>
                                    <td><input type="text" name="skala"></td>
                                </tr>
                                <tr>
                                    <td>Vendor</td>
                                    <td> : </td>
                                    <td><input type="text" name="vendor"></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi Barang</td>
                                    <td> : </td>
                                    <td><input type="text" name="desc"></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Stok</td>
                                    <td> : </td>
                                    <td><input type="text" name="stok"></td>
                                </tr>
                                <tr>
                                    <td>Harga beli</td>
                                    <td> : </td>
                                    <td><input type="text" name="hbeli"></td>
                                </tr>
                                <tr>
                                    <td>MSRP</td>
                                    <td> : </td>
                                    <td><input type="text" name="msrp"></td>
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
                            mysqli_query($koneksi, "INSERT INTO products set
                            productCode = '$_POST[kode]',
                            productName = '$_POST[nama]',
                            productLine = '$_POST[prod_line]',
                            productScale = '$_POST[skala]',
                            productVendor = '$_POST[vendor]',
                            productDescription = '$_POST[desc]',
                            quantityInStock = '$_POST[stok]',
                            buyPrice = '$_POST[hbeli]',
                            MSRP = '$_POST[msrp]'");

                            echo "Tambah data produk berhasil";
                        }
                    ?>
</body>
</html>