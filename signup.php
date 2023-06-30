<?php
    require_once('config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Registrasi berhasil, lakukan tindakan selanjutnya
            echo 'Sign up berhasil';
        } else {
            // Registrasi gagal, berikan pesan error
            echo 'Terjadi kesalahan saat melakukan registrasi';
        }
    }
?>
