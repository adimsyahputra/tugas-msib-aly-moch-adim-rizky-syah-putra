<?php
if(isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyimpan data ke file users.txt
    $data = "$username,$password" . PHP_EOL;
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "Registration Successful!<br>";
    echo "Username: $username<br>";
    echo "Password: $password";
}
?>
