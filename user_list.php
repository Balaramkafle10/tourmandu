<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   
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

.information {
    padding-top: 80px; /* Adjusted for fixed header */
    background-image: linear-gradient(rgba(141, 141, 237, 0.8), rgba(143, 143, 241, 0.8)), url(https://assets.thehansindia.com/h-upload/2019/12/27/248830-worldtour.jpg);
    background-size: cover;
    background-position: center;
    padding-bottom: 4rem;
}

.information h1 {
    font-size: 2.5rem;
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 2rem;
}

table {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    border-collapse: collapse;
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    overflow: hidden;
}

table th, table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid var(--bg-color);
}

table th {
    background: var(--primary-color);
    color: white;
    font-size: 1.2rem;
}

table tr:hover {
    background: var(--bg-color);
}

table a {
    display: inline-block;
    padding: 5px 10px;
    font-size: 1rem;
    border-radius: var(--border-radius);
    text-decoration: none;
    transition: background var(--transition-speed);
    margin: 0.2rem;
}

table a.update {
    background: var(--secondary-color);
    color: white;
}

table a.update:hover {
    background: var(--primary-color);
}

table a.delete {
    background: #ff4d4d;
    color: white;
}

table a.delete:hover {
    background: #cc0000;
}
    </style>
</head>
<body>
    
<section class="header">
    <a href="home.php" class="logo"><h3>TOURMANDU</h3> </a>
    <nav class="navbar">
        <a href="addPackages.php">addPackage</a>
        <a href="package_list.php">package information</a>
        <a href="user_list.php">user information</a>
        <a href="booked.php">package booked</a>
    </nav>
    <div class="icons">
        <a href="login.php"><i class="fas fa-sign-out"></i></a>
    </div>
</section>
<div class="information">
<center><h1>User Information</h1></center>

<?php
include "connection.php";
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header('Location: login.php');
    exit();
}


$sql= "SELECT * FROM customers";
$query = $conn->query($sql);

if($query->num_rows >0){
    echo "<table border= '1'>";
    echo "<tr>";
   
    echo "<th>ID </th>";
    echo "<th>Name</th>";
    echo "<th>Address</th>";
    echo "<th>Email</th>";  
    echo "<th>Phone Number</th>";
    echo "<th>Username</th>";
    echo "<th>Is Admin";
    echo "</tr>";


    while($row = $query->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['customer_id']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['phoneNumber']."</td>";
        echo "<td>".$row['userName']."</td>";
        
        echo "<td>".$row['is_admin']."</td>";
         
        
        echo "<td>
    
        <a href= ' user_update.php? customer_id=".$row['customer_id']."'>Update</a>
        <a href= ' user_delete.php? customer_id=".$row['customer_id']."'>Delete</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";

}else{
    echo " no connection.";
}
mysqli_close($conn);

?>
</div>


</body>
</html>