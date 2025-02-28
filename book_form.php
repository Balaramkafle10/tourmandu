<?php
require "connection.php";
   if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $price=$_POST['price'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
  
      // Debugging: Check if location is received
      if (empty($location)) {
          die("Error: Location is empty. Please check the form.");
      }
  
      $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
  
      if (mysqli_query($conn, $request)) {
        $amount = $_POST['price'] ;

        if (empty($amount)) {
            echo "Error: Amount not found!";
            exit;
        }

      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px gray;
            width: 400px;
        }
        input, select, button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #28a745;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Form</h2>
    <form method="POST" action="processing_paynow.php">
        <input type="hidden" name="name" value="<?= $name ?>">
        <input type="hidden" name="email" value="<?= $email ?>">
        <input type="hidden" name="phone" value="<?= $phone ?>">
        <input type="hidden" name="location" value="<?= $location ?>">
        <input type="hidden" name="guests" value="<?= $guests ?>">
        <label>Amount (NPR):</label>
        <input type="number" name="amount" value="<?= (htmlspecialchars($amount) * $guests); ?>" readonly required>
        <label>Payment Method:</label>
        <select name="payment_method" required>
            <option value="Cash on Arrival">Cash on Arrival</option>
        </select>
        <button type="submit" name="pay">Pay Now</button>
    </form>
</div>


</body>
</html>


<?php
    //closing of the php
    }
?>
  
