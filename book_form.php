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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .container h2 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .container label {
            font-size: 1.2rem;
            color: var(--text-color);
            text-align: left;
        }

        .container input,
        .container select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            color: var(--text-color);
            border: 1px solid #ccc;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: border-color var(--transition-speed);
        }

        .container input:focus,
        .container select:focus {
            border-color: var(--secondary-color);
            outline: none;
        }

        .container input[readonly] {
            background: #f9f9f9;
            cursor: not-allowed;
        }

        .container button {
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

        .container button:hover {
            background: var(--primary-color);
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
  
