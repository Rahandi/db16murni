<?php include('config.php');
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
if(isset($_GET['nrp'])){
    $data = array();
    $nrp = $_GET['nrp'];
    $sql = "SELECT * FROM angkatan16 WHERE NRP=$nrp";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($query);
    $data['mark'] = 'Ubah';
    $data['action'] = 'edit';
    $data['link'] = 'edit.php';

    if(mysqli_num_rows($query) < 1){
        $data = array();
        $data['NRP'] = '';
        $data['NAMA'] = '';
        $data['NAMA_PANG'] = '';
        $data['EMAIL'] = '';
        $data['NO_TELP'] = '';
        $data['ALAMAT'] = '';
    }
} else{
    $data = array();
    $data['NRP'] = '';
    $data['NAMA'] = '';
    $data['NAMA_PANG'] = '';
    $data['EMAIL'] = '';
    $data['NO_TELP'] = '';
    $data['ALAMAT'] = '';
    $data['mark'] = 'Tambah';
    $data['action'] = 'daftar';
    $data['link'] = 'create.php';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Baru</title>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

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
    <style> 
input[type=text],textarea {
    
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}
</style>

</head>
<body >

<div class="page-wrapper">
	<!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-icon.png"/>
                                </div>
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
<br> <br>
<div class="container">
<form action="<?php echo $data['link'];?>" method="POST">
    <fieldset>
    	<div>
    		<p>
            <?php
                if (isset($_GET['nrp'])){
                    echo "<input type='hidden' name='nrp' value='".$data['NRP']."'>";
                } else{
                    echo '<label for="nrp">NRP: </label>';
                    echo '<input type="text" name="nrp" />';
                }
            ?>
        </p>
        <div class="form-group row">
            	<label class="col-sm-2 col-form-label" for="nama">Nama: </label>
            	<div class="col-sm-10">
            		<input type="text" name="nama" value="<?php echo $data['NAMA'] ?>" />

            	</div>
        		
        </div>
        <div class="form-group row">
        	<label class="col-sm-2 col-form-label" for="nama_pang">Nama Panggilan: </label>
            <div class="col-sm-10">
            	<input type="text" name="nama_pang" value="<?php echo $data['NAMA_PANG'] ?>" />
            </div>
        </div>
            
        <div class="form-group row">
        	<label class="col-sm-2 col-form-label" for="email">Email: </label>
        	<div class="col-sm-10">
        		<input type="text" name="email" value="<?php echo $data['EMAIL'] ?>" />

        	</div>
        </div>
              
        <div class="form-group row">
        	<label class="col-sm-2 col-form-label" for="no_telp">No.Telp: </label>
        	<div class="col-sm-10">
        		<input type="text" name="no_telp" value="<?php echo $data['NO_TELP'] ?>" />
        	</div>
        </div>
            
        
        <div class="form-group row">
        	<label class="col-sm-2 col-form-label" for="alamat">Alamat: </label>
        	<div class="col-sm-10">
        		<textarea style="width: 22.2%" name="alamat"><?php echo $data['ALAMAT'] ?></textarea>
        	</div>
            
        </div>
            
        <div class="row">
        	<div class="col-sm-5"><hr></div>
        </div>
            
        <div class="form-group row">
        	<div class="col-sm-2 col-form-label"></div>
        	<input  style="margin-left: 1.3%" class="btn btn-info col-sm-2 pull-right" type="submit" value="<?php echo $data['mark'] ?>" name="<?php echo $data['action'] ?>" />
        </div>
    	</div>
        
    </fieldset>
</form>
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
