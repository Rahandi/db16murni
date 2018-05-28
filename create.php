<?php
include("config.php");
if(isset($_POST['daftar'])){
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $nama_pang = $_POST['nama_pang'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO angkatan16 (NRP, NAMA, NAMA_PANG, EMAIL, NO_TELP, ALAMAT) VALUE ('$nrp', '$nama', '$nama_pang', '$email', '$no_telp', '$alamat')";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: dashboard.php?action=create');
    } else {
        die(mysqli_error($db));
    }
} else {
    die("error");
}
?>
