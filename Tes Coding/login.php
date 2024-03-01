<?php
// Check if session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Function to check if the username and password are valid
function isValidUser($username, $password) {
    $usersFile = "users.txt"; // Path to the users file
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES); // Read the file into an array of lines
    foreach ($lines as $line) {
        list($user, $pass) = explode("|", $line); // Split each line into username and password
        if ($username === $user && $password === $pass) {
            return true; // If username and password match, return true
        }
    }
    return false; // If no matching username and password found, return false
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isValidUser($username, $password)) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>
