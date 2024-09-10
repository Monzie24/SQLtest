<?php
if (isset($_POST['test_connection'])) {
    $host = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Attempt to connect to MySQL
    $conn = @new mysqli($host, $username, $password);

    if ($conn->connect_error) {
        echo "<p style='color: red;'>Connection failed: " . $conn->connect_error . "</p>";
    } else {
        echo "<p style='color: green;'>Connection successful!</p>";
        $conn->close();
    }
}
?>
