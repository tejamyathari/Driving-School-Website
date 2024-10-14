<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$dob = $_POST["dob"];
$phoneNumber = $_POST["phoneNumber"];
$email = $_POST["email"];
$address = $_POST["address"];
$pincode = $_POST["pincode"];

// Connect to the database
$servername = "localhost";
$username = "newuser";
$password = "teja1436";
$db = "drive";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the user already exis
$sql = "SELECT * FROM car24 WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   echo '<script type="text/javascript">alert("user already exists");</script>';
   include("index.php");
} else {
  // Insert the new user into the database
$sql = "INSERT INTO car24 (fname, lname, dob, phone, email, address, pincode) 
            VALUES ('$firstName', '$lastName', '$dob', '$phoneNumber', '$email', '$address', '$pincode')";
$conn->query($sql);

echo '<script type="text/javascript">alert("Registration Sucessfull");</script>';
include("index.php");
}
// Close the database connection
$conn->close();
?>