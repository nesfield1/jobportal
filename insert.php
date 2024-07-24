<?php

$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "cccssskkk"; // Your database name

$conn = new mysqli("localhost", "root", "", cccssskkk);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO users (first_name, last_name, email, phone, address)
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

            <form action="" method="post">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name"><br>
        
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name"><br>
        
                <label for="email">Email:</label>
                <input type="email" name="email" id="email"><br>
        
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone"><br>
        
                <label for="address">Address:</label>
                <input type="text" name="address" id="address"><br>
        
                <input type="submit" value="Submit">
            </form>
        