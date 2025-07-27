<?php
session_start();
require_once 'database.php';

// Check if supplier is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $supplier_id = $_SESSION['user_id'];

    // Validate input (basic)
    if (empty($name) || empty($price) || empty($quantity)) {
        echo "All fields are required.";
        exit();
    }

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO raw_materials (name, price, quantity_available, supplier_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdii", $name, $price, $quantity, $supplier_id);

    if ($stmt->execute()) {
        echo "<script>alert('Raw material added successfully!'); window.location.href='dashboard_supplier.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
