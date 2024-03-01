<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["course"])) {
        echo "<h2>Selected Courses:</h2>";
        foreach ($_POST["course"] as $course) {
            echo $course . "<br>";
        }
    } else {
        echo "No courses selected";
    }
}
?>
