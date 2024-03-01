<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle registration (store username and password in database or file)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example: Store in a file
    $file = fopen("users.txt", "a");
    fwrite($file, $username . ":" . $password . "\n");
    fclose($file);

    // Redirect to login page
    header("Location: index.php");
    exit;
}
?>
