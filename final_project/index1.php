<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        .btn-gradient {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            border: none;
            color: white;
            font-weight: bold;
        }
        .btn-gradient:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="card bg-white">
    <h4 class="text-center mb-4 text-primary">Registration Form</h4>

    <?php
    if (isset($_SESSION['success'])) {
        echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
        unset($_SESSION['error']);
    }
    ?>

    <form method="post" action="register.php">
        <div class="mb-3">
            <label class="form-label">User Name</label>
            <input type="text" name="email" placeholder="Enter email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" placeholder="Enter password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required>
        </div>
        <div class="mb-3">
            <button name="submit" type="submit" class="btn btn-gradient w-100">Register</button>
        </div>
    </form>
</div>
</body>
</html>
