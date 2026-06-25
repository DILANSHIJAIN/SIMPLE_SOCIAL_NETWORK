<?php
session_start();
include('config/config.php'); // your database connection

// Register logic
if (isset($_POST['register'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);

    if ($password !== $cpassword) {
        $_SESSION['error'] = "Passwords do not match!";
    } else {
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $_SESSION['error'] = "User already exists!";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $insert = mysqli_query($conn, "INSERT INTO users (email, password) VALUES ('$email', '$hashed')");
            if ($insert) {
                $_SESSION['success'] = "Registered successfully!";
                header("Location: login.php");
                exit;
            } else {
                $_SESSION['error'] = "Registration failed!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(to right, #00c6ff, #0072ff); height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-3 text-primary">Registration Form</h3>

            <?php
            if (isset($_SESSION['error'])) {
                echo "<div class='alert alert-danger'>{$_SESSION['error']}</div>";
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo "<div class='alert alert-success'>{$_SESSION['success']}</div>";
                unset($_SESSION['success']);
            }
            ?>

            <form method="POST">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required placeholder="Enter password">
                </div>
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" required placeholder="Confirm password">
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
                <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
