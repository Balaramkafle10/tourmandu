<?php
    session_start();
    require "connection.php";

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
           header("Location:success.php");

        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
?>
