<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myprofile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
        }

        .navbar a {
            color: brown;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            width: 400px;
            margin: 30px auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: orchid;
        }

        .row {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        
        }

        #passwordSection {
            display: none;
        }

        button {
            margin-top: 15px;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<header>
    <marquee direction="right">
        <h1 style="color: brown;">VSPIRE INNOVATION LTD.</h1>
    </marquee>
</header>

<hr>

<div class="navbar">
    <a href="homepage.php">Home</a>
    
</div>





<?php
session_start();
include 'database.php';

$email = $_SESSION['email'];

$sql = "SELECT fullname,address, email, contact, code,age, password FROM student WHERE email='$email'";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);
?>
<div class="container">
    <h3>User Information</h3>

    <p><b>Name:</b> <?php echo $user['fullname']; ?></p>
<p><b>Email:</b> <?php echo $user['email']; ?></p>
<p><b>Address:</b> <?php echo $user['address']; ?></p>
<p><b>Contact:</b> <?php echo $user['contact']; ?></p>
<p><b>Pincode:</b> <?php echo $user['code']; ?></p>
<p><b>Age:</b> <?php echo $user['age']; ?></p>
<p><b>Password:</b> <?php echo $user['password']; ?></p>
<button  href="logout.php">logout </button>
<button  href="update.php">Edit </button>
    <hr>

    
</div>


</body>
</html>