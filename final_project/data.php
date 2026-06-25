<?php
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all data</title>
    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center text-success">Students Record</h3>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>S No.</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $sql = "SELECT * FROM tbl_register ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $i = 1;
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['password']); ?></td>
                    <td>
                        <a href="#" class="btn btn-info">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fa fa-trash text-white"></i>
                        </a>
                    </td>
                </tr>
                <?php
          }
        } else {
          echo "<tr><td colspan='4' class='text-center'>No records found.</td></tr>";
        }
        ?>
            </tbody>
        </table>
    </div>
</body>

</html>