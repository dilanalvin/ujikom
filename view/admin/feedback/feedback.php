<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/css/admin.css">
</head>

<body>
    <?php
        include '../sidebar.php';
    ?>
    <div class="content">
        <h2>Feedback Page</h2>
        <div class="container mt-5">
            <form action="../../../controller/feedback/export_file_feedback.php" method="post">
                <button type="submit" class="btn btn-primary mt-3">Export to Excel</button>
            </form>
            <h2>Data Tabel</h2>
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th>Ulasan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>08123456789</td>
                        <td>Jl. Contoh No. 123, Jakarta</td>
                        <td>Bagus sekali!</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>08987654321</td>
                        <td>Jl. Lain No. 456, Bandung</td>
                        <td>Memuaskan!</td>
                    </tr>
                    <!-- Baris tambahan bisa ditambahkan di sini -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Link Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>