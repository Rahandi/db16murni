<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Database TC 16</title>
</head>
<body>
    <a href="dashboard.php">Login</a>
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
        ?>
        </tbody>
    </table>
</body>
</html>