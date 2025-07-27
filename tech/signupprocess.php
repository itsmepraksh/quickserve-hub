<?php
session_start();
$conn = new mysqli("localhost", "root", "", "quickserve_hub");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = trim($_POST['uname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    // Check for empty fields
    if (empty($uname) || empty($email) || empty($password) || empty($role)) {
        echo "❌ Please fill all fields.";
        exit();
    }

    // Check duplicate username or email
    $stmt = $conn->prepare("SELECT id FROM users WHERE uname = ? OR email = ?");
    $stmt->bind_param("ss", $uname, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "❌ Username or Email already exists!";
        $stmt->close();
        $conn->close();
        exit();
    }
    $stmt->close();

    // Optional: Hash the password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (uname, email, password, role, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $uname, $email, $password, $role);

    if ($stmt->execute()) {
        $_SESSION['uname'] = $uname;
        $_SESSION['role'] = $role;

        // Redirect to dashboard based on role
        if ($role === 'vendor') {
            header("Location: vendor_dashboard.php");
        } elseif ($role === 'supplier') {
            header("Location: dashboard_supplier.php");
        } else {
            echo "❌ Invalid role!";
        }
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
