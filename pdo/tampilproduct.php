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
                              $no = 1;
                              $tampilProduct = $koneksi->query("SELECT * FROM products");
                              while($data = $tampilProduct->fetch(PDO::FETCH_ASSOC)):
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['productCode']; ?></td>
                                <td><?php echo $data['productName']; ?></td>
                                <td><?php echo $data['productLine']; ?></td>
                                <td><?php echo $data['productScale']; ?></td>
                                <td><?php echo $data['productVendor']; ?></td>
                                <td><?php echo $data['productDescription']; ?></td>
                                <td><?php echo $data['quantityInStock']; ?></td>
                                <td><?php echo $data['buyPrice']; ?></td>
                                <td><?php echo $data['MSRP']; ?></td>
                            </tr>
                            <?php $no++; ?>
                                <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </body>
</html>