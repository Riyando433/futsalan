<?php
    include('backend/dbconfig/connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $query = "INSERT IN TO penyewa ('','','','','','','')";
    $register = $db->query($query);
?>