<?php
session_start();

$msg = "";
$uploaded_image = "";
$uploaded_story = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $story = $_POST['story'] ?? '';
    $upload_dir = 'uploads/';
    $filename = $_FILES['photo']['name'];
    $temp_path = $_FILES['photo']['tmp_name'];

    if (!empty($filename)) {
        $target_path = $upload_dir . basename($filename);
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        if (move_uploaded_file($temp_path, $target_path)) {
            $msg = "✅ Photo and story shared successfully!";
            $uploaded_image = $target_path;
            $uploaded_story = htmlspecialchars($story);
        } else {
            $msg = "❌ Failed to upload photo.";
        }
    } else {
        $msg = "❌ Please select a photo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Share Moments</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card-wrapper {
      cursor: pointer;
      width: 100%;
      max-width: 500px;
    }

    .container {
      background-color: #fff;
      padding: 40px; /* Equal padding */
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      width: 100%;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-sizing: border-box;
    }

    .card-wrapper:hover .container {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #0072ff;
      margin-bottom: 10px;
    }

    p {
      color: #333;
      margin-bottom: 25px;
    }

    input[type="file"],
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(to right, #0072ff, #00c6ff);
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
      box-sizing: border-box;
    }

    button:hover {
      background: linear-gradient(to right, #00c6ff, #0072ff);
    }

    .message {
      margin-bottom: 15px;
      font-weight: bold;
      color: green;
    }

    .preview {
      margin-top: 20px;
      text-align: center;
    }

    .preview img {
      max-width: 100%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .preview p {
      color: #333;
      font-size: 15px;
    }
  </style>
</head>
<body>
  <div class="card-wrapper">
    <div class="container">
      <h2>Share Moments</h2>
      <p>Post updates, photos, and stories to share your life with your circle.</p>

      <?php if (!empty($msg)) { echo "<div class='message'>{$msg}</div>"; } ?>

      <form method="POST" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required />
        <textarea name="story" placeholder="Write your story..." required></textarea>
        <button type="submit">Share</button>
      </form>

      <?php if (!empty($uploaded_image)): ?>
      <div class="preview">
        <h3>📷 Your Uploaded Moment:</h3>
        <img src="<?php echo $uploaded_image; ?>" alt="Uploaded Image">
        <p><?php echo $uploaded_story; ?></p>
      </div>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
