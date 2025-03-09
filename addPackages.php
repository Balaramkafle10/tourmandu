<?php
include 'connection.php';
session_start();

// Ensure only admins can access this page
if (!isset($_SESSION['id']) || !isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header('Location: login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $upload_dir = 'uploads/';
    
    // Ensure the uploads directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Handle file upload
    $target_file = $upload_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = str_replace("uploads/", "", $target_file);

    } else {
        echo "Error uploading file.";
        exit;
    }

    // Get form data
    $location = trim($_POST["location"]);
    $duration = trim($_POST["duration"]);
    $price = trim($_POST["price"]);

    // Prevent duplicate entries
    $checkQuery = "SELECT COUNT(*) FROM package WHERE location = ? AND duration = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("ss", $location, $duration);
    $checkStmt->execute();
    $checkStmt->bind_result($count);
    $checkStmt->fetch();
    $checkStmt->close();

    if ($count > 0) {
        echo "<script>alert('Package already exists!'); window.location.href='addPackages.php';</script>";
        exit;
    }

    // Insert the package into the database
    $query = "INSERT INTO package(image, location, duration, price) VALUES (?, ?, ?, ?)";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ssss", $image, $location, $duration, $price);
        if ($stmt->execute()) {
            header('Location: package_list.php'); // Prevents re-submission
            exit();
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Packages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #f39c12;
            --text-color: #333;
            --bg-color: #ecf0f1;
            --box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
            --transition-speed: 0.3s;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: var(--primary-color);
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--box-shadow);
        }

        .header .logo h3 {
            color: var(--secondary-color);
            font-size: 1.8rem;
            margin: 0;
        }

        .navbar a {
            color: white;
            font-size: 1rem;
            margin: 0 15px;
            text-decoration: none;
            transition: color var(--transition-speed);
        }

        .navbar a:hover {
            color: var(--secondary-color);
        }

        .icons a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color var(--transition-speed);
        }

        .icons a:hover {
            color: var(--secondary-color);
        }

        .container {
            padding-top: 80px;
            background-image: linear-gradient(rgba(141, 141, 237, 0.8), rgba(143, 143, 241, 0.8)), 
                url(https://assets.thehansindia.com/h-upload/2019/12/27/248830-worldtour.jpg);
            background-size: cover;
            background-position: center;
            padding-bottom: 4rem;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            width: 90%;
            max-width: 450px;
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            text-align: center;
        }

        .form h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }

        .form-box {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-box label {
            font-size: 1.2rem;
            color: var(--primary-color);
            text-align: left;
        }

        .form-box input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: border-color var(--transition-speed);
        }

        .form-box input:focus {
            border-color: var(--secondary-color);
            outline: none;
        }

        .btn {
            display: inline-block;
            background: var(--secondary-color);
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: var(--border-radius);
            border: none;
            cursor: pointer;
            transition: background var(--transition-speed);
            margin-top: 1rem;
        }

        .btn:hover {
            background: var(--primary-color);
        }
    </style>
</head>
<body>

<section class="header">
    <a href="home.php" class="logo"><h3>TOURMANDU</h3></a>
    <nav class="navbar">
        <a href="addPackages.php">addPackage</a>
        <a href="package_list.php">package information</a>
        <a href="user_list.php">user information</a>
        <a href="booked.php">package booked</a>
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-sign-out"></i> LOGOUT</a>
    </div>
</section>

<div class="container">
    <div class="form">
        <h1>Add Package</h1>
        <form class="form-box" method="post" enctype="multipart/form-data">
            <label for="image">Image*:</label>
            <input type="file" id="image" name="image" required>

            <label for="location">Location*:</label>
            <input type="text" name="location" required>

            <label for="duration">Time Duration*:</label>
            <input type="text" name="duration" required>

            <label for="price">Price*:</label>
            <input type="number" name="price" required>

            <button type="submit" class="btn">Add Package</button>
        </form>
    </div>
</div>

</body>
</html>
