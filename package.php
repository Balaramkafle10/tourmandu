<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
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

#menu-btn {
    font-size: 1.5rem;
    color: white;
    cursor: pointer;
    display: none; /* Hidden by default, typically shown on mobile via JS */
}

.heading {
    width: 100%;
    height: 50vh;
    background-size: cover !important;
    background-position: center !important;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 60px; /* Adjusted for fixed header */
}

.heading h1 {
    font-size: 4rem;
    text-transform: uppercase;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.packages {
    padding: 4rem 2rem;
    background: white;
}

.packages .heading-title {
    font-size: 2.5rem;
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 2rem;
}

.packages .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    padding: 2rem;
}

.packages .box {
    background: var(--bg-color);
    padding: 20px;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    transition: transform var(--transition-speed);
    overflow: hidden;
    text-align: center;
}

.packages .box:hover {
    transform: translateY(-10px);
}

.packages .box .image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: var(--border-radius);
    transition: transform var(--transition-speed);
}

.packages .box:hover .image img {
    transform: scale(1.1);
}

.packages .box .content {
    padding: 1.5rem;
}

.packages .box .content h3 {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.packages .box .content h3 i {
    color: var(--secondary-color);
    margin-right: 0.5rem;
}

.packages .box .content p {
    font-size: 1.2rem;
    color: var(--text-color);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.packages .box .content .price {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.packages .box .content .price span {
    font-size: 1.4rem;
    color: #666;
    text-decoration: line-through;
    margin-left: 0.5rem;
}

.packages .box .content .booknow {
    background: var(--secondary-color);
    color: white;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: var(--border-radius);
    text-decoration: none;
    transition: background var(--transition-speed);
    display: inline-block;
    margin-top: 1rem;
}

.packages .box .content .booknow:hover {
    background: var(--primary-color);
}

.footer {
    background: var(--primary-color);
    padding: 4rem 2rem;
    color: white;
}

.footer .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.footer .box h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.footer .box a {
    color: var(--secondary-color);
    font-size: 1.1rem;
    display: block;
    margin: 0.5rem 0;
    text-decoration: none;
    transition: color var(--transition-speed);
}

.footer .box a:hover {
    color: white;
}

.footer .credit {
    margin-top: 2rem;
    font-size: 1rem;
    text-align: center;
}

.footer .credit span {
    color: var(--secondary-color);
}
    </style>
</head>
<body>
<section class="header">
    <a href="home.php" class="logo"><h3>TOURMANDU</h3></a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <!-- <a href="book.php">Book</a> -->
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-user-circle"></i>Login</a>
    </div>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url('https://hips.hearstapps.com/hmg-prod/images/autumn-leaves-fallen-in-forest-royalty-free-image-1628717422.jpg?crop=1xw:0.84375xh;center,top') no-repeat">
   <h1>Packages</h1>
</div>

<section class="packages">
    <h1 class="heading-title">Top Destinations</h1>
    <div class="box-container">
        <?php
        include 'connection.php';

        try {
            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$servername;dbname=$database", $userName, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve the package records from the database
            $sql = "SELECT id, location, duration, price, image FROM package";
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
                    $_SESSION['location']=$location;
                    // Display the package record
                    echo "<div class='box'>";
                    echo "<div class='image'><img src='uploads/" . htmlspecialchars($photo) . "' alt='Place Photo'></div>";
                    echo "<div class='content'>";
                    echo "<h3><i class='fa fa-map-marker-alt' style='font-size:18px;color:darkred'></i> " . htmlspecialchars($location) . "</h3>";
                    echo "<div class='price'>Rs." . htmlspecialchars($price) . " (per person)</div>";
                    echo "<h4>" . htmlspecialchars($duration) . "</h4>"; 
                    ?>
                   <form action="book.php" method="get">
                        <input type="hidden" name="loc" value="<?php echo htmlspecialchars($location); ?>"/>
                        <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>"/>
                        <button type="submit" name="bookNow" class="booknow">Book Now</button>
                    </form>
                    <?php
                    echo "</div></div>";
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
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +977 9843238782</a>
            <a href="#"><i class="fas fa-envelope"></i>kafle@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Bagmati Province, Kathmandu, Nepal</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>

    </div>

    <div class="credit">created by <span>mr. kafle toli</span> | all right reserved!</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
    
</body>
</html>
