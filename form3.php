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
</head>
<body>
<form action="<?php echo $data['link'];?>" method="POST">
    <fieldset>
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
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $data['NAMA'] ?>" />
        </p>
        <p>
            <label for="nama_pang">Nama Panggilan: </label>
            <input type="text" name="nama_pang" value="<?php echo $data['NAMA_PANG'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" value="<?php echo $data['EMAIL'] ?>" />
        </p>
        <p>
            <label for="no_telp">No.Telp: </label>
            <input type="text" name="no_telp" value="<?php echo $data['NO_TELP'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $data['ALAMAT'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="<?php echo $data['mark'] ?>" name="<?php echo $data['action'] ?>" />
        </p>
    </fieldset>
</form>
</body>
</html>
