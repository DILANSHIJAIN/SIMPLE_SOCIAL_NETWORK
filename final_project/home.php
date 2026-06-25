<?php
session_start();
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CircleUp - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="homepage.css" />
  <style>
    .feature-card {
      cursor: pointer;
      transition: 0.3s;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      background-color: #f9f9f9;
      height: 100%;
    }
    .feature-icon {
      font-size: 40px;
    }
    .feature-card:hover {
      background-color: #e9f5ff;
      transform: translateY(-5px);
    }
    .feature-card h3 {
      color: #007bff;
      margin-top: 15px;
    }
    .feature-card p {
      color: #333;
    }
  </style>
</head>
<body>
  <div class="home-background"></div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 px-4">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="logo d-flex align-items-center">
        <span>🌐</span>
        <span class="logo-text ms-2">CircleUp</span>
      </div>
      <ul class="nav nav-pills gap-5 mb-0">
        <li class="nav-item">
          <a href="register.php" class="nav-link text-primary">Register</a>
        </li>
        <li class="nav-item">
          <a href="landingpage.php" class="nav-link text-primary">Home</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link text-primary">Contact Us</a>
        </li>
        <li class="nav-item">
          <a href="profile.php" class="nav-link text-primary"><i class="fa fa-user"></i> Profile</a>
        </li>
          </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link text-primary">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero text-center py-5">
    <div class="container">
      <h1>Welcome to <span>CircleUp</span></h1>
      <p class="lead">Connect, share, and grow your circle. Join a vibrant community and stay in touch with friends!</p>
      <a href="#" class="cta-btn">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features container py-5">
    <div class="row g-4 justify-content-center">
      <div class="col-sm-6 col-md-4 d-flex">
        <a href="chat.php" class="w-100 text-decoration-none">
          <div class="feature-card">
            <div class="feature-icon">💬</div>
            <h3>Chat Instantly</h3>
            <p>Send messages and stay connected with your friends in real time.</p>
          </div>
        </a>
      </div>

      <div class="col-sm-6 col-md-4 d-flex">
        <a href="share.php" class="w-100 text-decoration-none">
          <div class="feature-card">
            <div class="feature-icon">🌟</div>
            <h3>Share Moments</h3>
            <p>Post updates, photos, and stories to share your life with your circle.</p>
          </div>
        </a>
      </div>

      <div class="col-sm-6 col-md-4 d-flex">
        <a href="discover.php" class="w-100 text-decoration-none">
          <div class="feature-card">
            <div class="feature-icon">🔍</div>
            <h3>Discover People</h3>
            <p>Find and connect with new friends who share your interests.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-4">
    &copy; <?php echo date("Y"); ?> CircleUp. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>