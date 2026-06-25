<?php
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Circle Up Profile</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #2193b0, #6dd5ed); /* blue gradient */
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
    }

    .about-profile {
      max-width: 850px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.95); /* slightly transparent white */
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .about-profile h4 {
      font-size: 30px;
      color: #2c3e50;
      margin-bottom: 20px;
      border-left: 5px solid #3498db;
      padding-left: 12px;
    }

    .about-profile p {
      font-size: 16px;
      color: #333;
      line-height: 1.7;
      margin-bottom: 10px;
    }

    .about-profile p strong {
      color: #2c3e50;
    }

    .feature-section h5 {
      font-size: 18px;
      color: #0077b6;
      margin-top: 20px;
      margin-bottom: 5px;
    }

    .why-choose {
      margin-top: 30px;
      background: #e3f2fd;
      padding: 20px;
      border-left: 5px solid #2196f3;
      border-radius: 10px;
    }

    .why-choose h5 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #0d47a1;
    }

    .why-choose ul {
      padding-left: 20px;
      color: #1a237e;
    }

    .why-choose ul li {
      margin-bottom: 8px;
    }
  </style>
</head>
<body>

  <div class="about-profile">
    <h4>Profile: Circle Up – Connect. Chat. Discover.</h4>
    <p>
      Welcome to <strong>Circle Up</strong>, a vibrant social networking platform designed to bring people together from all corners of the world. Whether you're looking to chat with friends, share memorable moments, or discover new people with similar interests, Circle Up is your go-to digital space.
    </p>

    <div class="feature-section">
      <h5>💬 Chat Freely</h5>
      <p>Stay connected with your circle through real-time messaging. Chat privately or in groups, send emojis, and express yourself your way.</p>

      <h5>📸 Share Images & Stories</h5>
      <p>Capture and share your favorite photos, moments, and memories. Our platform makes it easy to upload images, update your story, and engage with your network visually.</p>

      <h5>🌍 Discover New People</h5>
      <p>With smart discovery tools, you can find and connect with people who share your hobbies, location, or mindset. Build meaningful connections and grow your social circle.</p>

      <h5>🔐 Safe & Secure</h5>
      <p>Your privacy is our priority. Circle Up uses modern security features to ensure your data and conversations stay protected.</p>
    </div>

    <div class="why-choose">
      <h5>🌟 Why Choose Circle Up?</h5>
      <ul>
        <li>User-friendly interface</li>
        <li>Fast and reliable messaging</li>
        <li>Beautiful image galleries</li>
        <li>Smart people discovery system</li>
        <li>Privacy-focused design</li>
      </ul>
    </div>

    <p style="margin-top: 25px;">
      Join <strong>Circle Up</strong> today and become part of a growing community where friendships are formed, ideas are shared, and stories come to life.
    </p>
  </div>

</body>
</html>
