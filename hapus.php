<?php
include("config.php");
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
if( isset($_GET['nrp']) ){
    $nrp = $_GET['nrp'];
    $sql = "DELETE FROM angkatan16 WHERE NRP=$nrp";
    $query = mysqli_query($db, $sql);
    if( $query ){
        header('Location: dashboard.php?action=delete');
    } else {
        die(mysqli_error($db));
    }
} else {
    die("gagal");
}

?>
