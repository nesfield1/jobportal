<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "Address: " . $row["address"] . "<br><br>";
    }
} else {
    echo "No records found.";
}
?>
