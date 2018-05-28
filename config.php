<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'db16';

    $db = mysqli_connect($server, $user, $password, $db_name);

    if(!$db){
        die('Database failed to connect: '.mysqli_connect_error());
    }