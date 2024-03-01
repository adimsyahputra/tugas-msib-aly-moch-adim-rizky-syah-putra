<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Selection</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <h3>Select Courses:</h3>
    <form action="process_selection.php" method="post">
        <input type="checkbox" id="course1" name="course[]" value="Matematika">
        <label for="course1">Matematika</label><br>
        <!-- Add more courses -->
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
