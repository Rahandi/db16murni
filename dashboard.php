<?php include('config.php');
session_start();
// if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
//     header("location: login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    <?php if(isset($_GET['action'])): ?>
        <p>
            <?php
            if($_GET['action'] == 'create'){
                echo "Data berhasil dimasukkan";
            }
            elseif ($_GET['action'] == 'edit'){
                echo "Data berhasil dirubah";
            }
            elseif ($_GET['action'] == 'delete'){
                echo "Data berhasil dihapus";
            }
            ?>
        </p>
    <?php endif; ?>
</div>
<nav>
    <a href="form.php">[+] Tambah Baru</a>
</nav>
<div>
    <table border="1">
        <thead>
        <tr>
            <th> NRP </th>
            <th> Nama </th>
            <th> Nama Panggilan </th>
            <th> Email </th>
            <th> No Telp </th>
            <th> Alamat </th>
            <th> Tindakan </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = 'SELECT * FROM angkatan16';
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo '<tr>';

            echo '<td>'.$data['NRP'].'</td>';
            echo '<td>'.$data['NAMA'].'</td>';
            echo '<td>'.$data['NAMA_PANG'].'</td>';
            echo '<td>'.$data['EMAIL'].'</td>';
            echo '<td>'.$data['NO_TELP'].'</td>';
            echo '<td>'.$data['ALAMAT'].'</td>';

            echo '<td>';
            echo "<a href='form.php?nrp=".$data['NRP']."'>Edit</a> | ";
            echo "<a href='hapus.php?nrp=".$data['NRP']."'>Hapus</a>";
            echo '<td>';

            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
<div>
    <p><a href="logout.php" class="btn btn-danger">Keluar</a></p>
</div>
</body>
</html>

