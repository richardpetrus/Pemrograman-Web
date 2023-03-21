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
            <div > 
                <main>
                    Tabel Customer
                    <div >
                        <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Customer Number</th>
                                <th>Customer Name</th>
                                <th>Contact Last Name</th>
                                <th>Contact First Name</th>
                                <th>Phone</th>
                                <th>Address Line1</th>
                                <th>Address Line2</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Postal Code</th>
                                <th>Country</th>
                                <th>Sales Rep Employee Number</th>
                                <th>Credit Limit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                $ambilData = mysqli_query($koneksi, "SELECT * FROM customers");
                                while ($tampil = mysqli_fetch_array($ambilData)){
                                    echo "
                                        <tr>
                                            <td>$nomor</td>
                                            <td>$tampil[customerNumber]</td>
                                            <td>$tampil[customerName]</td>
                                            <td>$tampil[contactLastName]</td>
                                            <td>$tampil[contactFirstName]</td>
                                            <td>$tampil[phone]</td>
                                            <td>$tampil[addressLine1]</td>
                                            <td>$tampil[addressLine2]</td>
                                            <td>$tampil[city]</td>
                                            <td>$tampil[state]</td>
                                            <td>$tampil[postalCode]</td>
                                            <td>$tampil[country]</td>
                                            <td>$tampil[salesRepEmployeeNumber]</td>
                                            <td>$tampil[creditLimit]</td>
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