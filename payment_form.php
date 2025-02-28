<?php
require "connection.php";

// Check if amount is passed correctly
$amount = $_POST['price'] ?? $_POST['price'] ?? '';

if (empty($amount)) {
    echo "Error: Amount not found!";
    exit;
}

if (isset($_POST['pay'])) {
    // Get values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $price=$_POST['price'];
    $guests = $_POST['guests'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    // Insert payment details into the database
    $stmt = $conn->prepare("INSERT INTO payments (name, email, phone, location, guests, amount, payment_method) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $location, $guests, $amount, $payment_method);

    if ($stmt->execute()) {
        echo "<script>alert('Payment Successful!'); window.location='success.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
