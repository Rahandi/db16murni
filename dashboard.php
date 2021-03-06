<?php include('config.php');
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="dashboard.php">
                            <img  style="width: 10%; height: auto; margin-left: 10%" src="img/logo.png"  />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <h2 style="color: white">
                                    <?php echo htmlspecialchars($_SESSION['username']); ?>
                                </h2>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Keluar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">database angkatan</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="form.php">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            Tambah Baru
                                        </button>
                                    </a>
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
                                                    echo '<p><a class="zmdi zmdi-edit" href="form.php?nrp='.$data['NRP'].'"> Edit </a></p>';
                                                    echo '<p><a class="zmdi zmdi-delete" href="hapus.php?nrp='.$data['NRP'].'"> Hapus </a></p>';
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
<br><br><br><br>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->