<?php
include('config.php');
if(isset($_POST['edit'])){
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $nama_pang = $_POST['nama_pang'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $sql = "UPDATE angkatan16 SET NRP='$nrp', NAMA='$nama', NAMA_PANG='$nama_pang', EMAIL='$email', NO_TELP='$no_telp', ALAMAT='$alamat' WHERE NRP=$nrp";
    $query = mysqli_query($db, $sql);
    if($query) {
        header('Location: dashboard.php?action=edit');
    } else{
        die(mysqli_error($db));
    }
} else{
    die('error');
}
?>