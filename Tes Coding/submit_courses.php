<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'];

if(isset($_POST['selectedCourses'])) {
    $selectedCourses = $_POST['selectedCourses'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Courses</title>
</head>
<body>
    <h2>Selected Courses for <?php echo $username; ?></h2>
    <p><?php echo $selectedCourses; ?></p>
</body>
</html>
