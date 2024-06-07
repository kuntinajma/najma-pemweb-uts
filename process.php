<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        // Proses register
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Menuju ke halaman login dan menampilkan teks berikut
        $message = "Selamat, $fullname berhasil terdaftar!";
        header("Location: index.php?message=" . urlencode($message));
        exit();

        } else {
        // Proses login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Menampilkan teks ketiks login berhasil
        echo "<h1>Selamat datang, $username!</h1>";
    }
}
?>