<?php
session_start();
require_once 'database.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'vendor') {
    header("Location: login.php");
    exit();
}

$query = "SELECT r.name, r.price, r.quantity_available, u.name AS supplier FROM raw_materials r JOIN users u ON r.supplier_id = u.id";
$result = $conn->query($query);
?>

<h2>Vendor Dashboard</h2>
<table border="1">
<tr><th>Material</th><th>Price</th><th>Available</th><th>Supplier</th></tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['price'] ?></td>
    <td><?= $row['quantity_available'] ?></td>
    <td><?= $row['supplier'] ?></td>
</tr>
<?php endwhile; ?>
</table>
<a href="logout.php">Logout</a>
