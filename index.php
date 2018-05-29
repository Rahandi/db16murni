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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crete+Round">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Home</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- Pagination-->
    <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
    <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        header {
            height: 120px;        
        }
        header h1 {
            float: left;
            margin-top: 32px;
        }
        header h1 .color {
            color: #02b8dd;
        }
        header nav {
            float: right;
        }
        header nav ul li {
            float: left;
            display: inline-block;
            margin-top: 50px;
        }
        header nav ul li a {
            color: #444;
            text-transform: uppercase;
            font-weight: bold;
            display: block;
            margin-right: 20px;
        }
    </style>
    <style type="text/css">
        #hero-image {
            height: 580px;
            padding-top: 1px;
            background: #e8eced url('../db16murni/img/hero.jpg') no-repeat center;
        }
        #hero-image h2 {
            margin: 180px 0 40px 0;
            color: #fff;
        }
        .button-1 {
            display: block;
            text-align: center;
            background: #444;
            border-radius: 3px;
            color: #fff;
            width: 180px;
            height: 50px;
            font-size: 20px;
            line-height: 50px;
            margin: 0 auto;
        }
        .button-1:hover {
            background-color: #02b8dd;
            color: #fff;
        }
    </style>
    <style type="text/css">
        #cta {
            padding: 60px 0;
            text-align: center;
        }
        #cta h3 {
            display: block;
            margin: 0 auto 20px auto;
            width: 400px;
            border-bottom: 1px solid #02b8dd;
            padding: 0 0 20px 0;
        }
        .button-2 {
            display: block;
            margin: 0 auto;
            border: 2px solid #02b8dd;
            color: #02b8dd;
            border-radius: 3px;
            width: 180px;
            height: 50px;
            font-size: 20px;
            line-height: 50px;
        }
        .button-2:hover {
            background-color: #02b8dd;
            color: #fff;
        }
    </style>
    <style type="text/css">
        footer {
            padding: 60px 0;
            text-align: center;
            background-color: #f8fafa;
        }
        #footer-info {
            width: 380px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1><img src="img/logo.png" height="50" width="50"> Database<span class="color">.</span></h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="hero-image">
        <div class="wrapper">
            <h2><strong>Database of Informatics Engineering 2016</strong></h2>
        </div>
    </div>

    <div id="cta">
        <div class="wrapper">
            <h3>Hello There!</h3>
            <p>This is database of Informatics Engineer 2016 from Institut Teknologi Sepuluh Nopember. Our history starts in 2016 and still counting to be success together.</p>
            <a href="login.php" class="button-2">Get Started</a>
    </div>

<!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">database angkatan</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th> NRP </th>
                                            <th> Nama </th>
                                            <th> Nama Panggilan </th>
                                            <th> Email </th>
                                            <th> No Telp </th>
                                            <th> Alamat </th>
                                            <th> Action </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php
                                                if (isset($_GET['pageno'])) {
                                                    $pageno = $_GET['pageno'];
                                                } else {
                                                    $pageno = 1;
                                                }

                                                $no_of_records_per_page = 10;
                                                $offset = ($pageno-1) * $no_of_records_per_page;

                                                $total_pages_sql = "SELECT COUNT(*) FROM angkatan16";
                                                $result = mysqli_query($db,$total_pages_sql);
                                                $total_rows = mysqli_fetch_array($result)[0];
                                                $total_pages = ceil($total_rows / $no_of_records_per_page);

                                                $sql = "SELECT * FROM angkatan16 LIMIT $offset, $no_of_records_per_page";
        
                                                $query = mysqli_query($db, $sql);

                                                while($data = mysqli_fetch_array($query)){
                                                    echo '<tr class="tr-shadow">';

                                                    echo '<td>'.$data['NRP'].'</td>';
                                                    echo '<td>'.$data['NAMA'].'</td>';
                                                    echo '<td>'.$data['NAMA_PANG'].'</td>';
                                                    echo '<td><span class="block-email">'.$data['EMAIL'].'</span></td>';
                                                    echo '<td>'.$data['NO_TELP'].'</td>';
                                                    echo '<td>'.$data['ALAMAT'].'</td>';

                                                    echo '<td>';
                                                    echo '<td>';

                                                    echo '</tr>';
                                                }
                                                ?>

                                                <ul class="pagination">
                                                    <li class="btn btn-info" ><a style="color: white" href="?pageno=1">First</a></li>
                                                    <li style="margin-left: 2px" class="<?php if($pageno <= 1){ echo 'disabled'; } ?> btn btn-info">
                                                        <a style="color: white" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                                    </li>
                                                    <li style="margin-left: 2px" class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> btn btn-info">
                                                        <a style="color: white" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                                    </li>
                                                    <li style="margin-left: 2px" class="btn btn-info"><a style="color: white" href="?pageno=<?php echo $total_pages; ?> ">Last</a></li>
                                                </ul>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

    <footer>
        <div class="wrapper">
            <div id="footer-info">
                <p>Copyright 2016 Informatics Engineer of Institut Teknologi Sepuluh Nopember. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
