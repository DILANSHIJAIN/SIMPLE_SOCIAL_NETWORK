<?php
session_start();
include("config/config.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email && $password) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = $row['email'];
                header("Location: home.php");
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password.";
            }
        } else {
            $_SESSION['error'] = "No user found with this email.";
        }
    } else {
        $_SESSION['error'] = "Please enter email and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            height: 100vh;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: #fff;
            padding: 40px; /* Equal space all sides */
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box; /* Padding included in width */
        }

        .form-container h2 {
            text-align: center;
            color: #0072ff;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%; /* Take full width inside padding */
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #0072ff, #00c6ff);
        }

        .message {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>

        <?php
        if (isset($_SESSION['error'])) {
            echo "<div class='message error'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
        }

        if (isset($_SESSION['success'])) {
            echo "<div class='message success'>{$_SESSION['success']}</div>";
            unset($_SESSION['success']);
        }
        ?>

        <form method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>
