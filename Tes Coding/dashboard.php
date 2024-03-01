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
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <table border="1">
        <tr>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Nama Dosen</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>3</td>
            <td>Dr. Ahmad</td>
            <td>A</td>
        </tr>
        <!-- Add more rows as needed -->
    </table>
    <form action="select_courses.php" method="post">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
