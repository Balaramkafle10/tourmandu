<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Information</title>
    
    <style>
/* Standard Styling */
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

.main-content1 {
    padding-top: 80px; /* Adjusted for fixed header */
    background-image: linear-gradient(rgba(141, 141, 237, 0.8), rgba(143, 143, 241, 0.8)), url(https://assets.thehansindia.com/h-upload/2019/12/27/248830-worldtour.jpg);
    background-size: cover;
    background-position: center;
    padding-bottom: 4rem;
}

.main-content {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    background: rgba(255, 255, 255, 0.9);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
}

.main-content h1 {
    font-size: 2.5rem;
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 2rem;
}

.package-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.package {
    background: white;
    padding: 1.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    transition: transform var(--transition-speed);
    text-align: center;
}

.package:hover {
    transform: translateY(-10px);
}

.package-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: var(--border-radius);
    margin-bottom: 1rem;
}

.package p {
    font-size: 1.2rem;
    color: var(--text-color);
    margin: 0.5rem 0;
}

.button2, .button1 {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: var(--border-radius);
    text-decoration: none;
    transition: background var(--transition-speed);
    margin: 0.5rem;
}

.button2 {
    background: var(--secondary-color);
    color: white;
}

.button2:hover {
    background: var(--primary-color);
}

.button1 {
    background: #ff4d4d;
    color: white;
}

.button1:hover {
    background: #cc0000;
}
    </style>
</head>
<body>
    
<section class="header">
    <a href="home.php" class="logo"><h3>TOURMANDU</h3> </a>
    <nav class="navbar">
        <a href="addPackages.php">add package</a>
        <a href="package_list.php">package information</a>
        <a href="user_list.php">user information</a>
        <a href="booked.php">package booked</a>
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-sign-out"></i></a>
    </div>
</section>
<div class="main-content1">
<div class="main-content">
 <center>  <h1>Package Information</h1><br><br></center> 

    <div class="package-container">
<?php
include 'connection.php';

// if (!isset($_SESSION['id']) || !isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
//     header('Location: login.php');
//     exit();
// }


try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $userName, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve the package records from the database
    $sql = "SELECT * FROM package";
    $stmt = $pdo->query($sql);

    // Check if there are any package records
    if ($stmt->rowCount() > 0) {
        // Loop through each package record
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $location = $row["location"];
            $duration = $row["duration"];
            $price = $row["price"];
            $photo = $row["image"];

            // Display the package record
            echo "<div class='package'>";
            // echo "<p>ID: " . $id . "</p>";
            echo "<p>Location: " . $location . "</p>";
            echo "<p>Duration: " . $duration . " </p>";
            echo "<p>Price: RS " . $price . "</p>";
            echo "<img class='package-image' src='uploads/" . htmlspecialchars($photo) . "' alt='Place Photo'>";
            echo "<div class='button2'>";
            echo "<a href='package_update.php?id=" . $id . "'>Update</a>";
            echo "</div>";
            echo "<div class='button1'>";
            echo "<a href='package_delete.php?id=" . $id . "'>Delete</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        // Display a message if there are no package records
        echo "No package records found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>
    </div>
</div>
</div>
</body>
</html>
