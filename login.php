
<?php
include 'connection.php'; // Ensure this file includes MySQL connection code
session_start(); // Start the session

$userName = $Password = "";
$username_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = $_POST['userName'];
  $Password = $_POST['Password'];

  // Create a prepared statement for checking admin
  $stmtAdmin = $conn->prepare("SELECT customer_id, userName, Password FROM customers WHERE userName = ? AND is_admin = 1");
  $stmtAdmin->bind_param("s", $userName);
  $stmtAdmin->execute();
  $resultAdmin = $stmtAdmin->get_result();

  if ($resultAdmin->num_rows > 0) {
    $rowAdmin = $resultAdmin->fetch_assoc();
    if ($Password == $rowAdmin['Password']) { // Compare plain passwords directly
      // Redirect admin to addPackages.php
      $_SESSION["id"] = $rowAdmin["customer_id"];
      $_SESSION["is_admin"] = true;
      header('Location: addPackages.php');
      exit;
    } else {
      $password_err = "Invalid password for admin";
      echo "<script>alert('Invalid username or password.');</script>";
    }
  } else {
    // Create a prepared statement for checking regular users
    $stmtCustomer = $conn->prepare("SELECT customer_id, userName, Password FROM customers WHERE userName = ? AND (is_admin IS NULL OR is_admin = 0)");
    $stmtCustomer->bind_param("s", $userName);
    $stmtCustomer->execute();
    $resultCustomer = $stmtCustomer->get_result();

    if ($resultCustomer->num_rows > 0) {
      $rowCustomer = $resultCustomer->fetch_assoc();
      if ($Password == $rowCustomer['Password']) { // Compare plain passwords directly
        // Redirect regular user to package.php
        $_SESSION["id"] = $rowCustomer["customer_id"];
        $_SESSION["is_admin"] = false;
        header('Location: package.php');
        exit;
      } else {
        $password_err = "Invalid password";
        echo "<script>alert('Invalid username or password.');</script>";
     }
    } else {
      $username_err = "User not found";
      echo "<script>alert('Invalid username or password.');</script>";
    }
  }

  $stmtAdmin->close();
  $stmtCustomer->close();
}
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

.login-container {
    padding-top: 80px; /* Adjusted for fixed header */
    background-image: linear-gradient(rgba(141, 141, 237, 0.8), rgba(143, 143, 241, 0.8)), url(https://assets.thehansindia.com/h-upload/2019/12/27/248830-worldtour.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-box {
    background: rgba(255, 255, 255, 0.9);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    padding: 2rem;
    width: 90%;
    max-width: 400px;
    text-align: center;
}

.form-box h1 {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    position: relative;
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
    transition: max-height 0.5s;
    overflow: hidden;
}

.input-field i {
    margin-left: 15px;
    color: var(--primary-color);
}

.input-field input {
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 15px 20px;
    font-size: 1rem;
}

.btn-field {
    width: 100%;
    margin-top: 1rem;
    display: flex;
    justify-content: center;
}

.btn-field button {
    background: var(--secondary-color);
    color: white;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: var(--border-radius);
    border: none;
    cursor: pointer;
    transition: background var(--transition-speed);
}

.btn-field button:hover {
    background: var(--primary-color);
}

.form-box p {
    font-size: 0.9rem;
    margin-top: 1rem;
}

.form-box p a {
    color: var(--secondary-color);
    text-decoration: none;
    transition: color var(--transition-speed);
}

.form-box p a:hover {
    color: var(--primary-color);
}

.footer {
    background: var(--primary-color);
    padding: 2rem;
    color: white;
    text-align: center;
}

.footer .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.footer .box h3 {
    font-size: 1.2rem;
    margin-bottom: 0.8rem;
}

.footer .box a {
    color: var(--secondary-color);
    font-size: 0.9rem;
    display: block;
    margin: 0.4rem 0;
    text-decoration: none;
    transition: color var(--transition-speed);
}

.footer .box a:hover {
    color: white;
}

.footer .credit {
    font-size: 0.9rem;
    margin-top: 1rem;
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
                Login
            </h1>
        <form action="login.php" method="POST"  id="myForm">

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" class="case" name="userName" id="userName" placeholder="username" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="Password" id="Password" placeholder="password" required>
                    </div>
                </div>
                
                <div class="btn-field">
                   <button type="submit" id="login">Login</button> 
                </div>
                 <h3><a href="#">Forget Password?</a></h3>
                <h3>don't have account?<a href="register.php"> Create account.</a></h3>
            </form>
        <p id="error-message" class="error-message" style="color: red;"></p>
    </div>
    </div>    
</body>
</html>

