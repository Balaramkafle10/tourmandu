<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
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