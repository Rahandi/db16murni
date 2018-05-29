<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Database TC 16</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Simply<span class="color">.</span></h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="hero-image">
        <div class="wrapper">
            <h2><strong>Database of Informatics Engineering 2016</strong></h2>
            <a href="#" class="button-1">Get Started</a>
        </div>
    </div>

    <div id="primary-content">
        <div class="wrapper">
            <article>
                <h3>Featured Content</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt. Nam ultricies odio ac neque suscipit volutpat. Ut dictum adipiscing felis sed malesuada. Integer porta sem nec nibh hendrerit imperdiet. </p>
                <a href="#"><img src="images/video-placeholder.jpg" alt="video placeholder" /></a>
            </article>
        </div>
    </div>
    
    <div id="secondary-content">
        <div class="wrapper">
            <article></article>
            <article></article>
        </div>
    </div>

    <footer>
        <div class="wrapper">
            <div id="footer-info"></div>
            <div id="footer-links">
                <ul></ul>
                <ul></ul>
                <ul></ul>
            </div>
        </div>
    </footer>
    <!-- <a href="dashboard.php">Login</a>
    <table border="1">
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
            $sql = 'SELECT * FROM angkatan16 ';
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo '<tr>';

                echo '<td>'.$siswa['NRP'].'</td>';
                echo '<td>'.$siswa['NAMA'].'</td>';
                echo '<td>'.$siswa['NAMA_PANG'].'</td>';
                echo '<td>'.$siswa['EMAIL'].'</td>';
                echo '<td>'.$siswa['NO_TELP'].'</td>';
                echo '<td>'.$siswa['ALAMAT'].'</td>';

                echo '</tr>';
            }
        ?> -->
        </tbody>
    </table>
</body>
</html>
