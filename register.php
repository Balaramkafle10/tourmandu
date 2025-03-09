<?php
include 'connection.php'; // Ensure this file includes MySQL connection code

// Define variables and initialize with empty values
$Name = $Address = $phoneNumber = $Email = $userName = $Password = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Name = $_POST['Name'];
  $Address = $_POST['Address'];
  $phoneNumber = $_POST['phoneNumber'];
  $Email = $_POST['Email'];
  $userName = $_POST['userName'];
  $Password = $_POST['Password'];

  // Validate and prepare the SQL query
  $query = "INSERT INTO customers (Name, Address, phoneNumber, Email, userName, Password) 
              VALUES (?, ?, ?, ?, ?, ?)";

  // Prepare the statement
  if ($stmt = $conn->prepare($query)) {
    // Bind parameters
    $stmt->bind_param("ssssss", $Name, $Address, $phoneNumber, $Email, $userName, $Password);

    // Execute the statement
    if ($stmt->execute()) {
      echo "Data stored successfully"; // Add this for debugging

      // Registration successful, redirect to login page
      header("location: login.php");
      exit;
    } else {
      echo "Error executing statement: " . $stmt->error;
    }

    // Close the statement
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
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="script1.js">
    <style>
/* Standard Styling from package.php */
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

.header .icons a {
    color: white;
    font-size: 1rem;
    text-decoration: none;
    margin-right: 1.5rem;
    transition: color var(--transition-speed);
}

.header .icons a:hover {
    color: var(--secondary-color);
}

#menu-btn {
    font-size: 1.5rem;
    color: white;
    cursor: pointer;
    display: none; /* Hidden by default, typically shown on mobile via JS */
}

/* Adapted Styling for Register Page */
.login-container {
    height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(141, 141, 237, 0.8), rgba(143, 143, 241, 0.8)), url(https://assets.thehansindia.com/h-upload/2019/12/27/248830-worldtour.jpg);
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 60px; /* Adjusted for fixed header */
}

.form-box {
    border-radius: var(--border-radius);
    width: 90%;
    max-width: 450px;
    background: white;
    padding: 50px 60px 70px;
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: transform var(--transition-speed);
}

.form-box:hover {
    transform: translateY(-10px);
}

.form-box h1 {
    font-size: 2.2rem;
    margin-bottom: 20px;
    color: var(--primary-color);
    position: relative;
    text-transform: uppercase;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.form-box h1::after {
    content: '';
    width: 50px;
    height: 4px;
    border-radius: 3px;
    background: var(--secondary-color);
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
}

.input-field {
    background: var(--bg-color);
    margin: 15px 0;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    max-height: 65px;
    transition: max-height var(--transition-speed);
    overflow: hidden;
    box-shadow: var(--box-shadow);
}

.input-field i {
    margin-left: 15px;
    color: var(--primary-color);
}

input {
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 19px 20px;
    font-size: 1rem;
    color: var(--text-color);
}

form p {
    text-align: left;
    font-size: 1rem;
    margin: 0.5rem 0;
}

form p a {
    text-decoration: none;
    color: var(--primary-color);
    transition: color var(--transition-speed);
}

form p a:hover {
    color: var(--secondary-color);
}

.btn-field {
    width: 100%;
    margin-top: 10px;
    padding: 10px 0;
    display: flex;
    justify-content: center;
}

.btn-field button {
    height: 4rem;
    width: 10rem;
    background: var(--secondary-color);
    color: white;
    border-radius: var(--border-radius);
    cursor: pointer;
    font-size: 1rem;
    border: none;
    transition: background var(--transition-speed);
}

.btn-field button:hover {
    background: var(--primary-color);
}

form h3 {
    font-size: 1.2rem;
    color: var(--text-color);
    margin-top: 1rem;
}

form h3 a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color var(--transition-speed);
}

form h3 a:hover {
    color: var(--secondary-color);
}

/* Footer Styling from package.php */
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
<body >
    
<section class="header">
    <a href="home.php" class="logo"><h3>TOURMANDU</h3> </a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
       
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-user-circle"></i>Login</a>
        <!-- <a href="admin.php"><i class="fas fa-user-alt"></i>Admin</a> -->
        
        
    </div>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="login-container">
<div class="form-box">
            <h1 id="title">
                Register
            </h1>
        <form action="register.php" method="POST"  id="myForm">

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text"  name="Name" placeholder="Full Name" pattern="[A-Za-z]+\s[A-Za-z]+" title="Please enter at least two words (name and surname)" required>
                    </div>
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-map-marker-alt"></i>
                        <input type="text"  name="Address" placeholder="Address"  required>
                    </div>
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email"  name="Email" placeholder="Email" pattern="[a-zA-Z._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  required>
                    </div>
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text"  name="phoneNumber" placeholder="Phone Number" pattern="[9][7-8][0-9]{8}" title="Please enter a 10-digit number" required>
                    </div>
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user-circle"></i>
                        <input type="text"  name="userName" placeholder="Username"  pattern="[A-Za-z][A-Za-z0-9]*" title="Username must start with a letter and can contain letters and numbers" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()]).{8,}" title="" required>
">
                    </div>
                </div>

                <div>
                <label for="check">i agree to all<a href="#"> term & condition. </a></label>
                    <input type="checkbox" name="check" id="check">
                    
                </div>
                
                <div class="btn-field">
                <button type="submit" id="login">Signup</button>
                </div>
                <h3>already have a account? <a href="login.php">Login</a></h3>
            </form>
    </div>
    </div>
</body>
</html>
