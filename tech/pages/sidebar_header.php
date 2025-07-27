<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vendor Panel</title>
  <link rel="stylesheet" href="../dashboard_vendor.css">
</head>
<body>
  <header class="top-bar">
    <div class="navbar">
      <h1>Welcome, <?php echo $_SESSION['username']; ?> 👋</h1>
      <a href="../logout.php" class="logout-btn">Logout</a>
    </div>
  </header>

  <div class="dashboard">
    <aside class="sidebar">
      <ul>
        <li><a href="browse_suppliers.php">🏬 Browse Suppliers</a></li>
        <li><a href="place_order.php">📝 Place Order</a></li>
        <li><a href="my_orders.php">🛒 My Orders</a></li>
        <li><a href="deals_nearby.php">📍 Nearby Deals</a></li>
        <li><a href="messages.php">💬 Messages</a></li>
        <li><a href="settings.php">⚙️ Settings</a></li>
      </ul>
    </aside>

    <main class="main-content">
