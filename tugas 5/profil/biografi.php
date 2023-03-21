<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Richard Petrus</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        body {background-color: cornflowerblue;}
    </style>
</head>
<body>
    <?php
    $var = array(
        array(
            "nama" => "Richard Petrus Haposan",
            "npm"  => "21081010250",
            "contact" => "081219972484",
            "bio" => "Perkenalkan nama saya Richard Petrus Haposan Siagian.saya biasa dipanggil Richard.Saya berasal jakarta</p>
            singkat cerita saya mempelajari informatika di universitas UPN Veteran Jawa timur.
            Saat ini saya menempuh informatika di semester 4.
            saya berencana mengambil penjurusan Jaringan dikarenakan peluang kerja yang besar."


        )
        );
        ?>

    <h1>WEBSITE RICHARD</h1> ""
    
    <div class="img"></div>
    <div class="center">
    <nav>
        <div class="start">
            <a href="index.html">Richard Petrus</a>
        </div>
        <div class="end">
            <a href="unduh.html">unduh</a>
            <a href="karya.html">karya</a>
            <a href="kontak.html">contact</a>
            <a href="tentang.html">about me</a>
        </div>
    </div>
    </nav>
    <br><br>

    <header class="header">
        <figure class="text-center">
           <p>
            <div style="display: flex;justify-content: center;">
            <img src="picture.jpg" style="width: 400px;height: 500px;" alt="profil saya" align="middle" > </img>
        </div> </p>
            <figcaption>
                <?php foreach ($var as $biodata) : ?>
                <?php echo $biodata ['nama']?>
                <?php endforeach; ?>
            </figcaption>
            <strong><?php foreach ($var as $biodata) : ?>
                <?php echo $biodata ['npm']?>
                <?php endforeach; ?></strong>
        </figure>
        
    </header>
    <br><br><br>
    <main>
        <h1>tentang</h1>
        <hr>
        <article class="content">
        <?php foreach ($var as $biodata) : ?>
                <?php echo $biodata ['bio']?>
                <?php endforeach; ?></article>
        <hr>
    </main>
    <footer></footer>
    <p> Contact : <a href="contact"> <?php foreach ($var as $biodata) : ?>
                <?php echo $biodata ['contact']?>
                <?php endforeach; ?>
</a>    
    
</body>

</html>