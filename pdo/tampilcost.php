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
                            $no = 1;
                            $tampilCustomer = $koneksi->query("SELECT * FROM customers");
                            while($data = $tampilCustomer->fetch(PDO::FETCH_ASSOC)):
                        ?>
                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['customerNumber']; ?></td>
                            <td><?php echo $data['customerName']; ?></td>
                            <td><?php echo $data['contactLastName']; ?></td>
                            <td><?php echo $data['contactFirstName']; ?></td>
                            <td><?php echo $data['phone']; ?></td>
                            <td><?php echo $data['addressLine1']; ?></td>
                            <td><?php echo $data['addressLine2']; ?></td>
                            <td><?php echo $data['city']; ?></td>
                            <td><?php echo $data['state']; ?></td>
                            <td><?php echo $data['postalCode']; ?></td>
                            <td><?php echo $data['country']; ?></td>
                            <td><?php echo $data['salesRepEmployeeNumber']; ?></td>
                            <td><?php echo $data['creditLimit']; ?></td>
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