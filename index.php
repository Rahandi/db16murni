<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Database TC 16</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Simply<span class="color">.</span></h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="login2.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="hero-image">
        <div class="wrapper">
            <h2><strong>Database of Informatics Engineering 2016</strong></h2>
            <a href="login2.php" class="button-1">Get Started</a>
        </div>
    </div>

    <div id="cta">
        <div class="wrapper">
            <h3>Heard Enough?</h3>
            <p>This is database of Informatics Engineer 2016 from Institut Teknologi Sepuluh Nopember</p>
            <a href="login2.php" class="button-2">Get Started</a>
    </div>
    
    <div id="secondary-content">
        <div class="wrapper">
           <article style="background-image: url('images/article-image-1.jpg');">
                <div class="overlay">
                    <h4>Secondary Content</h4>
                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt nam.</small></p>
                    <a href="#" class="more-link">View more</a>
                </div>
            </article>
            <article style="background-image: url('images/article-image-2.jpg');">
                <div class="overlay">
                    <h4>Secondary Content</h4>
                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt nam.</small></p>
                    <a href="#" class="more-link">View more</a>
                </div>
            </article><div class="clear"></div>
        </div>
    </div>

    <footer>
        <div class="wrapper">
            <div id="footer-info">
                <p>Copyright 2014 Informatics Engineer of Institut Teknologi Sepuluh Nopember. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- <table border="1">
        <thead>
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Nama Panggilan</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // $sql = 'SELECT * FROM angkatan16 ';
            // $query = mysqli_query($db, $sql);

            // while($siswa = mysqli_fetch_array($query)){
            //     echo '<tr>';

            //     echo '<td>'.$siswa['NRP'].'</td>';
            //     echo '<td>'.$siswa['NAMA'].'</td>';
            //     echo '<td>'.$siswa['NAMA_PANG'].'</td>';
            //     echo '<td>'.$siswa['EMAIL'].'</td>';
            //     echo '<td>'.$siswa['NO_TELP'].'</td>';
            //     echo '<td>'.$siswa['ALAMAT'].'</td>';

            //     echo '</tr>';
            // }
        ?>
        </tbody>
    </table> -->
</body>
</html>
