<?php
// Profile Data
$name = "Dilanshi Jain";
$email = "dilanshijain83@gmail.com";
$about = "I love coding and designing websites.";
$bio = "I am a passionate learner who enjoys exploring new technologies. In my free time, I like working on creative projects, learning new programming languages, and sharing knowledge with others. My goal is to create meaningful digital experiences.";
$image = "img.jpg"; // Make sure this image is uploaded in the same folder
$background = "background.png"; // The blue gradient image you uploaded
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('<?php echo $background; ?>') no-repeat center center fixed;
            background-size: cover;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .profile {
            background: rgba(255, 255, 255, 0.9);
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 100%;
            object-fit: contain;
            border: 3px solid #fff;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin: 15px 0 5px;
        }
        p {
            color: #333;
        }
        .bio {
            text-align: justify;
            margin-top: 15px;
            font-size: 14px;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="profile">
        <img src="<?php echo $image; ?>" alt="My Photo">
        <h2><?php echo $name; ?></h2>
        <p><strong>About me:</strong> <?php echo $about; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <div class="bio">
            <h3>Bio</h3>
            <p><?php echo $bio; ?></p>
        </div>
    </div>
</body>
</html>
