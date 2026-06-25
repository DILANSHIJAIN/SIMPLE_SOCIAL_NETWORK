<?php
$page = $_GET['page'] ?? 'home';

// Example: pretend we got profiles from the database
$profiles = [
  ["id" => 1, "name" => "John Doe", "bio" => "Loves coding and open-source projects."],
  ["id" => 2, "name" => "Jane Smith", "bio" => "UI/UX enthusiast and frontend developer."],
  ["id" => 3, "name" => "Alex Carter", "bio" => "Second-year SKIT College student, passionate about coding."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Discover People</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 40px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0f7ff, #f2faff);
      color: #222;
    }
    .center-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }
    .feature-card {
      background-color: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 300px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none;
      color: inherit;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    .feature-icon {
      font-size: 60px;
      color: #007bff;
      margin-bottom: 20px;
    }
    .feature-title {
      font-size: 24px;
      color: #007bff;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .feature-desc {
      font-size: 16px;
      color: #555;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #007bff;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      line-height: 1.8;
      color: #444;
    }
    .search-bar {
      display: flex;
      margin-top: 25px;
    }
    .search-bar input {
      flex: 1;
      padding: 12px;
      border: 2px solid #007bff;
      border-radius: 8px 0 0 8px;
      font-size: 16px;
      outline: none;
    }
    .search-bar button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px 18px;
      font-size: 16px;
      border-radius: 0 8px 8px 0;
      cursor: pointer;
    }
    .search-bar button:hover {
      background-color: #0056b3;
    }
    /* Profile Card */
    .profile-card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      margin-top: 20px;
    }
    .profile-name {
      font-size: 20px;
      font-weight: bold;
      color: #007bff;
    }
    .profile-bio {
      color: #555;
      margin: 10px 0;
    }
    .friend-actions button {
      padding: 8px 14px;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      margin-right: 5px;
    }
    .btn-add {
      background: #28a745;
      color: white;
    }
    .btn-add:hover {
      background: #218838;
    }
    .btn-remove {
      background: #dc3545;
      color: white;
    }
    .btn-remove:hover {
      background: #c82333;
    }
    .btn-added {
      background: #6c757d;
      color: white;
      cursor: default;
    }
  </style>
</head>
<body>

<?php if ($page === 'connect'): ?>
  <div class="container">
    <h1>How to Connect with New Friends</h1>
    <p>
      You can connect with people who share your interests by joining groups, participating in discussions,
      and sharing your thoughts regularly. Use the discover feature to explore profiles, follow users,
      and start conversations to build meaningful connections.
    </p>

    <!-- Search bar for profiles -->
    <form class="search-bar" action="discover.php" method="GET">
      <input type="hidden" name="page" value="connect">
      <input type="text" name="query" placeholder="Search profiles..." required>
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>

    <!-- Example profile results -->
    <?php foreach ($profiles as $profile): ?>
      <div class="profile-card" id="profile-<?= $profile['id'] ?>">
        <div class="profile-name"><?= htmlspecialchars($profile['name']) ?></div>
        <div class="profile-bio"><?= htmlspecialchars($profile['bio']) ?></div>
        <div class="friend-actions">
          <button class="btn-add" data-friend-id="<?= $profile['id'] ?>">
            <i class="fas fa-user-plus"></i> Add Friend
          </button>
          <button class="btn-remove" data-friend-id="<?= $profile['id'] ?>">
            <i class="fas fa-user-minus"></i> Remove Friend
          </button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- AJAX Script -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Add Friend
    document.querySelectorAll(".btn-add").forEach(function(button) {
      button.addEventListener("click", function(e) {
        e.preventDefault();
        let friendId = this.getAttribute("data-friend-id");
        let btn = this;

        fetch("add_friend.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: "friend_id=" + encodeURIComponent(friendId)
        })
        .then(response => response.text())
        .then(data => {
          btn.textContent = "✔ Added";
          btn.classList.remove("btn-add");
          btn.classList.add("btn-added");
          btn.disabled = true;
        })
        .catch(err => {
          console.error("Error adding friend:", err);
        });
      });
    });

    // Remove Friend
    document.querySelectorAll(".btn-remove").forEach(function(button) {
      button.addEventListener("click", function(e) {
        e.preventDefault();
        let friendId = this.getAttribute("data-friend-id");
        let card = document.getElementById("profile-" + friendId);

        fetch("remove_friend.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: "friend_id=" + encodeURIComponent(friendId)
        })
        .then(response => response.text())
        .then(data => {
          if (card) {
            card.remove(); // Remove profile from page
          }
        })
        .catch(err => {
          console.error("Error removing friend:", err);
        });
      });
    });
  });
  </script>

<?php else: ?>
  <div class="center-wrapper">
    <a href="discover.php?page=connect" class="feature-card">
      <div class="feature-icon">🔍</div>
      <div class="feature-title">Discover People</div>
      <div class="feature-desc">Find and connect with new friends who share your interests.</div>
    </a>
  </div>
<?php endif; ?>

</body>
</html>