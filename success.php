<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px gray;
            width: 50%;
            margin: auto;
        }
        button {
            display: block;
            margin-top: 20px;
            border: none;
            background: #28a745;
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 150px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Successful!</h2>
    <p>Thank you for your payment. Your booking is confirmed.</p>
    <form action="" method="post">
    <button name="ok">OK</button>
    </form>
</div>

   


</body>
</html>


<?php
if(isset($_POST['ok'])){
header("Location:package.php");
}
?>