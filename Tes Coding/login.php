<?php
session_start();

if(isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Membaca data pengguna dari file users.txt
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(",", $user);
        if ($username === $storedUsername && $password === $storedPassword) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit;
        }
    }

    echo 'Invalid username or password.';
}
?>
