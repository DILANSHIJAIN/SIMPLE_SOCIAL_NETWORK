<?php
include 'config/config.php';

// Insert message if POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $message  = trim($_POST['message']);

    if (!empty($username) && !empty($message)) {
        $stmt = mysqli_prepare($conn, "INSERT INTO messages (username, message) VALUES (?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $message);

        if (!mysqli_stmt_execute($stmt)) {
            die("Insert failed: " . mysqli_error($conn));
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Both fields are required!";
    }
}

// Fetch messages
$result = mysqli_query($conn, "SELECT * FROM messages ORDER BY created_at DESC");
if (!$result) {
    die("Select failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #26aefc, #0088f7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .chat-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            width: 350px;
            padding: 20px;
        }
        .chat-header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
        }
        .chat-box {
            border: 1px solid #ddd;
            margin: 15px 0;
            height: 250px;
            overflow-y: auto;
            padding: 10px;
            border-radius: 6px;
            background: #f9f9f9;
        }
        .message {
            margin-bottom: 8px;
        }
        .username {
            font-weight: bold;
            color: #007BFF;
        }
        .chat-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }
        .chat-form button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        .chat-form button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="chat-container">
    <div class="chat-header">💬 Open Chat Instantly</div>

    <div class="chat-box">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="message">
                <span class="username"><?php echo htmlspecialchars($row['username']); ?>:</span>
                <?php echo htmlspecialchars($row['message']); ?>
                <small style="color: gray;">(<?php echo $row['created_at']; ?>)</small>
            </div>
        <?php endwhile; ?>
    </div>

    <form class="chat-form" method="post" action="">
        <input type="text" name="username" placeholder="Your name" required>
        <input type="text" name="message" placeholder="Type a message..." required>
        <button type="submit">Send</button>
    </form>
</div>

</body>
</html>
