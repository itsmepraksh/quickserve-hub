<?php
session_start();

// DB connection
$conn = new mysqli("localhost", "root", "", "quickserve_hub");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    echo "Username: $uname<br>";
    echo "Password: $password<br>";

    $sql = "SELECT * FROM users WHERE uname='$uname' AND password='$password'";
    echo "Query: $sql<br>";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        $_SESSION['uname'] = $user['uname'];
        $_SESSION['role'] = $user['role'];

        echo "Login successful!<br>";

        // Check role properly
        if ($user['role'] == 'vendor') {
            echo "Redirecting to vendor dashboard...";
            header("Location: vendor_dashboard.php");
        } else {
            echo "Redirecting to supplier dashboard...";
            header("Location: dashboard_supplier.php");
        }
        exit();
    } else {
        echo "User not found!";
    }
    $conn->close();
}
?>