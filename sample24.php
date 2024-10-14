<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Two + Four Wheeler Registration Form</title>
    <link rel="shortcut icon" href="logo.jpg">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f8f9fa;
            color: #333;
        }

        input[type="file"] {
            border: none;
            background-color: #f8f9fa;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #dc3545;
            margin-top: 8px;
        }

        h1 {
            font-size: 35px;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        h2,
        h3 {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }        

        label {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .success-message {
            color: #28a745;
            margin-top: 8px;
        }
    </style>
</head>

<body>
    <h1>Excel Driving School</h1>
    <h2>TWO + FOUR WHEELER LICENSE</h2>
    <h3>Registration Form</h3>
    <form action="register24.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" placeholder="First Name" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>

        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" placeholder="YYYY-MM-DD" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email Address" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Address" required></textarea>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" placeholder="Pincode" required>

        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>
</body>

</html>