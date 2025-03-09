<?php
require "connection.php";

$location = isset($_GET['loc']) ? $_GET['loc'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : 0; // Fetch price from GET request
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <style>
        /* Standard Styling from about.php */
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
            background-size: cover;
            background-position: center;
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

        .booking {
            padding: 4rem 2rem;
            background: white;
        }

        .booking .heading-title {
            font-size: 2.5rem;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 2rem;
        }

        .booking .book-form {
            padding: 2rem;
            background: var(--bg-color);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .booking .book-form .flex {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .booking .book-form .flex .inputBox {
            flex: 1 1 45%;
        }

        .booking .book-form .flex .inputBox span {
            font-size: 1.2rem;
            color: var(--text-color);
        }

        .booking .book-form .flex .inputBox input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            color: var(--text-color);
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .booking .book-form .flex .inputBox input:focus {
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
            transition: background var(--transition-speed);
            text-decoration: none;
            margin-top: 2rem;
            cursor: pointer;
            border: none;
        }

        .btn:hover {
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
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-user-circle"></i> Login</a>
    </div>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url(https://hips.hearstapps.com/hmg-prod/images/autumn-leaves-fallen-in-forest-royalty-free-image-1628717422.jpg?crop=1xw:0.84375xh;center,top) no-repeat">
   <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox" id="email">
                <span>email:</span>
                <input type="email" placeholder="enter your email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$" required>
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="tel" placeholder="enter your number" name="phone" pattern="[9][7-8][0-9]{8}" required>
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>where to:</span>
                <input type="text" name="location" value="<?php echo htmlspecialchars($location); ?>" readonly>
            </div>
            <div class="inputBox">
                <span>Price:</span>
                <input type="text" name="price" value="<?php echo htmlspecialchars($price); ?>" readonly>
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="number of guests" name="guests" min="1" required>
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date" id="date-input" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date" id="leaving-date" name="leaving" required>
            </div>
        </div>
        <button type="submit" value="submit" class="btn" name="send">Submit</button>
    </form>
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
            <a href="#"><i class="fas fa-envelope"></i> kafle@gmail.com</a>
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
    <div class="credit">created by <span>mr. kafle toli</span> | all rights reserved!</div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('date-input').setAttribute('min', today);
        document.getElementById('leaving-date').setAttribute('min', today);
    });
</script>
</body>
</html>