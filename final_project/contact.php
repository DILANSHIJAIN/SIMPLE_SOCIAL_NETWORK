
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - CIRCLE UP</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    html, body {
      height: 100%;
      background: #ffffff;
      color: #333;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .main-content {
      flex: 1;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 15px 40px;
      background-color: #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .nav-links {
      display: flex;
      gap: 25px;
    }

    .nav-links a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #0056b3;
    }

    .contact-btn {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .contact-btn:hover {
      transform: scale(1.05);
    }

    .contact-us-heading {
      text-align: center;
      padding: 60px 20px 20px;
    }

    .contact-us-heading h1 {
      font-size: 44px;
      color: #007bff;
      margin-bottom: 10px;
    }

    .contact-us-heading p {
      font-size: 20px;
      color: #444;
      margin-bottom: 30px;
    }

    .logo-icon {
      font-size: 100px;
      color: #00aaff;
      margin-bottom: 30px;
      animation: spin 10s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .contact-boxes {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 40px 20px 60px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .box {
      background-color: white;
      padding: 35px 25px;
      border-radius: 18px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      flex: 1;
      min-width: 280px;
      max-width: 320px;
      text-align: center;
      transition: all 0.3s ease;
    }

    .box:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .box i {
      font-size: 36px;
      color: #007bff;
      margin-bottom: 18px;
    }

    .box h3 {
      margin-bottom: 12px;
      color: #222;
    }

    .box p {
      font-size: 17px;
      color: #555;
      line-height: 1.6;
    }

    footer {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 18px;
      font-size: 14px;
      border-top: 1px solid #444;
    }

    @media (max-width: 768px) {
      .header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }

      .nav-links {
        flex-wrap: wrap;
        gap: 15px;
      }

      .contact-us-heading h1 {
        font-size: 36px;
      }

      .logo-icon {
        font-size: 80px;
      }

      footer {
        font-size: 12px;
        padding: 12px;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="header">
    <div class="nav-links">
      <a href="index.html">HOME</a>
      <a href="#">SERVICES</a>
      <a href="contact.html">CONTACT US</a>
    </div>
    <button class="contact-btn"><i class="fas fa-phone"></i> Call Us</button>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="contact-us-heading">
      <h1>Contact Us</h1>
      <p>We would love to hear from you. Here’s how you can reach us.</p>
      <div class="logo-icon"><i class="fas fa-globe"></i></div>
    </div>

    <!-- Contact Info Boxes -->
    <div class="contact-boxes">
      <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Office Address</h3>
        <p>Ground Floor, 55/37, Gandhi Path,<br>Nehru Marg, PratapNagar,<br>Jaipur, Rajasthan - 302017</p>
      </div>
      <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>Email Us</h3>
        <p>circleup@gmail.com<br>support@circleup.in</p>
      </div>
      <div class="box">
        <i class="fas fa-phone-alt"></i>
        <h3>Call Us</h3>
        <p>+91 7740800008<br>+91 7744800080</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 CircleUp Software Pvt. Ltd. All rights reserved.</p>
  </footer>

</body>
</html>
