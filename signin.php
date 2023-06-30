<?php
    require_once('config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            // Berhasil login, lakukan tindakan selanjutnya
            echo 'Sign in berhasil';
        } else {
            // Gagal login, berikan pesan error
            echo 'Email atau password salah';
        }
    }
?>
