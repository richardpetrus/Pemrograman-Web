<?php 
    include('connect.php')
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Utama</title>
        <link rel="stylesheet" href="styleIndex.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    </head>
    <body>
        <h1>DATA PRODUK DAN COSTUMER</h1>
        <div class="produk"> <a href="tampilproduct.php" class="barang"> produk</a></div>
        <div class = "cost"><a href="tampilcost.php">pelanggan</a></div>
            <div> 
                <main>
                    Tabel Produk
                    <div>
                        <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Product Line</th>
                                <th>Product Scale</th>
                                <th>Product Vendor</th>
                                <th>Product Drescription</th>
                                <th>Quantity In Stock</th>
                                <th>Buy Price</th>
                                <th>MSRP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                $ambilData = mysqli_query($koneksi, "SELECT * FROM products");
                                while ($tampil = mysqli_fetch_array($ambilData)){
                                    echo "
                                        <tr>
                                            <td>$nomor</td>
                                            <td>$tampil[productCode]</td>
                                            <td>$tampil[productName]</td>
                                            <td>$tampil[productLine]</td>
                                            <td>$tampil[productScale]</td>
                                            <td>$tampil[productVendor]</td>
                                            <td>$tampil[productDescription]</td>
                                            <td>$tampil[quantityInStock]</td>
                                            <td>$tampil[buyPrice]</td>
                                            <td>$tampil[MSRP]</td>
                                        </tr>";
                                    $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </body>
</html>