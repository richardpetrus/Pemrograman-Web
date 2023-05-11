<?php
include('connect.php');
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
                                            $no = 1;
                                            $tampilProductLine = $koneksi->query("SELECT * FROM productlines");
                                            while($data = $tampilProductLine->fetch(PDO::FETCH_ASSOC)):
                                        ?>
                                        <?php echo "<option>$data[productLine]</option>"; ?>
                                            <?php endwhile ?>
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
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $prod_line = $_POST['prod_line'];
            $skala = $_POST['skala'];
            $vendor = $_POST['vendor'];
            $desc = $_POST['desc'];
            $stok = $_POST['stok'];
            $hbeli = $_POST['hbeli'];
            $msrp = $_POST['msrp'];

            $inputanProduct = $koneksi->prepare("INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) 
                                        VALUES(:kode, :nama, :prod_line, :skala, :vendor, :desc, :stok, :hbeli, :msrp)");
            $inputanProduct->bindParam(':kode',$kode);
            $inputanProduct->bindParam(':nama',$nama);
            $inputanProduct->bindParam(':prod_line',$prod_line);
            $inputanProduct->bindParam(':skala',$skala);
            $inputanProduct->bindParam(':vendor',$vendor);
            $inputanProduct->bindParam(':desc',$desc);
            $inputanProduct->bindParam(':stok',$stok);
            $inputanProduct->bindParam(':hbeli',$hbeli);
            $inputanProduct->bindParam(':msrp',$msrp);

            if ($inputanProduct->execute()) {
                echo "Data product berhasil diinput";
            } else {
                echo "Data product gagal diinput";
            }
        }
    ?>
</body>
</html>