<?php
session_start();
require_once 'database.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'supplier') {
    header("Location: login.php");
    exit();
}
?>

<h2>Supplier Dashboard</h2>
<form action="add_material.php" method="POST">
    <input type="text" name="name" placeholder="Material Name" required>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <input type="number" name="quantity" placeholder="Quantity" required>
    <button type="submit">Add Material</button>
</form>
<a href="logout.php">Logout</a>
