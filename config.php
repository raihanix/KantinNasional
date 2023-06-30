<?php
    $servername = "localhost";
    $database = "kantinnasional";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $database, $username, $password);
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
