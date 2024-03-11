<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Welcome, <?php echo $username; ?></h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Nama Dosen</th>
                                    <th>Kelas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Matematika</td>
                                    <td>3</td>
                                    <td>John Doe</td>
                                    <td>A</td>
                                    <td><button class="btn btn-success" onclick="chooseCourse('Matematika')">Pilih</button></td>
                                </tr>
                                <!-- Add more rows for other courses -->
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <form action="submit_courses.php" method="post">
                            <input type="hidden" name="selectedCourses" id="selectedCourses">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function chooseCourse(courseName) {
            var selectedCourses = document.getElementById('selectedCourses');
            selectedCourses.value += (courseName + ', ');
        }
    </script>
</body>
</html>
